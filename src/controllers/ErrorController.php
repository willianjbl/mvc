<?php
declare(strict_types = 1);

namespace src\controllers;

use \core\Controller;

class ErrorController extends Controller
{
    public function index(): void
    {
        $this->render('error/404');
    }

    public function manutencao(): void
    {
        $this->render('error/manutencao');
    }
}
