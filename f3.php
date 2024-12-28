<?php
function esPar($numero) {
    if ($numero % 2 == 0) {
        return true;
    } else {
        return false;
    }
}
echo "El número 4 es par: " . (esPar(4) ? "Sí" : "No") . "<br>";
?>