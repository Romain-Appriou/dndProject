<?php

namespace App\Controller;

use App\Form\ClassesType;
use App\Repository\ClassesRepository;
use App\Repository\RacesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController
{
    /**
     * @Route("/liste", name="app_list")
     */
    public function index(ClassesRepository $classesRepository, RacesRepository $racesRepository, Request $request): Response
    {

        return $this->renderForm('list/index.html.twig', [
            'classes' => $classesRepository->findAll(),
            'races' => $racesRepository->findAll(),
        ]);
    }
}
