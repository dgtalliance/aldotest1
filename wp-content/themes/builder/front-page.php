<?php 
get_header(); 
 
$temporalImage = builder_get_assets_path()."/images/temp.png";
 
?>



<main>
    <section id="hero" class="ms-section ms-animate">

        <div class="slide">

            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/Matt.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/Matt.png" alt="">
            </div>
            <div class="item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/home/Matt.png" alt="">
            </div>

            <?php /* 
            <picture class="ms-layer">
                <source media="(max-width: 640px)"
                    srcset="<?php echo builder_get_assets_path(); ?>/images/home/ms-layer-min.webp" type="image/webp">
            <source media="(max-width: 640px)"
                srcset="<?php echo builder_get_assets_path(); ?>/images/home/ms-layer-min.jpg" type="image/png">
            <source srcset="<?php echo builder_get_assets_path(); ?>/images/home/ms-layer.webp" type="image/webp">
            <img src="<?php echo builder_get_assets_path(); ?>/images/home/ms-layer.jpg" width="340" height="546"
                alt="IDXBoost">
            </picture>
            */ ?>

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