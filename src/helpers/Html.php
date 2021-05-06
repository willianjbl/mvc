<?php

namespace src\helpers;

class Html
{
    public function addJS(string|array $files): void
    {
        $path = \core\Request::getBaseUrl() . JS_PATH;

        if (is_array($files)) {
            foreach ($files as $file) {
                $file = $file . '.min.js';
                if (file_exists('..' . DS . JS_PATH . $file)) {
                    $fullPath = $path . $file;
                    echo "<script type='text/javascript' src='$fullPath'></script>";
                } else {
                    echo "Arquivo $file não encontrado.\n";
                }
            }
        } else {
            $files = $files . '.min.js';

            if (!file_exists('..' . DS . JS_PATH . $files)) {
                echo "Arquivo $files não encontrado.";
                return;
            }
            $fullPath = $path . $files;
            echo "<script type='text/javascript' src='$fullPath'></script>";
        }
    }

    public function addCSS(string|array $files): void
    {
        $path = \core\Request::getBaseUrl() . CSS_PATH;

        if (is_array($files)) {
            foreach ($files as $file) {
                $file = $file . '.min.css';
                if (file_exists('..' . DS . CSS_PATH . $file)) {
                    $fullPath = $path . $file;
                    echo "<link rel='stylesheet' type='text/css' href='$fullPath'>";
                } else {
                    echo "Arquivo $file não encontrado.\n";
                }
            }
        } else {
            $files = $files . '.min.css';

            if (!file_exists('..' . DS . CSS_PATH . $files)) {
                echo "Arquivo $files não encontrado.";
            }
            $fullPath = $path . $files;
            echo "<link rel='stylesheet' type='text/css' href='$fullPath'>";
        }
    }
}
