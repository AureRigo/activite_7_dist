<?php
// Fonction pour trouver la valeur minimale d'un tableau
// TODO: Corriger l'erreur dans la fonction
function trouver_min($tableau) {
    $min = $tableau[0];

    foreach ($tableau as $element) {
        if ($element < $min) {
            $min = $element;
        }
    }

    return $min;
}

// Fonction pour trouver la valeur maximale d'un tableau
function trouver_max($tableau) {
    // TODO: Écrire le corps de la fonction
    $max = $tableau[0];

    foreach ($tableau as $element) {
        if ($element > $max) {
            $max = $element;
        }
    }

    return $max;
}

// Fonction pour trouver la valeur la plus proche de zéro
function trouver_plus_proche_de_zero($tableau) {
    // TODO: Écrire le corps de la fonction
    $plus_proche_de_zero = $tableau[0];
    abs($plus_proche_de_zero);

    foreach($tableau as $element) {
        if ($element < abs($plus_proche_de_zero)){
            $plus_proche_de_zero = $element;
        }
    }
    return $plus_proche_de_zero;
}

// TODO: Ajouter les fonctions manquantes
function sans_nom($tableau) {
    $sans_nom = $tableau[0];

    foreach ($tableau as $element) {
        $sans_nom = $element*$element;
    }
    return $sans_nom;
}

function mysterieuse($tableau) {
    $mysterieuse = $tableau[0];

    foreach ($tableau as $element) {
        
    }
}
?>
