<?php

namespace App\Controller\Frontend\ticket;

use App\Entity\Ticket;
use App\Form\TicketType;
use App\Repository\TicketRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TicketFrontendController extends AbstractController
{

    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/creaticket', name: 'create_ticket')]
    public function create(Request $request): Response
    {
        $ticket = new Ticket();
        $user = $this->getUser() ;
        $form = $this->createForm(TicketType::class,$ticket);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $ticket->setUser($user);
            $ticket->setStatus('0');
            $this->entityManager->persist($ticket);
            $this->entityManager->flush();
            $this->addFlash('success','Ticket Created');
            return $this->redirectToRoute('app_frontend');
        }
        return $this->render('frontend/ticket/createticket.html.twig',['form'=>$form->createView(),'user'=>$user]);
    }


    #[Route('/userticket', name: 'user_ticket_list')]
    public function userindex(TicketRepository $ticketRepository): Response
    {
        $user = $this->getUser()->getId();
        $ticket = $ticketRepository->findBy(['user'=>$user]);
        return $this->render('frontend/ticket/ticketlist.html.twig', ['ticket'=>$ticket
        ]);
    }
}
