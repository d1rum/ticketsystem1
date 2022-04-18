<?php

namespace App\Controller\Frontend\Profile;

use App\Form\Frontend\ProfileEditFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    public $entityManager;


    public function __construct(EntityManagerInterface $entityManager,)
    {
        $this->entityManager = $entityManager;

    }


    #[Route('/profile', name: 'app_profile')]
    public function index(): Response
    {
        return $this->render('frontend/profile/index.html.twig', [
        ]);
    }

    #[Route('/profile/edit', name: 'app_profile_edit')]
    public function edit(Request $request)
    {
        $user = $this->getUser();
        $form = $this->createForm(ProfileEditFormType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $this->entityManager->persist($user);
            $this->entityManager->flush();
            return $this->redirectToRoute('app_profile');
        }
        return $this->render('frontend/profile/edit.html.twig',[
            'form' => $form->createView()
        ]);
    }
}
