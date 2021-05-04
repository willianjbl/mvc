<?php

namespace core;

class Controller
{
    private string $header;
    private string $footer;

    public function __construct()
    {
        $this->setTemplate();
    }

    protected function redirect($url): void
    {
        header("Location: " . $this->getBaseUrl() . $url);
        exit;
    }

    private function getBaseUrl(): string
    {
        $base = (isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') ? 'https://' : 'http://';
        $base .= $_SERVER['SERVER_NAME'];
        if ($_SERVER['SERVER_PORT'] !== '80')
            $base .= ':' . $_SERVER['SERVER_PORT'];
        $base .= Config::BASE_DIR;
        
        return $base;
    }

    private function _render(string $view, array $viewData = []): void
    {
        if (file_exists(VIEW_PATH . "$view.php")) {
            extract($viewData);
            $render = fn($vN, $vD = []) => $this->renderPartial($vN, $vD);
            $base = $this->getBaseUrl();
            require VIEW_PATH . "$view.php";
        }
    }

    private function renderPartial(string $viewName, array $viewData = []): void
    {
        $this->_render("partials/$viewName", $viewData);
    }

    public function render(string $view, array $viewData = [], array $viewHeader = [], array $viewFooter = []): void
    {
        $this->_render("templates/{$this->getHeader()}", $viewHeader);
        $this->_render("pages/$view", $viewData);
        $this->_render("templates/{$this->getFooter()}", $viewFooter);
    }

    private function getHeader(): string
    {
        return $this->header;
    }

    private function getFooter(): string
    {
        return $this->footer;
    }

    protected function setTemplate(string $header = 'main/header', string $footer = 'main/footer'): void
    {
        $this->header = $header;
        $this->footer = $footer;
    }
}
