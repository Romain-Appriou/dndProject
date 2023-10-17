<?php

namespace App\Controller;

use App\Entity\Dnd35Sortclasse;
use App\Entity\Dnd35Sorts;
use App\Form\Dnd35SortsType;
use App\Form\SortPickerType;
use App\Repository\ClassesRepository;
use App\Repository\SortsRepository;
use Doctrine\ORM\EntityManager;
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
     * @Route("/", name="app_sorts_index", methods={"GET", "POST"})
     */
    public function index(ClassesRepository $classesRepository, Request $request, SortsRepository $sortsRepository): Response
    {
        $sorts = $sortsRepository->findBy([], ['nom' => 'ASC']);
        $classes = $classesRepository->findBy([], ['nom' => 'ASC']);     
              
        if(isset($_POST['sortsFilterClass']) && $_POST['sortsFilterClass'] > 0 && isset($_POST['sortsFilterLvl']) && $_POST['sortsFilterLvl'] > 0) {
           $classe = $_POST['sortsFilterClass'];
           $level = $_POST['sortsFilterLvl'];

           $filteredSorts = $sortsRepository->findByClassAndLevelField($classe, $level);

           return $this->render('sorts/index.html.twig', [
               'dnd35_sorts' => $filteredSorts,
               'classes' => $classes,
           ]);

        } elseif(isset($_POST['sortsFilterClass']) && $_POST['sortsFilterClass'] > 0) {
            $classe = $_POST['sortsFilterClass'];

            $filteredSorts = $sortsRepository->findByClassField($classe);

            return $this->render('sorts/index.html.twig', [
                'dnd35_sorts' => $filteredSorts,
                'classes' => $classes,
            ]);

        } elseif(isset($_POST['sortsFilterLvl']) && $_POST['sortsFilterLvl'] > 0) {
            $level = $_POST['sortsFilterLvl'];

            $filteredSorts = $sortsRepository->findByLevelField($level);

            return $this->render('sorts/index.html.twig', [
                'dnd35_sorts' => $filteredSorts,
                'classes' => $classes,
            ]);

        } elseif(isset($_POST['sortsFilterName'])) {
            $name = $_POST['sortsFilterName'];

            $filteredSorts = $sortsRepository->findByNameField($name);

            return $this->render('sorts/index.html.twig', [
                'dnd35_sorts' => $filteredSorts,
                'classes' => $classes,
            ]);
            
        }

        return $this->render('sorts/index.html.twig', [
            'dnd35_sorts' => $sorts,
            'classes' => $classes,
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
