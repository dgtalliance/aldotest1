<?php 
get_header(); 
 
$temporalImage = builder_get_assets_path()."/images/temp.png";
 
?>



<main>
    <section id="hero" class="ms-section ms-animate">

        <div class="slide agents">


            <div class="agent">
                <div class="zi-2 right-info">
                    <div class="infos">
                        <div class="info">
                            <h3>Lorem</h3>
                            <p>Lorem ipsum dolor</p>
                        </div>
                        <div class="info">
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem ipsum dolor</p>
                        </div>
                        <div class="info">
                            <h3>Sample Text</h3>
                            <p>Lorem ipsum dolor</p>
                        </div>
                    </div>

                </div>
                <div class="zi-2 avatar">
                    <img class='' src="<?php echo get_template_directory_uri(); ?>/assets/images/home/Matt.png" alt="">
                </div>

                <div class="name zi-2">
                    <h1>Matthew Martinez</h1>
                    <h2>Top Luxury Real Estate Agent</h2>

                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus earum deserunt expedita
                        inventore ab harum dolores deleniti, beatae laborum consectetur nostrum dignissimos quo odit
                        explicabo incidunt veritatis architecto animi. Quam?
                    </p>

                    <div class="socials">
                        <a href="#" class="social-icon i-prime-twitter" title="X" target="_blank" rel="nofollow">
                            <span>x</span>
                        </a>
                        <a href="#" class="social-icon i-prime-facebook" title="facebook" target="_blank"
                            rel="nofollow">
                            <span>facebook</span>
                        </a>
                        <a href="#" class="social-icon i-prime-instagram" title="Instagram" target="_blank"
                            rel="nofollow">
                            <span>Instagram</span>
                        </a>

                    </div>
                </div>

                <a href="#" class="zi-2 more"><span>More</span></a>
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