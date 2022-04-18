<?php

namespace App\Controller\Backend\Category;

use App\Entity\Backend\Category;
use App\Form\Backend\Category\CategoryFormType;
use App\Repository\Backend\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/category")
 */
class CategoryController extends AbstractController
{
    public $entityManager;
    public $categoryRepository;
    public function __construct(EntityManagerInterface $entityManager, CategoryRepository $categoryRepository)
    {
        $this->entityManager = $entityManager;
        $this->categoryRepository = $categoryRepository;
    }

    // LIST
    #[Route('/list', name: 'admin_category_list')]
    public function list(): Response
    {
        $category = $this->categoryRepository->findAll();
        return $this->render('backend/menu/category/list.html.twig', [
            'list' => $category,
        ]);
    }

    // CREATE
    #[Route('/create', name: 'admin_category_create')]
    public function create(Request $request): Response
    {
        $category = new Category();
        $form = $this->createForm(CategoryFormType::class,$category);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $this->entityManager->persist($category);
            $this->entityManager->flush();
            $this->addFlash('success','Category Created');
            return $this->redirectToRoute('admin_category_list');
        }
        return $this->render('backend/menu/category/create.html.twig', [
            'form' => $form->createView()
        ]);
    }

    // EDIT
    #[Route('/edit/{id}', name: 'admin_category_edit')]
    public function edit(Request $request, $id): Response
    {
        $category = $this->categoryRepository->find($id);
        $form = $this->createForm(CategoryFormType::class,$category);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $this->entityManager->persist($category);
            $this->entityManager->flush();
            $this->addFlash('success','Category Updated');
            return $this->redirectToRoute('admin_category_list');
        }
        return $this->render('backend/menu/category/edit.html.twig',[
            'form' => $form->createView()
        ]);
    }

    // DELETE
    #[Route('/delete/{id}', name: 'admin_category_delete')]
    public function delete($id): Response
    {
        $data = $this->categoryRepository->find($id);
        $this->entityManager->remove($data);
        $this->entityManager->flush();
//        $this->addFlash('success','Category Deleted');
        return $this->redirectToRoute('admin_category_list');
    }


}
