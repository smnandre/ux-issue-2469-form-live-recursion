<?php

namespace App\Controller;

use App\Form\RegistrationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RegistrationController extends AbstractController
{
    #[Route('/')]
    #[Route('/registration', name: 'registration')]
    public function __invoke(Request $request): Response
    {
        $form = $this->createForm(RegistrationFormType::class, null, [
            'action' => $this->generateUrl('registration'),
        ]);
        $form->handleRequest($request);
        
        return $this->render('registration.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
