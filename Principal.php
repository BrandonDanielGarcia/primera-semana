<?php
require_once("autoload.php");
?>
<?php
  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina principal</title>
    <link rel="stylesheet" href="Styles.css">
</head>
<body>
    <h1>Proyecto Final</h1>
    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Edad</td>
                <td>Correo</td>
                <td colspan=2>Acciones</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $consultar = new Acciones();
                $resultado = $consultar->ConsultarTodo();
                foreach($resultado as $campo=>$valor){
                    echo "<tr>";
                    echo "<td>".$valor["id"]."</td>";
                    echo "<td>".$valor["nombre"]."</td>";
                    echo "<td>".$valor["edad"]."</td>";
                    echo "<td>".$valor["correo"]."</td>";
                    echo "<td><form action='Actualiza.php' method='post'><input type='hidden' name = 'id' value='".$valor["id"]."'><input type='submit' name ='Actualiza' value ='Editar'></form></td>";
                    echo "<td><form action='Elimina.php' method='post'><input type='hidden' name = 'id' value='".$valor["id"]."'><input type='submit' name ='Elimina' value ='Eliminar'></form></td>";
                    echo "</tr>";
                }
            ?>
            <tr><td colspan = 6><form action='Insertar.php' method = 'post'><center><input type='submit' name = 'Inserta' value='Registro nuevo'></center></form></td></tr>
        </tbody>
    </table>
</body>
</html>