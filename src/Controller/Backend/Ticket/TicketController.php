<?php

namespace App\Controller\Backend\Ticket;

use App\Entity\Ticket;
use App\Entity\User;
use App\Form\BackendTicketType;
use App\Form\Frontend\ProfileEditFormType;
use App\Form\TicketType;
use App\Repository\TicketRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class TicketController extends AbstractController
{

    private EntityManagerInterface $entityManager;
    private User $user;
    private Security $security;


    public function __construct(EntityManagerInterface $entityManager,Security $security)
    {
        $this->entityManager = $entityManager;
        $this->security = $security;
    }

    #[Route('/ticket', name: 'ticket_list')]
    public function backendindex(TicketRepository $ticketRepository): Response
    {
        $ticket = $ticketRepository->findAll();
        return $this->render('backend/menu/ticket/ticketlist.html.twig', ['ticket'=>$ticket
        ]);
    }

    #[Route('/editticket/{id}', name: 'edit_admin_ticket')]
    public function edit(TicketRepository $ticketRepository,Request $request,$id): Response
    {
        $ticket = $ticketRepository->find($id);
        $form = $this->createForm(BackendTicketType::class, $ticket);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $this->entityManager->persist($ticket);
            $this->entityManager->flush();
            $this->addFlash('success', 'Ticket Edit Successfully!');
            return $this->redirectToRoute('ticket_list');
        }
        return $this->render('backend/menu/ticket/editticket.html.twig',[
            'form' => $form->createView(),'ticket'=>$ticket
        ]);

    }


    #[Route('/deleteticket/{id}', name: 'delete_admin_ticket')]
    public function delete(TicketRepository $ticketRepository,Request $request,$id): Response
    {
        $ticket = $ticketRepository->find($id);
        $this->entityManager->remove($ticket);
        $this->entityManager->flush();
        return $this->redirectToRoute('ticket_list');



    }



}
