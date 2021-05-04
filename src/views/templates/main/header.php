<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= \core\Config::DESCRIPTION ?>">
    <title><?= \core\Config::TITLE . (isset($title) ? " | $title" : '') ?></title>

    <link rel="stylesheet" href="<?= $base . CSS_PATH ?>bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $base . CSS_PATH ?>global/style.min.css">
</head>
<body>
