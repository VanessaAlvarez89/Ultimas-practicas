<?php
// Ejercicio 61 - Matrices
// MatrizA: de 10 en 10 desde 100
// MatrizB: de 20 en 20 desde 500
// MatrizC: suma de A + B


// Ejercicio 62 - Tema Libre: Mi Tiendita
// Vector = nombres de productos
// Matriz = precios de 3 dias

$productos = ["Sabritas", "Coca", "Galletas"];

$precios = [
    [15, 18, 20],
    [20, 20, 22],
    [12, 12, 15]
];
?>

<html>
<body>
    <h2>Mi Tiendita</h2>

    <h3>Productos </h3>
    <?php
    for ($i = 0; $i < 3; $i++) {
        echo $productos[$i] . "<br>";
    }
    ?>

    <h3>Precios </h3>
    <table border="1" cellpadding="10">
        <tr><td>Producto</td><td>Lunes</td><td>Martes</td><td>Miercoles</td></tr>
        <?php
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            echo "<td>" . $productos[$i] . "</td>";
            for ($j = 0; $j < 3; $j++) {
                echo "<td>" . $precios[$i][$j] . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>