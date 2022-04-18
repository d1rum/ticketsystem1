<?php

namespace App\Controller\Backend;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackendController extends AbstractController
{
    #[Route('/admin', name: 'admin_backend')]
    public function index(): Response
    {
        return $this->render('backend/menu/default/index.html.twig', [
        ]);
    }
}
