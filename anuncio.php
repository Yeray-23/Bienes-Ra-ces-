<?php

require 'includes/funciones.php';

incluirTemplate('header');


?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa Con Alberca</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,0000,00</p>

            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3
                        
                    </p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3

                    </p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitario">
                    <p>4

                    </p>
                </li>
            </ul>

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
