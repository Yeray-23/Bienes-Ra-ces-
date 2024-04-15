<?php

require 'includes/funciones.php';

incluirTemplate('header');


?>

    <main class="contenedor">
        <h1>Contacto</h1>

        <picture>
            <source srcset="/bienesraices/build/img/destacada3.webp" type="image/webp">
            <source srcset="/bienesraices/build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="/bienesraices/build/img/destacada3.jpg" alt="Imagen contacto">
        </picture>
        <h2>Llene el formulario de contacto</h2>

        <form class="formulario">
            <fieldset>
                <legend>Informacion personal</legend>
                <label for="nombre">nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre">

                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu correo electronico" id="email">

                <label for="telef">Telefono</label>
                <input type="tel" placeholder="Tu Telefono" id="telef">

                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Informacion sobre propiedad</legend>
                <label for="opciones">Vende o Compra</label>
                <select id="opciones">
                    <option value="" disabled selected>-- seleccione --</option>>
                    <option value="Compra">compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Tu precio o presupuesto" id="presupuesto" min="1" max="9">

            </fieldset>

            <fieldset>
                <legend>contacto</legend>
                <p>Como desea ser contactado</p>
                <div class="forma-contacto">
                    <label for="contactar-telefono">Telefono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                    <label for="contactar-email">E-mail</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>
                <p>Si eligio telefono, elija la fecha y la hora</p>

                <label for="fecha">Fecha</label>
                <input type="date" id="fecha">

                <label for="hora">Hora</label>
                <input type="time" id="hora" min="09:00" max="18:00">
            </fieldset>
            <input type="submit" value="Enviar" class="boton-verde">

        </form>
    </main>

    <?php
     incluirTemplate('footer');


?>
