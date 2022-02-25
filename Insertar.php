<?php
require_once("autoload.php");
$inserta = new Acciones();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles.css">
    <title>Nuevo registro</title>
</head>
<body>
    <?php
        if(isset($_POST["Inserta"])){
            ?>
            <form method = "post">
                <section>
                <label for="nombre">Nombre</label>
                <input type="text" name = "nombre" id = "nombre">
                <label for="edad">Edad</label>
                <input type="txt" name = "edad" id = "edad">
                <label for="correo">Correo</label>
                <input type="txt" name = "correo" id = "correo">
                <input type="submit" name = "guardar" value="Guardar">
                </section>
            </form>
            <?php
        }elseif(isset($_POST["guardar"])){
            $nombre =$_POST["nombre"];
            $edad =$_POST["edad"];
            $correo =$_POST["correo"];
            $resultado = $inserta->Insertar($nombre, $edad, $correo);
            if($resultado) header("location:http://localhost/proyecto%20final/Principal.php");
            else echo "Error al insertar";
        }else{
            header("location:http://localhost/proyecto%20final/Principal.php");
        }
    ?>
</body>
</html>