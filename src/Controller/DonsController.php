<?php

namespace App\Controller;

use App\Entity\Dnd35Dons;
use App\Form\Dnd35DonsType;
use App\Repository\DonsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/dons")
 */
class DonsController extends AbstractController
{
    /**
     * @Route("/", name="app_dons_index", methods={"GET"})
     */
    public function index(DonsRepository $donsRepository): Response
    {
        return $this->render('dons/index.html.twig', [
            'dnd35_dons' => $donsRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_dons_new", methods={"GET", "POST"})
     */
    public function new(Request $request, DonsRepository $donsRepository): Response
    {
        $dnd35Don = new Dnd35Dons();
        $form = $this->createForm(Dnd35DonsType::class, $dnd35Don);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $donsRepository->add($dnd35Don, true);

            return $this->redirectToRoute('app_dons_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('dons/new.html.twig', [
            'dnd35_don' => $dnd35Don,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_dons_show", methods={"GET"})
     */
    public function show(Dnd35Dons $dnd35Don): Response
    {
        return $this->render('dons/show.html.twig', [
            'dnd35_don' => $dnd35Don,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_dons_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Dnd35Dons $dnd35Don, DonsRepository $donsRepository): Response
    {
        $form = $this->createForm(Dnd35DonsType::class, $dnd35Don);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $donsRepository->add($dnd35Don, true);

            return $this->redirectToRoute('app_dons_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('dons/edit.html.twig', [
            'dnd35_don' => $dnd35Don,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_dons_delete", methods={"POST"})
     */
    public function delete(Request $request, Dnd35Dons $dnd35Don, DonsRepository $donsRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$dnd35Don->getId(), $request->request->get('_token'))) {
            $donsRepository->remove($dnd35Don, true);
        }

        return $this->redirectToRoute('app_dons_index', [], Response::HTTP_SEE_OTHER);
    }
}
