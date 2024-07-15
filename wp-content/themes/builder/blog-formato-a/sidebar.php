<div class="search-market">
  <h3>search news</h3>
  <form action="<?php echo site_url(); ?>" method="get" autocomplete="off">
    <input type="text" name="s" placeholder="Search articles">
    <button type="submit" class="btn-s"></button>
  </form>
</div>
<?php
  global $wpdb;
  $query="select * from wp_posts where post_type='post' and post_status ='publish' order by post_date desc limit 6";
  $recent_posts=$wpdb->get_results($query,ARRAY_A);
  ?>
<div class="list-items-img-aside related-news-list mgb-aside">
  <div class="head-style-list">
    <h3>recent article</h3>
  </div>
  <div class="pdgin">
    <ul>
      <?php foreach($recent_posts as $row):
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $row['ID'] ), 'thumbnail' ); ?>
      <li>
        <?php if(!empty($image[0])): ?>
        <a class="thumb" href="<?php echo get_permalink($row['ID']); ?>"> 
        <img src="<?php echo $image[0]; ?>" alt="<?php echo $row['post_title']; ?>"> 
        </a>
        <?php endif; ?>
        <div class="right-text-list">
          <h4><?php echo $row['post_title']; ?></h4>
          <div class="date"><?php echo date('M jS Y', strtotime($row['post_date'])); ?></div>
          <a class="read-more" href="<?php echo get_the_permalink($row['ID']); ?>" >read more</a>
        </div>
      </li>
      <?php endforeach; ?>
    </ul>
    <a class="view-all" href="<?php bloginfo('url');?>/blog">View all News</a>
  </div>
</div>
<?php
  $categories = get_categories();
  foreach($categories as $k => $item) {
    if($item->slug == 'uncategorized') unset($categories[$k]);
  }
  if(count($categories) > 0):
  $counter = count($categories) - 1;
  ?>
<div class="list-items-img-aside condos-neigh-list mgb-aside">
  <div class="head-style-list">
    <h3><?php echo __('News Categories'); ?></h3>
  </div>
  <div class="pdgin">
    <ul class="list-txt">
      <?php
        foreach ($categories as $k => $row): $row = (array)$row; ?>
      <li<?php echo ($k == $counter)? ' class="item-last"': ''; ?>><a href="<?php echo site_url(); ?>/category/<?php echo $row['slug']; ?>"><i class="fa fa-chevron-right" aria-hidden="true"></i><?php echo $row['name']; ?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
<?php endif; ?>