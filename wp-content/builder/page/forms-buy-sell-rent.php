<?php
/**
 * Template Name: Page Buy/Sell/Rent
 * Template Post Type: page
 */
get_header(); 
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);
$url_imagen=$thumb_url[0];
while ( have_posts() ) : the_post(); ?>

<section id="main-wrap" data-url="<?php echo $url_imagen; ?>">
<?php the_content(); ?>
</section>

<?php endwhile; ?> 
<?php get_footer(); ?> 
<script type="text/javascript">
	var $dataUrl = jQuery('#main-wrap').attr('data-url');
  jQuery('.ib-form-bg').attr('src',$dataUrl);
</script>