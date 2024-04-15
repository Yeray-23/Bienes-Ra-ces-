<?php

require 'includes/funciones.php';

incluirTemplate('header');


?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoracion de tu hogar</h1>
        
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
        </picture>
        <p class="informacion-meta">Escrito el: <span>20/10/2024</span> por: <span>Admin</span></p>


        <div class="resumen-propiedad">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat harum libero nostrum voluptatibus eaque repellendus iste sint pariatur possimus. Repudiandae facere assumenda, culpa et exercitationem dolorum maiores enim quas eaque.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque facilis ipsum aliquid corporis, minima quas! Deleniti maiores dolorum veniam sunt laboriosam quibusdam maxime cupiditate. Sint incidunt laudantium sit unde veniam.</p>
                <p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat harum libero nostrum voluptatibus eaque repellendus iste sint pariatur possimus. Repudiandae facere assumenda, culpa et exercitationem dolorum maiores enim quas eaque.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque facilis ipsum aliquid corporis, minima quas! Deleniti maiores dolorum veniam sunt laboriosam quibusdam maxime cupiditate. Sint incidunt laudantium sit unde veniam.</p>
                <p>
        </div>
    </main>

    <?php
     incluirTemplate('footer');


?>
