<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecuredController extends AbstractController
{
    #[Route('/secured', name: 'secured')]
    public function index(): Response
    {
        return $this->json([
            'message' => sprintf('Hello %s, you are logged in!', $this->getUser()->getUserIdentifier()),
        ]);
    }
}
