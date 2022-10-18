<?php

namespace App\Controller;

use App\Entity\Condicion;
use App\Form\CondicionType;
use App\Repository\CondicionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/condicion')]
class CondicionController extends AbstractController
{
    #[Route('/', name: 'app_condicion_index', methods: ['GET'])]
    public function index(CondicionRepository $condicionRepository): Response
    {
        return $this->render('condicion/index.html.twig', [
            'condicions' => $condicionRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_condicion_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CondicionRepository $condicionRepository): Response
    {
        $condicion = new Condicion();
        $form = $this->createForm(CondicionType::class, $condicion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $condicionRepository->save($condicion, true);

            return $this->redirectToRoute('app_condicion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('condicion/new.html.twig', [
            'condicion' => $condicion,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_condicion_show', methods: ['GET'])]
    public function show(Condicion $condicion): Response
    {
        return $this->render('condicion/show.html.twig', [
            'condicion' => $condicion,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_condicion_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Condicion $condicion, CondicionRepository $condicionRepository): Response
    {
        $form = $this->createForm(CondicionType::class, $condicion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $condicionRepository->save($condicion, true);

            return $this->redirectToRoute('app_condicion_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('condicion/edit.html.twig', [
            'condicion' => $condicion,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_condicion_delete', methods: ['POST'])]
    public function delete(Request $request, Condicion $condicion, CondicionRepository $condicionRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$condicion->getId(), $request->request->get('_token'))) {
            $condicionRepository->remove($condicion, true);
        }

        return $this->redirectToRoute('app_condicion_index', [], Response::HTTP_SEE_OTHER);
    }
}
