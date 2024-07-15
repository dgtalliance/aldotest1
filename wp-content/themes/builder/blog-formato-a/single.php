<?php
  get_header(); 
   while ( have_posts() ) : the_post();
  ?>
<section class="news-page">
  <div class="container">
    <h1 class="the-title"><?php the_title(); ?></h1>
    <div class="col left">
      <article class="flex-block-description">
        <div class="flex-blog-header">
          <span class="date-publish"><?php echo get_the_date(); ?></span>
          <br> <br>
          <?php
            if ( has_post_thumbnail() ) {  the_post_thumbnail( 'large' ); }
            ?>
          <!--
            <div class="flex-block-share mini">
              <span class="title-share">Share this article</span>
                <div class="social-networks">
             
                  <ul class="item-header social-networks">
                    <?php if (!empty( get_theme_mod('idx_social_media' )['facebook'] )): ?>
                    <li class="clidxboost-icon-facebook"><a href="<?php echo get_theme_mod('idx_social_media' )['facebook']; ?>" title="Facebook" target="_blank" rel="nofollow">Facebook</a></li>
                    <?php endif; ?>
                    <?php if (!empty(get_theme_mod('idx_social_media' )['twitter']  )): ?>
                    <li class="clidxboost-icon-twitter"><a href="<?php echo get_theme_mod('idx_social_media' )['twitter']; ?>" title="Twitter" target="_blank" rel="nofollow">Twitter</a></li>
                    <?php endif; ?>
                    <?php if (!empty( get_theme_mod('idx_social_media' )['google'] )): ?>
                    <li class="clidxboost-icon-google-plus"><a href="<?php echo get_theme_mod('idx_social_media' )['google']; ?>" title="Google+" target="_blank" rel="nofollow">Google+</a></li>
                    <?php endif; ?>
                    <?php if (!empty( get_theme_mod('idx_social_media' )['instagram'] )): ?>
                    <li class="clidxboost-icon-instagram"><a href="<?php echo get_theme_mod('idx_social_media' )['instagram']; ?>" title="Instagram" target="_blank" rel="nofollow">Instagram</a></li>
                    <?php endif; ?>
                    <?php if (!empty( get_theme_mod('idx_social_media' )['linkedin'] )): ?>
                    <li class="clidxboost-icon-linkedin"><a href="<?php echo get_theme_mod('idx_social_media' )['linkedin']; ?>" title="Linked In" target="_blank" rel="nofollow">Linked In</a></li>
                    <?php endif; ?>
            
                    <?php if (!empty( get_theme_mod('idx_social_media' )['youtube'] )): ?>
                    <li class="clidxboost-icon-youtube"><a href="<?php echo get_theme_mod('idx_social_media' )['youtube']; ?>" title="Youtube" target="_blank" rel="nofollow">YouTube</a></li>
                    <?php endif; ?>
            
                  </ul>  
                </div>
            </div>
            -->
        </div>
        <?php the_content(); ?>
        <div class="flex-block-share standar">
          <!--
            <span class="title-share">Share this article</span>
            <div class="social-networks">
            
            <ul class="item-header social-networks">
              <?php if (!empty( get_theme_mod('idx_social_media' )['facebook'] )): ?>
              <li class="clidxboost-icon-facebook"><a href="<?php echo get_theme_mod('idx_social_media' )['facebook']; ?>" title="Facebook" target="_blank" rel="nofollow">Facebook</a></li>
              <?php endif; ?>
              <?php if (!empty(get_theme_mod('idx_social_media' )['twitter']  )): ?>
              <li class="clidxboost-icon-twitter"><a href="<?php echo get_theme_mod('idx_social_media' )['twitter']; ?>" title="Twitter" target="_blank" rel="nofollow">Twitter</a></li>
              <?php endif; ?>
              <?php if (!empty( get_theme_mod('idx_social_media' )['google'] )): ?>
              <li class="clidxboost-icon-google-plus"><a href="<?php echo get_theme_mod('idx_social_media' )['google']; ?>" title="Google+" target="_blank" rel="nofollow">Google+</a></li>
              <?php endif; ?>
              <?php if (!empty( get_theme_mod('idx_social_media' )['instagram'] )): ?>
              <li class="clidxboost-icon-instagram"><a href="<?php echo get_theme_mod('idx_social_media' )['instagram']; ?>" title="Instagram" target="_blank" rel="nofollow">Instagram</a></li>
              <?php endif; ?>
              <?php if (!empty( get_theme_mod('idx_social_media' )['linkedin'] )): ?>
              <li class="clidxboost-icon-linkedin"><a href="<?php echo get_theme_mod('idx_social_media' )['linkedin']; ?>" title="Linked In" target="_blank" rel="nofollow">Linked In</a></li>
              <?php endif; ?>
            
              <?php if (!empty( get_theme_mod('idx_social_media' )['youtube'] )): ?>
              <li class="clidxboost-icon-youtube"><a href="<?php echo get_theme_mod('idx_social_media' )['youtube']; ?>" title="Youtube" target="_blank" rel="nofollow">YouTube</a></li>
              <?php endif; ?>
            </ul>  
            
            </div>
            -->
          <a class="clidxboost-btn-link" href="<?php echo get_site_url(); ?>/blog/"><span>Back to Blog</span></a>
        </div>
      </article>
    </div>
    <aside>
      <?php get_sidebar(); ?> 
    </aside>
  </div>
</section>
<?php endwhile; get_footer(); ?>