<?php
declare(strict_types = 1);

namespace core;

class RouterBase
{
    public function run(array $routes): void
    {
        $method = Request::getMethod();
        $url = Request::getUrl();

        // Define os itens padrão
        $controller = ERROR_CONTROLLER;
        $action = DEFAULT_ACTION;
        $args = [];

        if (isset($routes[$method])) {
            foreach ($routes[$method] as $route => $callback) {
                // Identifica os argumentos e substitui por regex
                $pattern = preg_replace('(\{[a-z0-9]{1,}\})', '([a-z0-9-]{1,})', $route);

                // Faz o match da URL
                if (preg_match("#^($pattern)*$#i", $url, $matches)) {
                    for ($i = 0; $i < 2; $i++) array_shift($matches);

                    // Pega todos os argumentos para associar
                    $itens = [];
                    if (preg_match_all('(\{[a-z0-9]{1,}\})', $route, $m))
                        $itens = preg_replace('(\{|\})', '', $m[0]);

                    // Faz a associação
                    $args = [];
                    foreach ($matches as $key => $match) {
                        $args[$itens[$key]] = $match;
                    }

                    // Seta o controller/action
                    $callbackSplit = explode('@', $callback);
                    $controller = $callbackSplit[0];
                    
                    if (isset($callbackSplit[1]))
                        $action = $callbackSplit[1];
                    break;
                }
            }
        }

        if (MAINTENANCE) {
            $controller = '\src\controllers\\' . ERROR_CONTROLLER;
            $definedController = new $controller();
            $definedController->manutencao();
            return;
        }
        $controller = "\src\controllers\\$controller";
        $definedController = new $controller();
        $definedController->$action($args);
    }
}
