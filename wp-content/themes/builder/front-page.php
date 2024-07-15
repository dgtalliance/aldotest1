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

<!--
PRECARGADOR ACTIVARLO CUANOD SEA NECESARIO  
<div class="wrap-preloader">
  <div class="item-wrap-preloader">
    <?php idx_the_custom_logo_header(); ?>
    <span class="preloader-icon"></span>
  </div>
</div>-->

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
        <source	media="(max-width: 640px)" srcset="<?php echo builder_get_assets_path(); ?>/images/home/ms-layer-min.webp" type="image/webp">
        <source media="(max-width: 640px)" srcset="<?php echo builder_get_assets_path(); ?>/images/home/ms-layer-min.jpg" type="image/png">
        <source srcset="<?php echo builder_get_assets_path(); ?>/images/home/ms-layer.webp" type="image/webp">
        <img src="<?php echo builder_get_assets_path(); ?>/images/home/ms-layer.jpg" width="340" height="546" alt="IDXBoost">
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

  <section id="featured-properties" class="ms-section ms-animate">
    <h2 class="ms-title">FEATURED PROPERTIES</h2>
    <?php echo do_shortcode('[flex_idx_filter type="2" slider_item="4" mode="slider"]');?>
    <div class="ms-wrap-btn">
      <a href="#" class="ms-btn" title="View all listings">
        <span>view all listings</span>
      </a>
    </div>
  </section>
  
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
      <img data-real-type="image" data-img="<?php echo builder_get_assets_path(); ?>/images/home/ms-about.jpg" class="ms-img ms-img-0 ms-lazy" src="<?php echo $temporalImage; ?>" alt="Top Luxury Real Estate" width="1" height="1">
    </div>
  </section>

  <section id="condo-areas" class="ms-section ms-wrap-ng-cd ms-animate active">
    <h2 class="ms-title">featured areas & condos</h2>
    <div class="ms-wrap-slider" id="ms-condo-slider">
      <div class="ms-item">
        <a href="#" class="ms-wrap-img" draggable="false">
        <img data-real-type="image" data-img="<?php echo builder_get_assets_path(); ?>/images/home/bal-harbour.jpg" src="<?php echo $temporalImage; ?>" class="gs-lazy" alt="featured areas & condos" width="1" height="1"></a>
        <h3 class="ms-item-title">
        <a href="#">encino</a></h3>
      </div>
      <div class="ms-item">
        <a href="#" class="ms-wrap-img" draggable="false">
          <img data-real-type="image" data-img="<?php echo builder_get_assets_path(); ?>/images/home/bal-harbour.jpg" class="mg-nsimg gs-lazy" src="<?php echo $temporalImage; ?>" alt="featured areas & condos" width="1" height="1">
        </a>
        <h3 class="ms-item-title">
        <a href="#">encino</a></h3>
      </div>
      <div class="ms-item">
        <a href="#" class="ms-wrap-img" draggable="false">
        <img data-real-type="image" data-img="<?php echo builder_get_assets_path(); ?>/images/home/bal-harbour.jpg" src="<?php echo $temporalImage; ?>" class="gs-lazy" alt="featured areas & condos" width="1" height="1"></a>
        <h3 class="ms-item-title">
        <a href="#">encino</a></h3>
      </div>
      <div class="ms-item">
        <a href="#" class="ms-wrap-img" draggable="false">
        <img data-real-type="image" data-img="<?php echo builder_get_assets_path(); ?>/images/home/bal-harbour.jpg" src="<?php echo $temporalImage; ?>" class="gs-lazy" alt="featured areas & condos" width="1" height="1"></a>
        <h3 class="ms-item-title">
        <a href="#">encino</a></h3>
      </div>
      <div class="ms-item">
        <a href="#" class="ms-wrap-img" draggable="false">
        <img data-real-type="image" data-img="<?php echo builder_get_assets_path(); ?>/images/home/bal-harbour.jpg" src="<?php echo $temporalImage; ?>" class="gs-lazy" alt="featured areas & condos" width="1" height="1"></a>
        <h3 class="ms-item-title">
        <a href="#">encino</a></h3>
      </div>
      <div class="ms-item">
        <a href="#" class="ms-wrap-img" draggable="false">
        <img data-real-type="image" data-img="<?php echo builder_get_assets_path(); ?>/images/home/bal-harbour.jpg" src="<?php echo $temporalImage; ?>" class="gs-lazy" alt="featured areas & condos" width="1" height="1"></a>
        <h3 class="ms-item-title">
        <a href="#">encino</a></h3>
      </div>
      <div class="ms-item">
        <a href="#" class="ms-wrap-img" draggable="false">
        <img data-real-type="image" data-img="<?php echo builder_get_assets_path(); ?>/images/home/bal-harbour.jpg" src="<?php echo $temporalImage; ?>" class="gs-lazy" alt="featured areas & condos" width="1" height="1"></a>
        <h3 class="ms-item-title">
        <a href="#">encino</a></h3>
      </div>
      <div class="ms-item">
        <a href="#" class="ms-wrap-img" draggable="false">
        <img data-real-type="image" data-img="<?php echo builder_get_assets_path(); ?>/images/home/bal-harbour.jpg" src="<?php echo $temporalImage; ?>" class="gs-lazy" alt="featured areas & condos" width="1" height="1"></a>
        <h3 class="ms-item-title">
        <a href="#">encino</a></h3>
      </div>
      <div class="ms-item">
        <a href="#" class="ms-wrap-img" draggable="false">
        <img data-real-type="image" data-img="<?php echo builder_get_assets_path(); ?>/images/home/bal-harbour.jpg" src="<?php echo $temporalImage; ?>" class="gs-lazy" alt="featured areas & condos" width="1" height="1"></a>
        <h3 class="ms-item-title">
        <a href="#">encino</a></h3>
      </div>
    </div>

    <div class="ms-wrap-btn">
      <a href="#" class="ms-btn">
        <span>View more</span>
      </a>
    </div>
  </section>

  <section id="testimonials" class="ms-section ms-animate">
    <div class="ms-slider" id="testimonial-slider">
      <blockquote>
        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua”</p>
        <cite>Gary Gottzmann</cite>
      </blockquote>
      <blockquote>
        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua”</p>
        <cite>Gary Gottzmann</cite>
      </blockquote>
      <blockquote>
        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua”</p>
        <cite>Gary Gottzmann</cite>
      </blockquote>
    </div>
  </section>

  <aside id="sponsors" class="ms-section ms-animate">
    <img data-real-type="image" data-img="<?php echo builder_get_assets_path(); ?>/images/home/ms-sponsors.png" src="<?php echo $temporalImage; ?>" alt="Sponsors" class="ms-lazy" width="1" height="1">
  </aside>
</main>
<?php get_footer();?>
