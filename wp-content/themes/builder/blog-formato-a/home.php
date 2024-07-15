<?php get_header();?> 
<section class="news-page">
  <div class="container">
    <h1 class="the-title">NEWS</h1>
    <div class="col left">
      <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $query = new WP_Query( array( 
            'posts_per_page' => 10,
            'paged' => $paged
        ) );
        ?>
      <?php if ( $query->have_posts() ) : ?>
      <div class="items">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="item">
          <?php if ( has_post_thumbnail() ) { ?>
            <a href="<?php the_permalink(); ?>" class="thumb"> 
              <?php the_post_thumbnail( 'large' ); ?>
            </a>
          <?php } ?>
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
      </div>
      <div class="pagination">
        <?php 
          echo paginate_links( array(
              'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
              'total'        => $query->max_num_pages,
              'current'      => max( 1, get_query_var( 'paged' ) ),
              'format'       => '?paged=%#%',
              'show_all'     => false,
              'type'         => 'plain',
              'end_size'     => 2,
              'mid_size'     => 1,
              'prev_next'    => true,
              'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Posts', 'text-domain' ) ),
              'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts', 'text-domain' ) ),
              'add_args'     => false,
              'add_fragment' => '',
          ) );
          ?>
      </div>
      <?php wp_reset_postdata(); ?>
      <?php else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </div>
    <aside>
      <?php get_sidebar(); ?> 
    </aside>
  </div>
</section>
<?php get_footer(); ?>