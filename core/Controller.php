<?php
declare(strict_types = 1);

namespace core;

use src\handlers\BannerHandler;
use src\helpers\Html;

class Controller
{
    public Html $html;
    private string $header;
    private string $footer;

    public function __construct()
    {
        $this->setTemplate();
    }

    protected function redirect($url): void
    {
        header("Location: " . \core\Request::getBaseUrl() . $url);
        exit;
    }

    private function _render(string $view, array $viewData = []): void
    {
        if (file_exists(VIEW_PATH . "$view.php")) {
            extract($viewData);
            $banners = (new BannerHandler())->listBanners();
            $render = fn($vN, $vD = []) => $this->renderPartial($vN, $vD);
            $base = \core\Request::getBaseUrl();
            require VIEW_PATH . "$view.php";
        }
    }

    private function renderPartial(string $viewName, array $viewData = []): void
    {
        $this->_render("partials/$viewName", $viewData);
    }

    public function render(string $view, array $viewData = [], array $viewHeader = [], array $viewFooter = []): void
    {
        $this->html = new Html();
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
