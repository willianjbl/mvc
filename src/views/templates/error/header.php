<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <meta name="description" content="<?= \core\Config::DESCRIPTION ?>">
    <title><?= \core\Config::TITLE . (isset($title) ? " | $title" : '') ?></title>

    <?php $this->html->addCSS(['bootstrap/bootstrap', 'global/style']); ?>
</head>
<body>

    <main>
    