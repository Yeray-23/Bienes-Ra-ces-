
<?php
//crear funcion para conectarme a la BD 
function conectarDB() : mysqli { // nos va a retornar una conexion de mysqli
    $db = mysqli_connect('localhost', 'root', 'root', 'bienesraices_crud');

    if(!$db) {
        echo 'Error en la base de datos';
        exit;
    }
    return $db;
}
