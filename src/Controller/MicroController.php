<?php

namespace Fframework\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MicroController extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }
}