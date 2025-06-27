<?php
echo "\n--- CÁLCULO DE RAÍCES n-ÉSIMAS ---\n";

echo "¿Qué tipo de raíz deseas calcular? (por ejemplo: 2 = cuadrada, 3 = cúbica, 4 = cuarta, etc.): ";
$indice = (int)trim(fgets(STDIN));

if ($indice < 1) {
    echo "El índice debe ser un número entero positivo mayor que 0.\n";
    exit;
}

echo "¿Cuántos números deseas usar?: ";
$cantidad = (int)trim(fgets(STDIN));

if ($cantidad < 1) {
    echo "Debes ingresar al menos un número.\n";
    exit;
}

$numeros = [];

for ($i = 0; $i < $cantidad; $i++) {
    echo "Ingresa el número #" . ($i + 1) . ": ";
    $num = (float)trim(fgets(STDIN));

    // Validar para evitar raíces pares de números negativos
    if ($indice % 2 == 0 && $num < 0) {
        echo "Error: No se puede calcular una raíz par de un número negativo (como √-4).\n";
        exit;
    }

    $numeros[] = $num;
}

echo "\n--- RESULTADOS ---\n";

foreach ($numeros as $i => $num) {
    $raiz = $num ** (1 / $indice);
    echo "Raíz $indice de $num = $raiz\n";
}
