<?php
/**
 * Template Name: Contact Page
 * Template Post Type: page
 */
get_header();

global $flex_idx_info;

$flex_theme_options = get_option('theme_mods_flexidx');
$post_thumbnail_id = get_post_thumbnail_id(get_the_id());
$post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
$idx_contact_phone = isset($flex_idx_info['agent']['agent_contact_phone_number']) ? sanitize_text_field($flex_idx_info['agent']['agent_contact_phone_number']) : '';
$idx_contact_email = isset($flex_idx_info['agent']['agent_contact_email_address']) ? sanitize_text_field($flex_idx_info['agent']['agent_contact_email_address']) : '';
$idx_contact_address = isset($flex_idx_info['agent']['agent_address']) ? sanitize_text_field($flex_idx_info['agent']['agent_address']) : '';
$idx_contact_address2 = isset($flex_idx_info['agent']['agent_address2']) ? sanitize_text_field($flex_idx_info['agent']['agent_address2']) : '';
$idx_contact_zip_code = isset($flex_idx_info['agent']['agent_zip_code']) ? sanitize_text_field($flex_idx_info['agent']['agent_zip_code']) : '';
$idx_contact_state = isset($flex_idx_info['agent']['agent_state']) ? sanitize_text_field($flex_idx_info['agent']['agent_state']) : '';
$idx_contact_city = isset($flex_idx_info['agent']['agent_city']) ? sanitize_text_field($flex_idx_info['agent']['agent_city']) : '';
$agent_first_name = isset($flex_idx_info['agent']['agent_first_name']) ? sanitize_text_field($flex_idx_info['agent']['agent_first_name']) : '';
$agent_last_name = isset($flex_idx_info['agent']['agent_last_name']) ? sanitize_text_field($flex_idx_info['agent']['agent_last_name']) : '';
$idx_contact_lat = isset($flex_idx_info['agent']['agent_address_lat']) ? sanitize_text_field($flex_idx_info['agent']['agent_address_lat']) : '';
$idx_contact_lng = isset($flex_idx_info['agent']['agent_address_lng']) ? sanitize_text_field($flex_idx_info['agent']['agent_address_lng']) : '';

$idx_contact_address = $idx_contact_address.' '.$idx_contact_address2.', '.$idx_contact_city.', '.$idx_contact_state.' '.$idx_contact_zip_code;

if ((empty($idx_contact_lat )) && (empty($idx_contact_lng ))){
$chlatlong = curl_init();
curl_setopt($chlatlong, CURLOPT_URL, 'https://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($idx_contact_address).'&key='.$flex_idx_info["agent"]["google_maps_api_key"]);
curl_setopt($chlatlong, CURLOPT_RETURNTRANSFER, true);
curl_setopt($chlatlong, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($chlatlong, CURLOPT_FRESH_CONNECT, true);
curl_setopt($chlatlong, CURLOPT_VERBOSE, true);
$outputlatlong = curl_exec($chlatlong);
curl_close($chlatlong);

  $outtemporali=json_decode($outputlatlong,true);
  if ($outtemporali['status']=='OK') {
   foreach ($outtemporali['results'] as $keygeom => $valuegeome) {
     $idx_contact_lat=$valuegeome['geometry']['location']['lat'];
     $idx_contact_lng=$valuegeome['geometry']['location']['lng'];
   }
  }
}

while ( have_posts() ) : the_post(); ?>

<main id="flex-contact-theme">

  <!-- Breadcrumb -->
  <div class="gwr gwr-breadcrumb">
    <nav class="flex-breadcrumb" aria-label="breadcrumb">
      <ol>
        <li><a href="<?php echo site_url(); ?>" title="Home">Home</a></li>
        <li aria-current="page">Contact Us</li>
      </ol>
    </nav>
  </div>

  <!-- Wrap contact -->
  <div class="flex-wrap-contact">
    
    <!-- CONPANY -->
    <div class="flex-wrap-company">
      <div class="flex-wrap-company-information">
        <h2><?php the_title(); ?></h2>
        <?php 
          $idx_contact_dsc = the_content();
          if($idx_contact_dsc != ''){
            echo "<p>".$idx_contact_dsc."</p>";
          }
        ?>
        <ul>
          <li>
            <a class="phone" href="tel:<?php echo preg_replace('/[^\d]/', '', $idx_contact_phone); ?>"><?php echo $idx_contact_phone; ?></a>
          </li>
          <li>
            <a class="email" href="mailto:<?php echo $idx_contact_email; ?>"><?php echo $idx_contact_email; ?></a>
          </li>
          <li>
            <a href="javascript:void(0)" class="mapa"><?php echo $idx_contact_address; ?></a>
          </li>
        </ul>
      </div>
      <div id="flex-wrap-contact-map">
        <div id="map" data-lat="<?php echo $idx_contact_lat; ?>" data-lng="<?php echo $idx_contact_lng; ?>"></div>
      </div>
    </div>
    <!-- FORM CONTACT -->
    <div class="flex-wrap-contact-form">
      <?php echo do_shortcode('[flex_idx_contact_form]'); ?>
      <input type="hidden" name="idx_contact_email_temp" class="idx_contact_email_temp" value="<?php echo $idx_contact_email; ?>">
    </div>
  </div>
</main>

<?php endwhile; ?> 
<?php get_footer(); ?> 
