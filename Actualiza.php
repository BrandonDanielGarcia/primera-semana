<?php
require_once("autoload.php");
$actualiza = new Acciones();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles.css">
    <title>Modificar registro</title>
</head>
<body>
    <?php
        if(isset($_POST["Actualiza"])){
            $idb = $_POST["id"];
            $resultado = $actualiza -> ConsultarUno($idb);
            ?>
            <form method = "post">
                <section>
                <input type="hidden" name = "id" value = " <?php echo $resultado[0]["id"] ?> ">
                <label for="id">Id</label>
                <input type="text" value = " <?php echo $resultado[0]["id"] ?> " disabled>
                <label for="nombre">Nombre</label>
                <input type="text" name = "nombre" id = "nombre" value = "<?php echo $resultado[0]["nombre"] ?>">
                <label for="edad">Edad</label>
                <input type="txt" name = "edad" id = "edad" value = "<?php echo $resultado[0]["edad"] ?>">
                <label for="correo">Correo</label>
                <input type="txt" name = "correo" id = "correo" value = "<?php echo $resultado[0]["correo"] ?>">
                <input type="submit" name = "guardar" value="Guardar">
                </section>
            </form>
            <?php
        }elseif(isset($_POST["guardar"])){
            $id = $_POST["id"];
            $nombre =$_POST["nombre"];
            $edad =$_POST["edad"];
            $correo =$_POST["correo"];
            $resultado = $actualiza->Actualizar($id, $nombre, $edad, $correo);
            if($resultado > 0) header("location:http://localhost/proyecto%20final/Principal.php");
            else echo "Error al actualizar";
        }else{
            header("location:http://localhost/proyecto%20final/Principal.php");
        }
    ?>
</body>
</html>