<?php

//base de datos 

require '../../includes/config/database.php';
$db = conectarDB();

//consulta para obtener vendedores 
$consulta = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);


//arreglo con mensajes de errores 
$errores = [];

//creamos esto para poder acceder a los valores
    $titulo = '';
    $precio = '';
    $descripcion = '';
    $habitaciones = '';
    $wc = '';
    $estacionamiento ='';
    $vendedores_id = '';

//Ejecutar el codigo despues de que el usuario envia el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    //  echo "<pre>";
    //  var_dump($_FILES);
    //  echo "</pre>";

   

   //sanitizar entradas de datos 
   //mysqli_real_escape_string
    
    $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
    $precio = $_POST['precio'];
    $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
    $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
    $wc = mysqli_real_escape_string($db, $_POST['wc']);
    $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
    $vendedores_id = mysqli_real_escape_string($db, $_POST['vendedores_id']);
    $creado = date('Y/m/d');

    //Asignar files a una variable imagen 

    $imagen = $_FILES['imagen'];

    

    

    //validando las opciones 

    if (!$titulo) {
        $errores[] = 'Debes añadir un titulo';
    }

    if (!$precio) {
        $errores[] = 'El precio es obligatorio';
    }

    if (strlen($descripcion) < 50) {
        $errores[] = 'La descripcion es obligatoria y debe de tener 50 caracteres';
    }

    if (!$habitaciones) {
        $errores[] = 'El numero de habitaciones es obligatorio';
    }

    if (!$wc) {
        $errores[] = 'El numero de baños es obligatorio';
    }

    if (!$estacionamiento) {
        $errores[] = 'El numero de lugares de estacionamiento es obligatorio';
    }

    if (!$vendedores_id) {
        $errores[] = 'Elige un vendedor';
    }
    
    if(!$imagen['name']|| $imagen['error'] ) {
        $errores[] = 'La Imagen es obligatoria';
    }

    //validar por tamaño (1mb maximo)

    $medida = 1000 * 1000;

    if($imagen['size'] > $medida) {
        $errores[] = 'La imagen es muy pesada';
    }

    //  echo "<pre>";
    //  var_dump($errores);
    //  echo "</pre>";

    //revisar que el arreglo de errores este vacio 
    if (empty($errores)) {

        /*SUBIDA DE ARCHIVOS*/


        //crear carpeta 
        $carpetaImagenes = '../../imagenes/';
        // is_ dir nos va a retornar si una carpeta existe o no existe

        if(!is_dir($carpetaImagenes)){
            mkdir($carpetaImagenes);
        }

        //Generar un nombre unico 
        $nombreImagen = md5( uniqid( rand(), true) ) . ".jpg";

        //subir la imagen 

        move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen);

       
        //insertar en la base de datos 
        $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, creado, vendedores_id) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedores_id') ";

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
           // echo 'insertado correctamente';

           //redireccionar al usuario 

            header('location: /bienesraices/admin?resultado=1');
        }
    }
}


require '../../includes/funciones.php';

incluirTemplate('header');


?>
<main class="contenedor">
    <h1>Crear</h1>

    <a href="/bienesraices/admin" class="boton boton-verde">Volver</a>

    <?php foreach($errores as $error): ?>
    <div class="alerta error">
        <?php echo $error; ?>

    </div>

    <?php endforeach; ?>

    <form class="formulario" method="POST" action="/bienesraices/admin/propiedades/crear.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Informacion General</legend>

            <label for="titulo">Titulo</label>
            <input type="text" id="titulo" name="titulo" placeholder="Titulo propiedad" value="<?php echo $titulo; ?>">

            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" placeholder="precio propiedad" value="<?php echo $precio; ?>">

            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

            <label for="descripcion">Descripcion</label>
            <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
        </fieldset>

        <fieldset>
            <legend>Informacion propiedad</legend>

            <label for="habitaciones">Habitaciones</label>
            <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

            <label for="wc">Baños</label>
            <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc; ?>">

            <label for="estacionamiento">Estacionamiento</label>
            <input type="number" id="estacionamiento" name="estacionamiento" Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">
        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select name="vendedores_id">
                <option value="">-- Seleccione --</option>
                <?php while($vendedor = mysqli_fetch_assoc($resultado)) : ?>
                  <option <?php echo $vendedores_id === $vendedor['id'] ? "selected" : ''; ?>  value="<?php echo $vendedor['id']; ?>"> <?php echo $vendedor['nombre'] . " " .  $vendedor['apellido']; ?> </option>
                <?php endwhile; ?>
            </select>
        </fieldset>

        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>
</main>

<?php
incluirTemplate('footer');


?>