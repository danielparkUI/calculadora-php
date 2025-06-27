<?php
echo "\n--- FUNCIONES TRIGONOMÉTRICAS ---\n";
echo "Elige una función:\n";
echo "1. Seno (sin)\n";
echo "2. Coseno (cos)\n";
echo "3. Tangente (tan)\n";
echo "4. Cosecante (csc)\n";
echo "5. Secante (sec)\n";
echo "6. Cotangente (cot)\n";
echo "Opción: ";
$opcion = trim(fgets(STDIN));

if (!in_array($opcion, ['1','2','3','4','5','6'])) {
    echo "Opción inválida.\n";
    exit;
}

echo "Ingresa el ángulo en grados: ";
$grados = (float)trim(fgets(STDIN));
$radianes = deg2rad($grados); // Convertir a radianes

switch ($opcion) {
    case 1: // Seno
        $resultado = sin($radianes);
        echo "Seno($grados°) = $resultado\n";
        break;
    case 2: // Coseno
        $resultado = cos($radianes);
        echo "Coseno($grados°) = $resultado\n";
        break;
    case 3: // Tangente
        if (cos($radianes) == 0) {
            echo "Error: Tangente indefinida para $grados° (coseno = 0).\n";
        } else {
            $resultado = tan($radianes);
            echo "Tangente($grados°) = $resultado\n";
        }
        break;
    case 4: // Cosecante
        $seno = sin($radianes);
        if ($seno == 0) {
            echo "Error: Cosecante indefinida para $grados° (seno = 0).\n";
        } else {
            $resultado = 1 / $seno;
            echo "Cosecante($grados°) = $resultado\n";
        }
        break;
    case 5: // Secante
        $coseno = cos($radianes);
        if ($coseno == 0) {
            echo "Error: Secante indefinida para $grados° (coseno = 0).\n";
        } else {
            $resultado = 1 / $coseno;
            echo "Secante($grados°) = $resultado\n";
        }
        break;
    case 6: // Cotangente
        $tangente = tan($radianes);
        if ($tangente == 0) {
            echo "Error: Cotangente indefinida para $grados° (tangente = 0).\n";
        } else {
            $resultado = 1 / $tangente;
            echo "Cotangente($grados°) = $resultado\n";
        }
        break;
}
