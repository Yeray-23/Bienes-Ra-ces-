<?php

require 'includes/funciones.php';

incluirTemplate('header');


?>
    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="/bienesraices/build/img/nosotros.webp" type="image/webp">
                    <source srcset="/bienesraices/build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="/bienesraices/build/img/nosotros.jpg" alt="sobre nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat harum libero nostrum voluptatibus eaque repellendus iste sint pariatur possimus. Repudiandae facere assumenda, culpa et exercitationem dolorum maiores enim quas eaque.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque facilis ipsum aliquid corporis, minima quas! Deleniti maiores dolorum veniam sunt laboriosam quibusdam maxime cupiditate. Sint incidunt laudantium sit unde veniam.</p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui aliquid labore omnis voluptatibus maiores sunt placeat ea aut praesentium commodi!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit aliquam molestias harum maiores modi quaerat rem corrupti nisi earum veniam?
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta facere distinctio et iste itaque ipsam aliquam voluptatibus, dolore culpa a!
                    </p>
            </div>
        </div>
    </main>

    <section class="contenedor">
        <h1>Mas Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono de seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe eveniet libero quam vel, voluptate quae rem incidunt debitis odit architecto.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono de precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe eveniet libero quam vel, voluptate quae rem incidunt debitis odit architecto.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono de tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe eveniet libero quam vel, voluptate quae rem incidunt debitis odit architecto.</p>
            </div>
        </div>
    </section>

    <?php
     incluirTemplate('footer');


?>
