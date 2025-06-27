<?php

while (true) {
    echo "\nMENÚ PRINCIPAL\n";
    echo "1. Opciones Básicas\n";
    echo "2. Opciones Intermedias\n";
    echo "3. Opciones Avanzadas\n";
    echo "4. Salir\n";
    echo "Elige una opción (1-4): ";

    $opcion = trim(fgets(STDIN)); // Lee entrada desde la consola

        switch ($opcion) {
            case 1:
                echo "Has elegido: Opciones Básicas\n";
                    require 'operacionesbasicas.php';
                break;
        case 2:
            echo "Has elegido: Opciones Intermedias\n";
                    require 'operacionesintermedias.php';
            break;
        case 3:
            echo "Has elegido: Opciones Avanzadas\n";
                    require 'operacionesabansadas.php';
            break;
        case 4:
            echo "Saliendo del programa...\n";
            exit;
        default:
            echo "Opción inválida. Intenta de nuevo.\n";
    }
}
?>