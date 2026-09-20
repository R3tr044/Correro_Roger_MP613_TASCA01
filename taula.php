<?php
require_once 'dades.php'; // Carreguem dades i variables des de dades.php
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Taula de Llibres</title>
</head>
<body>
    <!-- Enllaç per tornar a l'index -->
    <p><a href="index.php">Index</a></p>

    <h2>Taula de Llibres</h2>

    <!-- Taula HTML per organitzar les dades -->
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr> <!-- Títols de les columnes -->
                <th>ID</th>
                <th>Títol</th>
                <th>Autor</th>
                <th>Any</th>
                <th>Gènere</th>
                <th>Llegit</th>
                <th>Valoració</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($biblioteca as $llibre): ?> <!-- Per cada llibre de la biblioteca -->
                <tr>
                    <td><?= $llibre['id'] ?></td>
                    <td><?= $llibre['titol'] ?></td>
                    <td><?= $llibre['autor'] ?></td>
                    <td><?= $llibre['any'] ?></td>
                    <td><?= $llibre['genere'] ?></td>
                    <td>
                        <!-- amb span cambiem el color depenent si esta llegit o no el llibre -->
                        <?php if ($llibre['llegit']): ?>
                            <span style="color: green;">Llegit</span> 
                        <?php else: ?>
                            <span style="color: red;">No llegit</span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <!-- mostrem el valoració només si s'ha llegit el llibre -->
                        <?php if ($llibre['llegit']): ?>
                            <?= str_repeat('★', $llibre['valoracio']) ?>
                        <?php else: ?>
                            - <!-- Si no s'ha llegit, mostrem un guió sense valoració -->
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>