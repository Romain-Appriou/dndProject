<?php

namespace App\Controller;

use App\Entity\Dnd35Sorts;
use App\Form\Dnd35SortsType;
use App\Repository\SortsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/sorts")
 */
class SortsController extends AbstractController
{
    /**
     * @Route("/", name="app_sorts_index", methods={"GET"})
     */
    public function index(SortsRepository $sortsRepository): Response
    {
        $sorts = $sortsRepository->findBy([], ['nom' => 'ASC']);

        return $this->render('sorts/index.html.twig', [
            'dnd35_sorts' => $sorts,
        ]);
    }

    /**
     * @Route("/new", name="app_sorts_new", methods={"GET", "POST"})
     */
    public function new(Request $request, SortsRepository $sortsRepository): Response
    {
        $dnd35Sort = new Dnd35Sorts();
        $form = $this->createForm(Dnd35SortsType::class, $dnd35Sort);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $sortsRepository->add($dnd35Sort, true);

            return $this->redirectToRoute('app_sorts_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('sorts/new.html.twig', [
            'dnd35_sort' => $dnd35Sort,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_sorts_show", methods={"GET"})
     */
    public function show(Dnd35Sorts $dnd35Sort): Response
    {
        return $this->render('sorts/show.html.twig', [
            'dnd35_sort' => $dnd35Sort,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_sorts_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Dnd35Sorts $dnd35Sort, SortsRepository $sortsRepository): Response
    {
        $form = $this->createForm(Dnd35SortsType::class, $dnd35Sort);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $sortsRepository->add($dnd35Sort, true);

            return $this->redirectToRoute('app_sorts_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('sorts/edit.html.twig', [
            'dnd35_sort' => $dnd35Sort,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_sorts_delete", methods={"POST"})
     */
    public function delete(Request $request, Dnd35Sorts $dnd35Sort, SortsRepository $sortsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$dnd35Sort->getId(), $request->request->get('_token'))) {
            $sortsRepository->remove($dnd35Sort, true);
        }

        return $this->redirectToRoute('app_sorts_index', [], Response::HTTP_SEE_OTHER);
    }
}
