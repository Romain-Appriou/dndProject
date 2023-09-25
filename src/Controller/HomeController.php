<?php

namespace App\Controller;

use App\Form\ClassesType;
use App\Repository\ClassesRepository;
use App\Repository\RacesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(ClassesRepository $classesRepository, RacesRepository $racesRepository, Request $request): Response
    {

        return $this->renderForm('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'classes' => $classesRepository->findAll(),
            'races' => $racesRepository->findAll(),
        ]);
    }
}
