Olá, <?= $nome; ?>

<div>
    <h4>Usuários</h4>
    <ul>
        <?php foreach ($usuarios as $usuario): ?>
            <li><?= $usuario->getName(); ?></li>
        <?php endforeach; ?>
    </ul>
</div>
