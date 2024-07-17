<?php
  global $flex_idx_info, $flex_idx_lead;
  $custom_fields = get_post_custom(get_the_id());
  $post_thumbnail_id = get_post_thumbnail_id(get_the_ID());
  $post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);
  $idx_contact_phone = isset($flex_idx_info['agent']['agent_contact_phone_number']) ? sanitize_text_field($flex_idx_info['agent']['agent_contact_phone_number']) : '';
  $idx_contact_email = isset($flex_idx_info['agent']['agent_contact_email_address']) ? sanitize_text_field($flex_idx_info['agent']['agent_contact_email_address']) : '';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php do_action('idx_gtm_head'); ?>
    <title><?php wp_title('|', 1, 'right');?> <?php bloginfo('name');?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="keywords"
        content="<?php echo get_post_meta(get_the_ID(),'_yoast_wpseo_focuskw_text_input', true); ?>" />
    <?php $yoastdesc = get_post_meta(get_the_ID(),'_yoast_wpseo_metadesc', true); if(!$yoastdesc){?>
    <meta name="description" content="<?php bloginfo('description');?>">
    <?php } ?>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- APP HEADER COLOR -->
    <meta name="apple-mobile-web-app-status-bar-style" content="">
    <meta name="theme-color" content="">
    <meta name="msapplication-navbutton-color" content="">

    <link rel="preconnect" href="//stats.pusher.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet preload prefetch" as="style"
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap">
    <link rel="preload" as="font" type="font/ttf"
        href="<?php echo get_site_url(); ?>/wp-content/plugins/idxboost/fonts/icons/fonts/idx-icons.ttf?j9u9ce"
        crossorigin>
    <link rel="preload" as="style"
        href="<?php echo get_site_url(); ?>/wp-content/plugins/idxboost/fonts/icons/style.css">


    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css">

    <?php wp_head();?>
</head>
<?php $body_class = array( "ms-float-header ib-wrap-full-width" ); ?>

<body <?php body_class( $body_class ); ?>>
    <!-- GTM scripts inside body -->
    <?php do_action('idx_gtm_body'); ?>
    <header id="header" class="ms-header ms-bottom-shadow headerColor">
        <div class="ms-wrap-header">
            <div class="ms-top-header">
                <!-- INICIO REDES SOCIALES -->
                <?php if (!empty($flex_idx_info["social"]["facebook_social_url"]) || !empty($flex_idx_info["social"]["twitter_social_url"]) || !empty($flex_idx_info["social"]["gplus_social_url"]) || !empty($flex_idx_info["social"]["youtube_social_url"]) || !empty($flex_idx_info["social"]["instagram_social_url"]) || !empty($flex_idx_info["social"]["linkedin_social_url"]) || !empty($flex_idx_info["social"]["pinterest_social_url"])){ ?>
                <div class="ms-item ms-wp-social">
                    <div class="ms-social">
                        <?php if (!empty($flex_idx_info["social"]["facebook_social_url"])): ?>
                        <a href="<?php echo $flex_idx_info["social"]["facebook_social_url"]; ?>"
                            class="ms-link idx-icon-facebook" title="Navigate to Facebook" target="_blank"
                            rel="nofollow"><span>Navigate to Facebook</span></a>
                        <?php endif; ?>
                        <?php if (!empty($flex_idx_info["social"]["twitter_social_url"])): ?>
                        <a href="<?php echo $flex_idx_info["social"]["twitter_social_url"]; ?>"
                            class="ms-link idx-icon-twitter" title="Navigate to Twitter" target="_blank"
                            rel="nofollow"><span>Navigate to Twitter</span></a>
                        <?php endif; ?>
                        <?php if (!empty($flex_idx_info["social"]["gplus_social_url"])): ?>
                        <a href="<?php echo $flex_idx_info["social"]["gplus_social_url"]; ?>"
                            class="ms-link idx-icon-google-plus" title="Navigate to Google+" target="_blank"
                            rel="nofollow"><span>Navigate to Google+</span></a>
                        <?php endif; ?>
                        <?php if (!empty($flex_idx_info["social"]["youtube_social_url"])): ?>
                        <a href="<?php echo $flex_idx_info["social"]["youtube_social_url"]; ?>"
                            class="ms-link idx-icon-youtube-logo" title="Navigate to Youtube" target="_blank"
                            rel="nofollow"><span>Navigate to Youtube</span></a>
                        <?php endif; ?>
                        <?php if (!empty($flex_idx_info["social"]["instagram_social_url"])): ?>
                        <a href="<?php echo $flex_idx_info["social"]["instagram_social_url"]; ?>"
                            class="ms-link idx-icon-instagram" title="Navigate to Instagram" target="_blank"
                            rel="nofollow"><span>Navigate to Instagram</span></a>
                        <?php endif; ?>
                        <?php if (!empty($flex_idx_info["social"]["linkedin_social_url"])): ?>
                        <a href="<?php echo $flex_idx_info["social"]["linkedin_social_url"]; ?>"
                            class="ms-link idx-icon-linkedin2" title="Navigate to Linked In" target="_blank"
                            rel="nofollow"><span>Navigate to Linked In</span></a>
                        <?php endif; ?>
                        <?php if (!empty($flex_idx_info["social"]["pinterest_social_url"])): ?>
                        <a href="<?php echo $flex_idx_info["social"]["pinterest_social_url"]; ?>"
                            class="ms-link idx-icon-pinterest-p" title="Navigate to Pinterest" target="_blank"
                            rel="nofollow"><span>Navigate to Pinterest</span></a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php } ?>
                <!-- FINAL REDES SOCIALES -->

                <!-- INICIO IDIOMAS -->
                <?php if (!empty(get_theme_mod('idx_languages_list'))){
            if (empty( get_theme_mod( 'idx_languages_list' ) ))  $idx_languages_list  = []; else  $idx_languages_list  = get_theme_mod( 'idx_languages_list' );
            if(
                ( array_key_exists('English', $idx_languages_list) && $idx_languages_list['English'] =="1" ) || 
                ( array_key_exists('Russian', $idx_languages_list) && $idx_languages_list['Russian'] =="1" ) || 
                ( array_key_exists('Spanish', $idx_languages_list) && $idx_languages_list['Spanish'] =="1" ) || 
                ( array_key_exists('Portuguese', $idx_languages_list) && $idx_languages_list['Portuguese'] =="1" ) ||
                ( array_key_exists('French', $idx_languages_list) && $idx_languages_list['French'] =="1" ) ||
                ( array_key_exists('Italian', $idx_languages_list) && $idx_languages_list['Italian'] =="1" ) ||
                ( array_key_exists('German', $idx_languages_list) && $idx_languages_list['German'] =="1" ) ||
                ( array_key_exists('Chinese', $idx_languages_list) && $idx_languages_list['Chinese'] =="1" )
            ) { ?>
                <div class="ms-item ms-wp-languages">
                    <div class="available-languages-content notranslate">
                        <a href="javascript:void(0)" id="available-languages" rel="nofollow"
                            aria-label="<?php echo __('English, Select your language', IDXBOOST_DOMAIN_THEME_LANG); ?>"
                            aria-expanded="false">
                            <span class="languages-text notranslate">EN</span>
                            <span class="flag-english" id="languages-map"></span>
                        </a>
                        <div class="languages-list">
                            <?php  if( array_key_exists('English', $idx_languages_list) && $idx_languages_list['English'] =="1" ){ ?>
                            <a lang="en" hreflang="en" href="javascript:void(0)"
                                data-language="<?php echo __('English', IDXBOOST_DOMAIN_THEME_LANG); ?>" data-iso="us"
                                class="active english flag-english item-languages notranslate" id="tr-en" rel="nofollow"
                                title="Translate to English" aria-label="Translate to English"><span>EN</span></a>
                            <?php  } ?>
                            <?php  if( array_key_exists('Russian', $idx_languages_list) && $idx_languages_list['Russian'] =="1" ){ ?>
                            <a lang="ru" hreflang="ru" href="javascript:void(0)"
                                data-language="<?php echo __('Russian', IDXBOOST_DOMAIN_THEME_LANG); ?>" data-iso="ru"
                                class="flag-russian item-languages notranslate" id="tr-ru" rel="nofollow"
                                title="Translate to Russian" aria-label="Translate to Russian"><span>RU</span></a>
                            <?php  } ?>
                            <?php  if( array_key_exists('Spanish', $idx_languages_list) && $idx_languages_list['Spanish'] =="1" ){ ?>
                            <a lang="es" hreflang="es" href="javascript:void(0)"
                                data-language="<?php echo __('Spanish', IDXBOOST_DOMAIN_THEME_LANG); ?>" data-iso="es"
                                class="flag-spanish item-languages notranslate" id="tr-es" rel="nofollow"
                                title="Translate to Spanish" aria-label="Translate to Spanish"><span>ES</span></a>
                            <?php  } ?>
                            <?php  if( array_key_exists('Portuguese', $idx_languages_list) && $idx_languages_list['Portuguese'] =="1" ){ ?>
                            <a lang="br" hreflang="br" href="javascript:void(0)"
                                data-language="<?php echo __('Portuguese', IDXBOOST_DOMAIN_THEME_LANG); ?>"
                                data-iso="pt" class="flag-portuguese item-languages notranslate" id="tr-pt"
                                rel="nofollow" title="Translate to Portuguese"
                                aria-label="Translate to Portuguese"><span>BR</span></a>
                            <?php  } ?>
                            <?php  if( array_key_exists('French', $idx_languages_list) && $idx_languages_list['French'] =="1" ){ ?>
                            <a lang="fr" hreflang="fr" href="javascript:void(0)"
                                data-language="<?php echo __('French', IDXBOOST_DOMAIN_THEME_LANG); ?>" data-iso="fr"
                                class="flag-french item-languages notranslate" id="tr-fr" rel="nofollow"
                                title="Translate to French" aria-label="Translate to French"><span>FR</span></a>
                            <?php  } ?>
                            <?php  if( array_key_exists('Italian', $idx_languages_list) && $idx_languages_list['Italian'] =="1" ){ ?>
                            <a lang="it" hreflang="it" href="javascript:void(0)"
                                data-language="<?php echo __('Italy', IDXBOOST_DOMAIN_THEME_LANG); ?>" data-iso="it"
                                class="flag-italy item-languages notranslate" id="tr-it" rel="nofollow"
                                title="Translate to Italy" aria-label="Translate to Italy"><span>IT</span></a>
                            <?php  } ?>
                            <?php  if( array_key_exists('German', $idx_languages_list) && $idx_languages_list['German'] =="1" ){ ?>
                            <a lang="de" hreflang="de" href="javascript:void(0)"
                                data-language="<?php echo __('German', IDXBOOST_DOMAIN_THEME_LANG); ?>" data-iso="de"
                                class="flag-german item-languages notranslate" id="tr-de" rel="nofollow"
                                title="Translate to German" aria-label="Translate to German"><span>DE</span></a>
                            <?php  } ?>
                            <?php  if( array_key_exists('Chinese', $idx_languages_list) && $idx_languages_list['Chinese'] =="1" ){ ?>
                            <a lang="zh" hreflang="zh" href="javascript:void(0)"
                                data-language="<?php echo __('Chinese', IDXBOOST_DOMAIN_THEME_LANG); ?>"
                                data-iso="zh-TW" class="flag-chinese item-languages notranslate" id="zh-TW"
                                rel="nofollow" title="Translate to Chinese"
                                aria-label="Translate to Chinese"><span>ZH</span></a>
                            <?php  } ?>
                        </div>
                    </div>
                </div>
                <?php } 
          } ?>
                <!-- FINAL IDIOMAS -->

                <!-- INICIO LOGIN Y REGISTER -->
                <div class="ms-item ms-wp-login">
                    <div class="ms-login-access">
                        <?php if (false === $flex_idx_lead): ?>
                        <ul class="item-no-hea item-header" id="user-options">
                            <li class="login" data-modal="modal_login" data-tab="tabLogin">
                                <button class="lg-login ms-btn-login" rel="nofollow"
                                    aria-label="<?php echo __('Login', IDXBOOST_DOMAIN_THEME_LANG); ?>">
                                    <span class="ms-icon-login"></span>
                                    <span class="ms-text"><?php echo __('Login', IDXBOOST_DOMAIN_THEME_LANG); ?></span>
                                </button>
                            </li>
                            <li class="register" data-modal="modal_login" data-tab="tabRegister">
                                <button class="lg-register ms-btn-login ms-register"
                                    aria-label="<?php echo __('Register', IDXBOOST_DOMAIN_THEME_LANG); ?>">
                                    <span
                                        class="ms-text"><?php echo __('Register', IDXBOOST_DOMAIN_THEME_LANG); ?></span>
                                </button>
                            </li>
                        </ul>
                        <?php else: $my_flex_pages = flex_user_list_pages(); ?>
                        <ul class="item-lo-hea item-header" id="user-options">
                            <?php $lead_name_exp = explode(' ', esc_attr($flex_idx_lead['lead_info']['first_name']));?>
                            <li class="login show_modal_login_active">
                                <a href="javascript:void(0)" rel="nofollow"
                                    title="<?php echo __('Welcome', IDXBOOST_DOMAIN_THEME_LANG); ?>  <?php echo $lead_name_exp[0]; ?>"><?php echo __('Welcome', IDXBOOST_DOMAIN_THEME_LANG); ?>
                                    <?php echo $lead_name_exp[0]; ?></a>
                                <div class="menu_login_active disable_login">
                                    <?php if (!empty($my_flex_pages)): 
                    global $flex_idx_info;
                    ?>
                                    <ul>
                                        <?php foreach ($my_flex_pages as $my_flex_page): 
                      if (in_array($my_flex_page['post_title'], ['My Saved Properties', 'My Saved Searches'])) {
                        if (true !== $flex_idx_info['agent']['has_basic_idx']) {
                          continue;
                        }
                      }
                      ?>
                                        <li><a href="<?php echo $my_flex_page['permalink']; ?>"
                                                title="<?php echo $my_flex_page['post_title']; ?>"><?php echo $my_flex_page['post_title']; ?></a>
                                        </li>
                                        <?php endforeach; ?>
                                        <li><button class="flex-logout-link" id="flex-logout-link"
                                                title="<?php echo __('Logout', IDXBOOST_DOMAIN_THEME_LANG); ?>"><?php echo __('Logout', IDXBOOST_DOMAIN_THEME_LANG); ?></button>
                                        </li>
                                    </ul>
                                    <?php endif; ?>
                                </div>
                            </li>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- FINAL LOGIN Y REGISTER -->

                <!-- INICIO CONTACTO -->
                <div class="ms-item ms-wp-contact">
                    <div class="ms-contact-info">
                        <a href="tel:<?php echo preg_replace('/[^\d+]/', '', $flex_idx_info['agent']['agent_contact_phone_number']); ?>"
                            class="ms-btn-phone"
                            title="<?php echo __('Call us ', IDXBOOST_DOMAIN_THEME_LANG); ?> <?php echo $idx_contact_phone; ?>">
                            <span><span><?php echo __('Call', IDXBOOST_DOMAIN_THEME_LANG); ?>
                                </span><?php echo $idx_contact_phone; ?></span>
                        </a>
                        <a href="mailto:<?php echo $idx_contact_email; ?>" class="ms-btn-email"
                            title="<?php echo __('Email contact', IDXBOOST_DOMAIN_THEME_LANG); ?>"><span><?php echo __('Email', IDXBOOST_DOMAIN_THEME_LANG); ?></span></a>
                    </div>
                </div>
                <!-- FINAL CONTACTO -->
            </div>

            <div class="ms-middle-header">
                <!-- INICIO LOGO -->
                <?php idx_the_custom_logo_header_boots(); ?>
                <!-- FINAL LOGO -->
                <div class="ms-item">
                    <!-- INICIO MENU -->
                    <div class="wrap-menu">
                        <nav aria-label="Main Menu">
                            <?php wp_nav_menu(array(
                  'theme_location' => 'primary',
                  'menu' => 'Primary Menu',
                  'menu_class' => '',
                  'menu_id' => '',
                  //'container' => 'nav',
                  //'container_class' => '',
                  'container_id' => 'menu-main'
                  )); ?>
                        </nav>
                    </div>
                    <!-- FINAL MENU -->

                    <!-- INICIO BOTON SEARCH -->
                    <a href="/search" class="ms-btn-search"
                        title="<?php echo __('Search a Property', IDXBOOST_DOMAIN_THEME_LANG); ?>">
                        <span></span>
                        <?php echo __('Search a Property', IDXBOOST_DOMAIN_THEME_LANG); ?>
                    </a>
                    <!-- FINAL BOTON SEARCH -->

                    <!-- INICIO BOTON MENU -->
                    <button class="ms-btn-menu" id="show-mobile-menu" aria-expanded="false"
                        aria-label="<?php echo __('Show menu', IDXBOOST_DOMAIN_THEME_LANG); ?>">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- FINAL BOTON MENU -->
                    <?php //echo do_shortcode('[idxboost_lead_activities]'); ?>
                </div>
            </div>
        </div>

        <!-- INICIO MENU RESPOSNIVE -->
        <div class="wrap-menu">
            <div class="ms-menu-responsive">
                <nav aria-label="Lateral Menu">
                    <?php wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu' => 'Primary Menu',
            'menu_class' => 'menu-more-options',
            'menu_id' => 'menu-main-resposnive',
            'container_class' => 'mobile_menu_div_100'
            ));?>
                </nav>
            </div>
        </div>
        <!-- FINAL MENU RESPONSIVE -->

        <div class="ms-overlay r-overlay"></div>
    </header>