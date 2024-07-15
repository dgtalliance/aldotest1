<?php get_header(); 
  $cat_id = get_queried_object_id();  ?>
<section class="news-page">
  <div class="container">
    <h1 class="the-title">Category: <?php $cat = get_the_category(); echo $cat[0]->cat_name; ?> </h1>
    <div class="col left">
      <div class="items">
        <?php
          if ( have_posts() ):
          while ( have_posts() ) : the_post(); ?>
        <?php if (is_page()) continue; ?>
        <div class="item">
          <a href="<?php the_permalink(); ?>" class="thumb"> 
          <?php
            if ( has_post_thumbnail() ) {  the_post_thumbnail( 'large' ); }
            ?>
          </a>
          <div class="info">
            <h2><a href="<?php the_permalink(); ?>" title="Read"><?php the_title(); ?></a></h2>
            <span class="date"><?php echo get_the_date(); ?></span>
            <?php $testtoexcerpt = wp_trim_words( get_the_content(get_the_id()), 60, '' ); ?>
            <p><?php echo $testtoexcerpt; ?>...</p>
            <div class="text-right">
              <a class="read-full" href="<?php the_permalink(); ?>">READ FULL ARTICLE</a>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php else : ?>
        <article id="post-0" class="post no-results not-found">
          <header class="entry-header">
            <h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
          </header>
          <div class="entry-content">
            <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentytwelve' ); ?></p>
          </div>
          <!-- .entry-content -->
        </article>
        <!-- #post-0 -->
        <?php endif; ?>
      </div>
    </div>
    <aside>
      <?php get_sidebar(); ?> 
    </aside>
  </div>
</section>
<?php get_footer(); ?>