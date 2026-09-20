<?php
require_once 'dades.php'; // Carreguem les dades i càlculs des de dades.php
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca</title>
</head>
<body>
    <!-- Títol utilitzant la constant -->
    <h1><?= NOM_BIBLIOTECA ?></h1>
    <!-- Bloc d'estadístiques amb les variables calculades -->
    <p>
        Llibres llegits: <?= $llegits ?> | 
        No llegits: <?= $no_llegits ?> | 
        Valoració mitjana: <?= $valoracio_mitjana ?>
    </p>
    <!-- Enllaços a les vistes -->
    <p>
        <a href="llista.php">Llista de llibres</a> | 
        <a href="taula.php">Taula de llibres</a>
    </p>
    <hr>
    <!-- Depuració segons els requisits del programa -->
    <h3>Prova de depuració (var_dump):</h3>
    <pre>
        <?php var_dump($biblioteca); ?>
    </pre>
</body>
</html>