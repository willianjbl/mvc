<?php

namespace src\controllers;

use \core\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        $this->render('home/home', [
            'nome' => 'Pessoa'
        ]);
    }
}
