<?php

namespace src\controllers;

use \core\Controller;

class HomeController extends Controller
{
    public function index() {
        $this->render('home/home', ['nome' => 'Pessoa']);
    }
}
