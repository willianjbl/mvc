<?php

namespace src\controllers;

use \core\Controller;
use src\handlers\UserHandler;

class HomeController extends Controller
{
    public function index(): void
    {
        $usuarios = (new UserHandler)->listUsers();
        
        $this->render('home/home', [
            'nome' => 'Pessoa',
            'usuarios' => $usuarios
        ]);
    }
}
