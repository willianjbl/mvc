<?php
declare(strict_types = 1);

namespace core;

use \core\RouterBase;

class Router extends RouterBase
{
    public array $routes;

    public function get(string $endpoint, string $trigger): void
    {
        $this->routes['get'][$endpoint] = $trigger;
    }

    public function post(string $endpoint, string $trigger): void
    {
        $this->routes['post'][$endpoint] = $trigger;
    }

    public function put(string $endpoint, string $trigger): void
    {
        $this->routes['put'][$endpoint] = $trigger;
    }

    public function delete(string $endpoint, string $trigger): void
    {
        $this->routes['delete'][$endpoint] = $trigger;
    }
}
