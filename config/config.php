<?php

//* CONFIGURAÇÃO DO AMBIENTE LOCAL

// configuração de página
$tituloPagina = 'MVC';
$descricaoPagina = 'A random description';
$paginaManutencao = false;  // setar esta variável true se quiser que todas requisições vão para pág. de manutenção

// configuração de servidor
$baseUrl = '/projetos/mvc/';  // colocar o caminho inicial após o seu host Ex: 'http://localhost/teste/' => '/teste/'

// configuração de DB
$dbHost = 'localhost';
$dbName = 'seu_db';
$dbUser = 'root';
$dbPass = '';

//* CONFIGURAÇÃO DO AMBIENTE DE HOSPEDAGEM

if ($_SERVER['SERVER_NAME'] === 'seu.dominio.com') {
    // configuração de servidor
    $baseUrl = '/';

    // configuração de DB
    $dbHost = '';
    $dbName = '';
    $dbUser = '';
    $dbPass = '';
}
