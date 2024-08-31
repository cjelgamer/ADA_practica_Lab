<?php
echo "Ingrese el primer número: ";
$num1 = trim(fgets(STDIN));
echo "Ingrese el segundo número: ";
$num2 = trim(fgets(STDIN));
$suma = $num1 + $num2;
echo "La suma de $num1 y $num2 es $suma\n";
?>