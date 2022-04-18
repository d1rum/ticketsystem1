<?php

namespace App\Controller\Backend\Login;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @Route("/admin")
 */
class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'admin_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
//        dd($this->getUser());
        if($this->getUser()){
            return $this->redirectToRoute('admin_backend');
        }else{
            return $this->render('backend/auth/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
        }
    }

    #[Route(path: '/logout', name: 'admin_logout')]
    public function logout()
    {
        return $this->redirectToRoute('admin_login');
    }
}
