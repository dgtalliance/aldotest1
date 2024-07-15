<?php
/**
 * Template Name: New Agent Collection 
 * Template Post Type: page
 */
get_header();
$post_thumbnail_id = get_post_thumbnail_id(get_the_id());
$post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
$post_content = get_post_field('post_content', $post_id);


while ( have_posts() ) : the_post(); ?>

<main class="ms-new-agents-page">
  <?php if ($post_thumbnail_url) { ?>
  <div class="ms-section ms-animate" id="welcome-agents">
    <div class="ms-wrapper-section">
      <h1 class="ms-title"><?php echo get_the_title(); ?></h1>
    </div>
    <img data-real-type="image" data-img="<?php echo $post_thumbnail_url;?>" src="<?php echo builder_get_assets_path(); ?>/images/temp.png" alt="<?php echo get_the_title(); ?>">
  </div>
  <?php }else{ ?>
    <div class="ms-section ms-animate -only-title" id="welcome-agents">
      <div class="ms-wrapper-section">
        <h1 class="ms-title"><?php echo get_the_title(); ?></h1>
      </div>
    </div>
  <?php } ?>


  <?php if (!empty($post_content)) { ?>
    <div class="ms-section" id="description-page">
      <div class="ms-wrapper-section">
        <?php the_content(); ?>
      </div>
    </div>
  <?php } ?>

  <div class="ms-section" id="agents-list">
    <?php echo do_shortcode('[agents_dgt category="agents" format="grid"]');?>
  </div>
</main>

<?php endwhile; get_footer(); ?> 
<script>
	jQuery(document).on('click', '.idx-card-title.mtfoter', function() {
    jQuery(this).parents(".idx-card").find(".idx-card-link").trigger("click");
	});
</script>