<?php

namespace App\Controller\Frontend;

use App\Repository\TicketRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontendController extends AbstractController
{

    private EntityManagerInterface $entityManager;
    private TicketRepository $ticketRepository;

    public function __construct(EntityManagerInterface $entityManager,TicketRepository $ticketRepository){

        $this->entityManager = $entityManager;
        $this->ticketRepository = $ticketRepository;
    }

    // Index Route
    #[Route('/', name: 'app_frontend')]
    public function index(TicketRepository $ticketRepository): Response
    {
        if($this->getUser())
        {
            return $this->render('frontend/profile/index.html.twig', [
            ]);
        }else{
            return $this->redirectToRoute('app_login');
        }





    }

}
