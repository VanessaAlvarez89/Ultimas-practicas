<html>
<body>
<h2>Registro de alumnos</h2>

<form method="post">
Nombre: <input type="text" name="nombre"><br>
Edad: <input type="text" name="edad"><br>
Pasatiempo: <input type="text" name="pasatiempo"><br><br>
<input type="submit" name="guardar" value="Guardar">
<input type="submit" name="borrar" value="Borrar todo">
</form>

<br>
<form method="post">
Borrar alumno: <input type="text" name="borrar_nombre">
<input type="submit" name="eliminar" value="Eliminar">
</form>

<?php
// guardar
if(isset($_POST["guardar"])){
    $dato = $_POST["nombre"]." - ".$_POST["edad"]." - ".$_POST["pasatiempo"]."\n";
    file_put_contents("Pasatiempos.txt", $dato, FILE_APPEND);
}

// borrar todo
if(isset($_POST["borrar"])){
    file_put_contents("Pasatiempos.txt", "");
}

// borrar un alumno
if(isset($_POST["eliminar"])){
    $n = $_POST["borrar_nombre"];
    $lineas = file("Pasatiempos.txt");
    $nuevo = "";
    foreach($lineas as $l){
        if(strpos($l, $n) === false){
            $nuevo = $nuevo . $l;
        }
    }
    file_put_contents("Pasatiempos.txt", $nuevo);
}
?>

<h2>Lista</h2>
<?php
echo nl2br(file_get_contents("Pasatiempos.txt"));
?>

</body>
</html>
