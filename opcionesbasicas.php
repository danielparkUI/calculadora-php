<?php
echo "\n--- OPERACIONES BÁSICAS ---\n";
echo "Elige una operación:\n";
echo "1. Suma\n";
echo "2. Resta\n";
echo "3. Multiplicación\n";
echo "4. División\n";
echo "Opción: ";
$operacion = trim(fgets(STDIN));

echo "¿Cuántos números deseas usar?: ";
$cantidad = (int)trim(fgets(STDIN));

$numeros = [];

for ($i = 0; $i < $cantidad; $i++) {
    echo "Ingresa el número #" . ($i + 1) . ": ";
    $numeros[] = (float)trim(fgets(STDIN));
}

switch ($operacion) {
    case 1: // Suma
        $resultado = array_sum($numeros);
        echo "Resultado de la suma: $resultado\n";
        break;
    case 2: // Resta
        $resultado = $numeros[0];
        for ($i = 1; $i < count($numeros); $i++) {
            $resultado -= $numeros[$i];
        }
        echo "Resultado de la resta: $resultado\n";
        break;
    case 3: // Multiplicación
        $resultado = 1;
        foreach ($numeros as $num) {
            $resultado *= $num;
        }
        echo "Resultado de la multiplicación: $resultado\n";
        break;
    case 4: // División
        $resultado = $numeros[0];
        for ($i = 1; $i < count($numeros); $i++) {
            if ($numeros[$i] == 0) {
                echo "Error: División por cero no permitida.\n";
                exit;
            }
            $resultado /= $numeros[$i];
        }
        echo "Resultado de la división: $resultado\n";
        break;
    default:
        echo "Operación inválida.\n";
}
