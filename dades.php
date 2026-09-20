<?php
// 1. Definim la constant requerida
define('NOM_BIBLIOTECA', 'La Biblioteca de DAW');// Definim la constant requerida
$biblioteca = [ // Array associatiu de llibres
    [
        'id' => 1,
        'titol' => 'El nom del vent',
        'autor' => 'Patrick Rothfuss',
        'any' => 2007,
        'genere' => 'Fantasia',
        'llegit' => true,
        'valoracio' => 5
    ],
    [
        'id' => 2,
        'titol' => '1984',
        'autor' => 'George Orwell',
        'any' => 1949,
        'genere' => 'Ciència-ficció',
        'llegit' => true,
        'valoracio' => 4
    ],
    [
        'id' => 3,
        'titol' => 'Cien años de soledad',
        'autor' => 'Gabriel García Márquez',
        'any' => 1967,
        'genere' => 'Realisme màgic',
        'llegit' => false,
        'valoracio' => 0
    ],
    [
        'id' => 4,
        'titol' => 'El codi Da Vinci',
        'autor' => 'Dan Brown',
        'any' => 2003,
        'genere' => 'Misteri',
        'llegit' => true,
        'valoracio' => 3
    ],
    [
        'id' => 5,
        'titol' => 'La plaça del Diamant',
        'autor' => 'Mercè Rodoreda',
        'any' => 1962,
        'genere' => 'Drama',
        'llegit' => false,
        'valoracio' => 0
    ]
];
// Lògica de càlcul d'estadístiques
$llegits = 0;
$no_llegits = 0;
$suma_valoracions = 0;

foreach ($biblioteca as $llibre) {
    if ($llibre['llegit'] === true) {
        $llegits++;
        $suma_valoracions += $llibre['valoracio'];
    } else {
        $no_llegits++;
    }
}
// Calculem la mitjana i l'arrodonim a 1 decimal amb round()
if ($llegits > 0) {
    $valoracio_mitjana = round($suma_valoracions / $llegits, 1);
} else {
    $valoracio_mitjana = 0;
}