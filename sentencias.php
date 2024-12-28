<?php include 'includes/header.php';

echo "<h3>Ejercicio 1: Escribe un programa que determine si un número es positivo, negativo o cero.</h3>";

$numero = -3;

if ($numero > 0) {
    echo "El número $numero es positivo.";
} elseif ($numero < 0) {
    echo "El número $numero es negativo.";
} else {
    echo "El número $numero es cero.";
}
echo "<br><br>";

echo "<h3>Ejercicio 2: Escribe un programa que verifique si un número es par o impar.</h3>";

$numero = 4;

if ($numero % 2 == 0) {
    echo "El número $numero es par.";
} else {
    echo "El número $numero es impar.";
}
echo "<br><br>";

echo "<h3>Ejercicio 3: Utiliza un bucle for para imprimir los números del 1 al 10.</h3>";

for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}
echo "<br><br>";

echo "<h3>Ejercicio 4: Escribe un programa que sume los números del 1 al 100 utilizando un bucle for.</h3>";

$suma = 0;

for ($i = 1; $i <= 100; $i++) {
    $suma += $i;
}

echo "La suma de los números del 1 al 100 es: $suma";
echo "<br><br>";

echo "<h3>Ejercicio 5: Escribe un programa que imprima los números del 10 al 1 utilizando un bucle while.</h3>";

$i = 10;

while ($i >= 1) {
    echo $i . "<br>";
    $i--;
}
echo "<br><br>";

echo "<h3>Ejercicio 6: Escribe un programa que verifique si un número es divisible por 3 y 5.</h3>";

$numero = 15;

if ($numero % 3 == 0 && $numero % 5 == 0) {
    echo "El número $numero es divisible por 3 y 5.";
} else {
    echo "El número $numero no es divisible por 3 y 5.";
}
echo "<br><br>";

echo "<h3>Ejercicio 7: Escribe un programa que imprima los primeros 10 números de la secuencia Fibonacci.</h3>";

$a = 0;
$b = 1;
echo $a . " " . $b . " ";

for ($i = 3; $i <= 10; $i++) {
    $c = $a + $b;
    echo $c . " ";
    $a = $b;
    $b = $c;
}
echo "<br><br>";

echo "<h3>Ejercicio 8: Utiliza un bucle for para contar cuántos números del 1 al 50 son divisibles entre 7.</h3>";

$contador = 0;

for ($i = 1; $i <= 50; $i++) {
    if ($i % 7 == 0) {
        $contador++;
    }
}

echo "Hay $contador números divisibles entre 7 del 1 al 50.";
echo "<br><br>";

echo "<h3>Ejercicio 9: Escribe un programa que imprima todos los números entre 1 y 100 que sean múltiplos de 3 o 5.</h3>";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 || $i % 5 == 0) {
        echo $i . "<br>";
    }
}
echo "<br><br>";

echo "<h3>Ejercicio 10: Escribe un programa que imprima la tabla de multiplicar de un número.</h3>";

$numero = 5;

echo "La tabla de multiplicar de $numero es:<br>";

for ($i = 1; $i <= 10; $i++) {
    echo "$numero x $i = " . ($numero * $i) . "<br>";
}

include 'includes/footer.php';