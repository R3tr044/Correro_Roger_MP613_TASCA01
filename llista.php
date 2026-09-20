<?php
require_once 'dades.php'; // carregar les dades i calculs de dades.php
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Llista de Llibres</title>
</head>
<body>
    <p><a href="index.php">Index</a></p> <!-- Enllaç a la pàgina index -->
    <h2>Llista de Llibres</h2> 
    <!-- Contenidor principal de la llista de llibres -->
    <div class="llista-container">
        <?php foreach ($biblioteca as $llibre): ?>
            <div class="llibre-card">
                <h3><?= $llibre['titol'] ?></h3>
                <p><strong>Autor:</strong> <?= $llibre['autor'] ?></p>
                <p><strong>Any:</strong> <?= $llibre['any'] ?></p>
                <p><strong>Gènere:</strong> <?= $llibre['genere'] ?></p>
                <!-- Condicional per indicar si s'ha llegit el llibre o no -->
                <p>
                    <?php if ($llibre['llegit']): ?>
                        <span style="color: green;">Llegit</span>
                    <?php else: ?>
                        <span style="color: red;">No llegit</span>
                    <?php endif; ?>
                </p>
                <!-- Mostrar valoracio unicament si s'ha llegit el llibre -->
                <?php if ($llibre['llegit']): ?>
                    <p>
                        <strong>Valoració:</strong> 
                        <?= str_repeat('★', $llibre['valoracio']) ?>
                    </p>
                <?php endif; ?>
            </div>
            <hr>
        <?php endforeach; ?>
    </div>
</body>
</html>