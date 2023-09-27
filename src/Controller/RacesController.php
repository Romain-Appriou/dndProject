<?php

namespace App\Controller;

use App\Entity\Dnd35Races;
use App\Form\Dnd35RacesType;
use App\Repository\RacesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/races")
 */
class RacesController extends AbstractController
{
    /**
     * @Route("/", name="app_races_index", methods={"GET"})
     */
    public function index(RacesRepository $racesRepository): Response
    {
        return $this->render('races/index.html.twig', [
            'dnd35_races' => $racesRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_races_new", methods={"GET", "POST"})
     */
    public function new(Request $request, RacesRepository $racesRepository): Response
    {
        $dnd35Race = new Dnd35Races();
        $form = $this->createForm(Dnd35RacesType::class, $dnd35Race);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $racesRepository->add($dnd35Race, true);

            return $this->redirectToRoute('app_races_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('races/new.html.twig', [
            'dnd35_race' => $dnd35Race,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_races_show", methods={"GET"})
     */
    public function show(Dnd35Races $dnd35Race, RacesRepository $racesRepository, $id): Response
    {
        $race = $racesRepository->getClassesPredilection($id);

        //$description = nl2br($dnd35Race->getDescription());

        return $this->render('races/show.html.twig', [
            'dnd35_race' => $dnd35Race,
            'race' => $race,
            //'description' => $description,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_races_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Dnd35Races $dnd35Race, RacesRepository $racesRepository): Response
    {
        $form = $this->createForm(Dnd35RacesType::class, $dnd35Race);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $racesRepository->add($dnd35Race, true);

            return $this->redirectToRoute('app_races_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('races/edit.html.twig', [
            'dnd35_race' => $dnd35Race,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_races_delete", methods={"POST"})
     */
    public function delete(Request $request, Dnd35Races $dnd35Race, RacesRepository $racesRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$dnd35Race->getId(), $request->request->get('_token'))) {
            $racesRepository->remove($dnd35Race, true);
        }

        return $this->redirectToRoute('app_races_index', [], Response::HTTP_SEE_OTHER);
    }
}
