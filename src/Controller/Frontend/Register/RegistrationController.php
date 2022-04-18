<?php

namespace App\Controller\Frontend\Register;

use App\Entity\User;
use App\Form\Frontend\RegistrationFormType;
use App\Repository\Backend\UserRepository;
use App\Security\EmailVerifier;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\BodyRenderer;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class RegistrationController extends AbstractController
{
    private EmailVerifier $emailVerifier;

    private UserRepository $userRepository;

    public function __construct(EmailVerifier $emailVerifier, UserRepository $userRepository)
    {
        $this->emailVerifier = $emailVerifier;

        $this->userRepository = $userRepository;
    }

    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager,AuthenticationUtils $authenticationUtils): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);
        $error = $authenticationUtils->getLastAuthenticationError();
        if ($form->isSubmitted() && $form->isValid()) {
            if($form->get('plainPassword')->getData() === $form->get('confirmPassword')->getData()){
                // encode the plain password
                $user->setPassword(
                    $userPasswordHasher->hashPassword(
                        $user,
                        $form->get('plainPassword')->getData()
                    )
                );
                $user->setStatus(1);
                $user->setRoles(["ROLE_USER"]);
                $entityManager->persist($user);
                $entityManager->flush();
                $transport = Transport::fromDsn($_ENV['MAILER_DSN']);
                $customMailer = new Mailer($transport);
                // generate a signed url and email it to the user
                $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                    $email = (new TemplatedEmail())
                        ->from(new Address('info@balinsoft.com', 'Robot'))
                        ->to($user->getEmail())
                        ->subject('Please Confirm your Email')
                        ->htmlTemplate('frontend/auth/confirmation_email.html.twig')
    //                    ->htmlTemplate('registration/confirmation_email.html.twig')
                );
                $loader = new FilesystemLoader('../templates/');
                $twigEnv = new Environment($loader);
                $twigBodyRenderer = new BodyRenderer($twigEnv);
                $twigBodyRenderer->render($email);
                $customMailer->send($email);
                // do anything else you need here, like send an email
    //            $this->addFlash('success','Registration successfull and please verify your email');
                return $this->redirectToRoute('app_login');
            }else{

                $this->addFlash('warning', 'Passwords are not the same!');
                return $this->render('frontend/auth/register.html.twig', [
                    'registrationForm' => $form->createView(),
                    'error' => $error
                ]);
            }
        }

        return $this->render('frontend/auth/register.html.twig', [
            'registrationForm' => $form->createView(),
            'error' => $error
        ]);
    }

    #[Route('/verify/email', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request, TranslatorInterface $translator): Response
    {
        $id = $request->get('id');

        if (null === $id) {
            return $this->redirectToRoute('app_register');
        }

        $user = $this->userRepository->find($id);

        if (null === $user) {
            return $this->redirectToRoute('app_register');
        }

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $user);
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));

            return $this->redirectToRoute('app_register');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Your email address has been verified.');

        return $this->redirectToRoute('app_login');
    }
}
