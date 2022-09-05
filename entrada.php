<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de la propiedad">
        </picture>
        
        <p class="informacion-meta">Escrito el: <span>20/10/2021</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                    <p>3</p>
                </li>
            </ul>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et illo veritatis tempora dicta ex accusantium 
                excepturi rerum corporis quaerat porro necessitatibus aliquid sed quisquam architecto, ad facere. Sunt, 
                debitis dicta? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat eveniet, distinctio eligendi 
                atque blanditiis, adipisci ut vel sunt ad corporis fugit recusandae. Odio pariatur ex magni aspernatur optio 
                non fugiat.</p>

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et illo veritatis tempora dicta ex accusantium 
                excepturi rerum corporis quaerat porro necessitatibus aliquid sed quisquam architecto, ad facere. Sunt, 
                debitis dicta? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat eveniet, distinctio eligendi 
                atque blanditiis, adipisci ut vel sunt ad corporis fugit recusandae. Odio pariatur ex magni aspernatur optio 
                non fugiat.</p>  
        </div>
    </main>

<?php 
    incluirTemplate('footer');
?>