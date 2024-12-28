<?php

function calcularPromedio($array) {
    return array_sum($array) / count($array);
}
echo "El promedio de los números [10, 20, 30, 40] es: " . calcularPromedio([10, 20, 30, 40]) . "<br>";

?>