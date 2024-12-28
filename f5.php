<?php
function calcularFactorial($numero) {
    $factorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}
echo "El factorial de 5 es: " . calcularFactorial(5) . "<br>";
?>