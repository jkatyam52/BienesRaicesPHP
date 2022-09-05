<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosostros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    25 Años de experiencia
                </blockquote>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus laborum, eligendi assumenda tenetur 
                    reiciendis ipsa iusto suscipit officiis facere veritatis iure minima ipsum sequi dolores eos. Sequi molestias 
                    possimus porro. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, facilis ipsa unde, provident, 
                    quae tenetur soluta nam in repudiandae aut dolorum consectetur maxime neque sint quisquam quibusdam 
                    necessitatibus deserunt id?
                </p>
    
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus laborum, eligendi assumenda tenetur 
                    reiciendis ipsa iusto suscipit officiis facere veritatis iure minima ipsum sequi dolores eos. Sequi molestias 
                    possimus porro. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, facilis ipsa unde, provident, 
                    quae tenetur soluta nam in repudiandae aut dolorum consectetur maxime neque sint quisquam quibusdam 
                    necessitatibus deserunt id?
                </p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="iconos">
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>seguridad</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse fuga eius qui. Optio sint repudiandae dolore sequi, atque nulla. Temporibus explicabo aperiam debitis. Nam doloribus reprehenderit, a illo recusandae minus.</p>
            </div>
            <div class="iconos">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precios</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse fuga eius qui. Optio sint repudiandae dolore sequi, atque nulla. Temporibus explicabo aperiam debitis. Nam doloribus reprehenderit, a illo recusandae minus.</p>
            </div>
            <div class="iconos">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse fuga eius qui. Optio sint repudiandae dolore sequi, atque nulla. Temporibus explicabo aperiam debitis. Nam doloribus reprehenderit, a illo recusandae minus.</p>
            </div>
        </div>
    </section>

<?php   
  incluirTemplate('footer');
?>