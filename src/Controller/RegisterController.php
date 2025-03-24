<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class RegisterController extends AbstractController
{
    #[Route('/register', name: 'app_register_addaccount')]
    public function addAccount(): Response
    {
        return $this->render('register/index.html.twig', [
            
        ]);
    }
}
