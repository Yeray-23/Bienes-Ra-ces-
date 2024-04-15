<?php

require 'app.php';

function incluirTemplate(  string $nombre,  $inicio = false ) {
    include TEMPLATES_URL . "/{$nombre}.php";
}