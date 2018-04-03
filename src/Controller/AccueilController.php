<?php

namespace Controller;

class AccueilController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('layout.html.twig');
    }
}
