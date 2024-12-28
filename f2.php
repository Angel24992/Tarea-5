<?php
function calcularAreaCirculo($radio) {
    return pi() * pow($radio, 2);
}
echo "Área del círculo: " . calcularAreaCirculo(6) . "<br>";

?>