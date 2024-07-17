<?php 
get_header(); 

/*DECLARAMOS LA VARIABLE GENERAL PARA LAS IMAGENES TEMPORALES*/
$temporalImage = builder_get_assets_path()."/images/temp.png";

/**
* Aqui podemos declarar variables que nos ayuden a mejorar el performance al momento de cargar el site en un dispositivo mobil
* lo que debemos hacer es usar la validacion interna de wordpress "wp_is_mobile" y asignamos nuestras condiciones, podemos generar
* todas las variables que necesitemos segun nuestro proyecto Ejemplo:
* if (wp_is_mobile()) {
*   $videoWelcome = "url de mi video principal en una resolución ideal para ser vista en celualres/tablets";
*   $imagenWelcome = "url de mi imagen principal en una resolución ideal para ser vista en celualres/tablets";
* }else{
*   $videoWelcome = "url de mi video principal en una buena resolución para ser visto en PC";
*   $imagenWelcome = "url de mi imagen principal en una buena resolución para ser vista en PC";
* }
**/

//if (wp_is_mobile()) {
//  $imagenWelcome = builder_get_assets_path()."/images/home/ms-layer-min.jpg";
//}else{
//  $imagenWelcome = builder_get_assets_path()."/images/home/ms-layer.jpg";
//}
?>



<main>
    <section id="welcome" class="ms-section ms-animate">
        <div id="intro">
            <h1 class="ms-title">Brickell & Downtown <span>Miami Condos</span></h1>
            <h2 class="ms-subtitle">#1 resource for brickell & downtown miami condos</h2>
            <div class="ms-wrap-btn">
                <a href="#" class="ms-btn" title="Buy a Condo"><span>Buy a Condo</span></a>
                <a href="#" class="ms-btn" title="List your unit"><span>List your unit</span></a>
            </div>
            <?php echo do_shortcode('[flex_autocomplete]'); ?>
        </div>
        <div class="ms-slider">

            <picture class="ms-layer">
                <source media="(max-width: 640px)"
                    srcset="<?php echo builder_get_assets_path(); ?>/images/home/ms-layer-min.webp" type="image/webp">
                <source media="(max-width: 640px)"
                    srcset="<?php echo builder_get_assets_path(); ?>/images/home/ms-layer-min.jpg" type="image/png">
                <source srcset="<?php echo builder_get_assets_path(); ?>/images/home/ms-layer.webp" type="image/webp">
                <img src="<?php echo builder_get_assets_path(); ?>/images/home/ms-layer.jpg" width="340" height="546"
                    alt="IDXBoost">
            </picture>

            <picture class="ms-layer">
                <source media="(max-width: 640px)"
                    srcset="<?php echo builder_get_assets_path(); ?>/images/home/ms-layer-min.webp" type="image/webp">
                <source media="(max-width: 640px)"
                    srcset="<?php echo builder_get_assets_path(); ?>/images/home/ms-layer-min.jpg" type="image/png">
                <source srcset="<?php echo builder_get_assets_path(); ?>/images/home/ms-layer.webp" type="image/webp">
                <img src="<?php echo builder_get_assets_path(); ?>/images/home/ms-layer.jpg" width="340" height="546"
                    alt="IDXBoost">
            </picture>

            <picture class="ms-layer">
                <source media="(max-width: 640px)"
                    srcset="<?php echo builder_get_assets_path(); ?>/images/home/ms-layer-min.webp" type="image/webp">
                <source media="(max-width: 640px)"
                    srcset="<?php echo builder_get_assets_path(); ?>/images/home/ms-layer-min.jpg" type="image/png">
                <source srcset="<?php echo builder_get_assets_path(); ?>/images/home/ms-layer.webp" type="image/webp">
                <img src="<?php echo builder_get_assets_path(); ?>/images/home/ms-layer.jpg" width="340" height="546"
                    alt="IDXBoost">
            </picture>

            <!--
      ACTIVAR SI NECESITAS MOSTRAR VIDEO DE FONDO
      <video loop autoplay muted playsinline preload class="ms-video" title="Welcome Brickell & Downtown Miami Condos">
        <source src="{URL-DEL-VIDEO}" type="video/mp4">
      </video>-->
        </div>
        <!--ACTIVAR SI NECESITAS EL BOTON ANIMADO DE SCROLL <button class="ms-next-step" data-step="#featured-properties" aria-label="Skip to main content">
      <div class="chevron"></div>
      <div class="chevron"></div>
      <div class="chevron"></div>
    </button>-->
    </section>



    <?php /* 
  <section id="about" class="ms-section ms-animate">
    <article>
      <header>
        <h2 class="ms-title">TOP LUXURY REAL ESTATE TOP PRODUCER IN THE AREA</h2>
      </header>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
      <div class="ms-wrap-btn">
        <a href="#" class="ms-btn" title="Lear more about top Luxury Real Estate">
          <span>learn more</span>
        </a>
      </div>
    </article>
    <div class="ms-wrap-img">
      <img data-real-type="image" data-img="<?php echo builder_get_assets_path(); ?>/images/home/ms-about.jpg"
    class="ms-img ms-img-0 ms-lazy" src="<?php echo $temporalImage; ?>" alt="Top Luxury Real Estate" width="1"
    height="1">
    </div>
    </section>
    */ ?>





</main>
<?php get_footer();?>