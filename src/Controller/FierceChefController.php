<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FierceChefController extends AbstractController
{
    /**
     * @Route("/fierce/chef", name="fierce_chef")
     */
    public function index()
    {
        return $this->render('fierce_chef/index.html.twig', [
            'controller_name' => 'FierceChefController',
        ]);
    }
}
