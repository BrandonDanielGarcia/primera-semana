<?php
require_once("autoload.php");
$elimina = new Acciones();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar registro</title>
</head>
<body>
    <?php
        if(isset($_POST["Elimina"])){
            $idb = $_POST["id"];
            $resultado = $elimina->Eliminar($idb);
            if($resultado > 0) header("location:http://localhost/proyecto%20final/Principal.php");
            else echo "Error al eliminar";
        }else{
            header("location:http://localhost/proyecto%20final/Principal.php");
        }
    ?>
</body>
</html>
