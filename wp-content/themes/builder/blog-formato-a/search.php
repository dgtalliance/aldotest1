<?php get_header(); ?> 
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

      <?php if ( have_posts() ) : ?>
      <?php
      $group_count=1; 
      $group_size=9;
      $count_item = 0;

      while ( have_posts() ) : the_post();   
      $count_item++; ?>
        <div <?php if($count_item<=$group_size) {
        echo 'class="group-item-'.$group_count.' group-item-page items"';
        }else{
        $group_count++;
        $count_item=1;
        echo 'class="group-item-'.$group_count.' group-item-page items"';
        } 
        ?> >
          <div class="item" id="content-item-<?php echo $count_item;?>">
            <?php if ( has_post_thumbnail() ) { ?>
              <a href="<?php the_permalink(); ?>" class="thumb"> 
                <?php the_post_thumbnail( 'large' ); ?>
              </a>
            <?php } ?>
            <div class="info">
              <h2>
                <a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
                  <?php echo get_the_title(); ?>
                </a>
              </h2>
              <span class="date"><?php echo get_the_date(); ?></span>
              <?php $testtoexcerpt = wp_trim_words( get_the_content(get_the_id()), 60, '' ); ?>
              <p><?php echo $testtoexcerpt; ?>...</p>
              <div class="text-right">
                <a class="read-full" href="<?php echo get_the_permalink(); ?>">READ FULL ARTICLE</a>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile;  ?>


      <!--<section id="wrap-result" style="" class="flex-loading-ct view-grid">
        <div id="paginator-cnt" class="gwr">
          <nav id="nav-results" class="idx_color_second"></nav>
        </div>
      </section>

      <div class="paginator" id="wrap-result">
        <nav id="nav-results">
          <ul id="principal-nav">
          </ul>
        </nav>
      </div>-->

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

      <?php else: ?>
        <div class="content-not-found">Not found any post</div>
      <?php endif; ?>   

    </div>
    <aside>
      <?php get_sidebar(); ?> 
    </aside>
  </div>
</section>
<?php get_footer(); ?> 
