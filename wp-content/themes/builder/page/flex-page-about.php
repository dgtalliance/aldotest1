<?php
/**
 * Template Name: About Page
 * Template Post Type: page
 */
get_header();
$custom_fields = get_post_custom(); $txtsubtitle=$custom_fields['txtsubtitle'][0];
$post_thumbnail_id = get_post_thumbnail_id(get_the_id());
$post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);  
if (empty( get_theme_mod( 'idx_txt_text_welcome_about_first' ) ))  $idx_txt_text_welcome_about_first  = ''; else  $idx_txt_text_welcome_about_first  = get_theme_mod( 'idx_txt_text_welcome_about_first' );
if (empty( get_theme_mod( 'idx_txt_link_welcome_about_firts' ) ))  $idx_txt_link_welcome_about_firts  = ''; else  $idx_txt_link_welcome_about_firts  = get_theme_mod( 'idx_txt_link_welcome_about_firts' );

if (empty( get_theme_mod( 'idx_txt_text_welcome_about_second' ) ))  $idx_txt_text_welcome_about_second  = ''; else  $idx_txt_text_welcome_about_second  = get_theme_mod( 'idx_txt_text_welcome_about_second' );
if (empty( get_theme_mod( 'idx_txt_link_welcome_about_second' ) ))  $idx_txt_link_welcome_about_second  = ''; else  $idx_txt_link_welcome_about_second  = get_theme_mod( 'idx_txt_link_welcome_about_second' );

while ( have_posts() ) : the_post(); ?>
    <main id="flex-about-theme">
      <div class="gwr gwr-breadcrumb">
        <nav class="flex-breadcrumb" aria-label="breadcrumb">
          <ol>
            <li><a href="<?php echo site_url(); ?>" title="Home">Home</a></li>
            <li aria-current="page"><?php the_title() ?></li>
          </ol>
        </nav>
      </div>

      <div class="gwr c-flex intro-about">
        <article class="flex-block-description">
          <h2 class="title-block"><?php the_title(); ?> </h2>
          <?php the_content(); ?>
        </article>
        <img src="<?php echo $post_thumbnail_url; ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" width="657" height="auto">
      </div>
    </main>
<?php endwhile; get_footer(); ?> 
