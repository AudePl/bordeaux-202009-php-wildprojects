<?php
namespace App\Controller;

class AllProjectsController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('WildProjects/body.html.twig');
    }
}
