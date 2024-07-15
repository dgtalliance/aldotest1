<?php
global $flex_idx_info;
global $dgtForms;
$idx_contact_email = isset($flex_idx_info['agent']['agent_contact_email_address']) ? sanitize_text_field($flex_idx_info['agent']['agent_contact_email_address']) : '';
$idx_contact_phone = isset($flex_idx_info['agent']['agent_contact_phone_number']) ? sanitize_text_field($flex_idx_info['agent']['agent_contact_phone_number']) : '';

$idx_contact_address = isset($flex_idx_info['agent']['agent_address']) ? sanitize_text_field($flex_idx_info['agent']['agent_address']) : '';
$idx_contact_address2 = isset($flex_idx_info['agent']['agent_address2']) ? sanitize_text_field($flex_idx_info['agent']['agent_address2']) : '';
$idx_contact_zip_code = isset($flex_idx_info['agent']['agent_zip_code']) ? sanitize_text_field($flex_idx_info['agent']['agent_zip_code']) : '';
$idx_contact_state = isset($flex_idx_info['agent']['agent_state']) ? sanitize_text_field($flex_idx_info['agent']['agent_state']) : '';
$idx_contact_city = isset($flex_idx_info['agent']['agent_city']) ? sanitize_text_field($flex_idx_info['agent']['agent_city']) : '';

$idx_contact_address_final = $idx_contact_address.' '.$idx_contact_address2.', '.$idx_contact_city.', '.$idx_contact_state.' '.$idx_contact_zip_code;
?>

<?php if (get_post_type() !== 'flex-idx-pages') { ?>
<footer id="footer" class="ms-section ms-animate ms-footer-a" role="contentinfo">
    <div class="ms-wrap-footer">
        <div class="ms-wrap-img">
            <img class="ms-lazy" src="<?php echo isset($temporalImage) ? $temporalImage : ''; ?>" alt="Lorem Ipsum"
                data-real-type="image" data-img="<?php echo builder_get_assets_path(); ?>/images/home/ms-about.jpg"
                width="1" height="1">
        </div>
        <div class="ms-wrap-video">
            <img class="ms-lazy" src="<?php echo isset($temporalImage) ? $temporalImage : ''; ?>" alt="Lorem Ipsum"
                data-real-type="image" data-img="<?php echo builder_get_assets_path(); ?>/images/home/logo.png"
                width="1" height="1">
            <div class="ms-wrap-data">
                <div class="ms-data">
                    <span class="ms-title">Full-Service Luxury Real Estate Agency</span>
                    <span class="ms-subtitle">Located On Fisher Island, Come Visit Us!</span>
                </div>
                <address class="ms-address"><?php echo $idx_contact_address_final ;?></address>
                <a href="tel:<?php echo preg_replace('/[^\d+]/', '', $flex_idx_info['agent']['agent_contact_phone_number']); ?>"
                    class="ms-phone"
                    title="<?php echo __('Call us ', IDXBOOST_DOMAIN_THEME_LANG); ?> <?php echo $idx_contact_phone; ?>">Ph
                    <?php echo $idx_contact_phone; ?></a>
                <a href="mailto:<?php echo $idx_contact_email; ?>" class="ms-email"
                    title="<?php echo __('Email', IDXBOOST_DOMAIN_THEME_LANG); ?>:<?php echo $idx_contact_email; ?>"><?php echo $idx_contact_email; ?></a>
                <div class="ms-social">
                    <?php if (!empty($flex_idx_info["social"]["facebook_social_url"])) : ?>
                    <a href="<?php echo $flex_idx_info["social"]["facebook_social_url"]; ?>"
                        class="ms-link idx-icon-facebook" title="Navigate to Facebook" target="_blank"
                        rel="nofollow"><span>Facebook</span></a>
                    <?php endif; ?>
                    <?php if (!empty($flex_idx_info["social"]["twitter_social_url"])) : ?>
                    <a href="<?php echo $flex_idx_info["social"]["twitter_social_url"]; ?>"
                        class="ms-link idx-icon-twitter" title="Navigate to Twitter" target="_blank"
                        rel="nofollow"><span>Twitter</span></a>
                    <?php endif; ?>
                    <?php if (!empty($flex_idx_info["social"]["gplus_social_url"])) : ?>
                    <a href="<?php echo $flex_idx_info["social"]["gplus_social_url"]; ?>"
                        class="ms-link idx-icon-google-plus" title="Navigate to Google+" target="_blank"
                        rel="nofollow"><span>Google+</span></a>
                    <?php endif; ?>
                    <?php if (!empty($flex_idx_info["social"]["youtube_social_url"])) : ?>
                    <a href="<?php echo $flex_idx_info["social"]["youtube_social_url"]; ?>"
                        class="ms-link idx-icon-youtube-logo" title="Navigate to Youtube" target="_blank"
                        rel="nofollow"><span>YouTube</span></a>
                    <?php endif; ?>
                    <?php if (!empty($flex_idx_info["social"]["instagram_social_url"])) : ?>
                    <a href="<?php echo $flex_idx_info["social"]["instagram_social_url"]; ?>"
                        class="ms-link idx-icon-instagram" title="Navigate to Instagram" target="_blank"
                        rel="nofollow"><span>Instagram</span></a>
                    <?php endif; ?>
                    <?php if (!empty($flex_idx_info["social"]["linkedin_social_url"])) : ?>
                    <a href="<?php echo $flex_idx_info["social"]["linkedin_social_url"]; ?>"
                        class="ms-link idx-icon-linkedin2" title="Navigate to Linked In" target="_blank"
                        rel="nofollow"><span>Linked In</span></a>
                    <?php endif; ?>
                    <?php if (!empty($flex_idx_info["social"]["pinterest_social_url"])) : ?>
                    <a href="<?php echo $flex_idx_info["social"]["pinterest_social_url"]; ?>"
                        class="ms-link idx-icon-pinterest-p" title="Navigate to Pinterest" target="_blank"
                        rel="nofollow"><span>Pinterest</span></a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="ms-video-footer">
                <div class="ms-wrap-img">
                    <img class="ms-lazy" src="<?php echo isset($temporalImage) ? $temporalImage : ""; ?>"
                        alt="Lorem Ipsum" data-real-type="image"
                        data-img="<?php echo builder_get_assets_path(); ?>/images/home/video-bg.jpg" width="1"
                        height="1">
                    <button class="ms-btn-play vd-play"
                        data-video="https://24e3d2766e918fc4369a-2005f80a01533296a927e19ca48f1dcf.ssl.cf1.rackcdn.com/idxboost/TREM-technology_video_v2.m4v"
                        data-title="Demo video" aria-label="Show this video">
                        Play <span></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="ms-form">
            <div class="ms-wrap-form">
                <h3 class="ms-title">Schedule a <span>Private Showing</span></h3>
                <p class="ms-subtitle">Email us below, or call <a
                        href="tel:<?php echo preg_replace('/[^\d+]/', '', $flex_idx_info['agent']['agent_contact_phone_number']); ?>"><?php echo $idx_contact_phone; ?>
                        to schedule your appointment!</a></p>
                <?php echo do_shortcode('[flex_idx_contact_form id_form="Contact_form" map="hide"]'); ?>
                <input type="hidden" name="idx_contact_email_temp" class="idx_contact_email_temp"
                    value="<?php echo $idx_contact_email; ?>">
                <button class="ms-close-modal" data-remove="ms-active-modal">Close</button>
                <script type="text/javascript">
                jQuery(".flex-content-form .pt-name .medium").attr('placeholder', 'First Name*');
                jQuery(".flex-content-form .pt-lname .medium").attr('placeholder', 'Last Name*');
                jQuery(".flex-content-form .pt-email .medium").attr('placeholder', 'Email*');
                jQuery(".flex-content-form .pt-phone .medium").attr('placeholder', 'Phone');
                jQuery(".flex-content-form .textarea").attr('placeholder', 'Comment');
                </script>
            </div>
        </div>
    </div>
    <div class="ms-bottom-footer">

        <ul class="ms-sub-menu-footer">
            <li><a href="/terms-and-conditions/#atospp-privacy" title="Go to Privacy page">Privacy</a></li>
            <li><a href="/terms-and-conditions/" title="Go to Terms of Service page">Terms of Service</a></li>
            <li><a href="/accessibility/" title="Go to Accessibility page">Accessibility</a></li>
        </ul>

        <p class="ms-copyright">Copyright © <?php echo date('Y'); ?> <?php echo bloginfo(); ?>. all rights reserved</p>
        <div class="ms-trem">
            <img class="ms-lazy" src="<?php echo isset($temporalImage) ? $temporalImage : ""; ?>" alt="MLS"
                data-real-type="image" data-img="<?php echo builder_get_assets_path(); ?>/images/home/mls.png" width="1"
                height="1">
            <div class="ms-trem-link">Design + Powered by <a href="https://www.tremgroup.com/" target="_blank"
                    title="Learn more about TREM GROUP (Open new window)"><span>TREM</span>GROUP</a>
            </div>
        </div>
</footer>
<?php } ?>

<?php if (!empty(get_theme_mod('idx_languages_list'))) {
  if (empty(get_theme_mod('idx_languages_list')))  $idx_languages_list  = [];
  else  $idx_languages_list  = get_theme_mod('idx_languages_list');
  if (
    (array_key_exists('English', $idx_languages_list) && $idx_languages_list['English'] == "1") ||
    (array_key_exists('Russian', $idx_languages_list) && $idx_languages_list['Russian'] == "1") ||
    (array_key_exists('Spanish', $idx_languages_list) && $idx_languages_list['Spanish'] == "1") ||
    (array_key_exists('Portuguese', $idx_languages_list) && $idx_languages_list['Portuguese'] == "1") ||
    (array_key_exists('French', $idx_languages_list) && $idx_languages_list['French'] == "1") ||
    (array_key_exists('Italian', $idx_languages_list) && $idx_languages_list['Italian'] == "1") ||
    (array_key_exists('German', $idx_languages_list) && $idx_languages_list['German'] == "1") ||
    (array_key_exists('Chinese', $idx_languages_list) && $idx_languages_list['Chinese'] == "1")
  ) { ?>
<div id="google_translate_element"></div>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateInit"></script>
<script>
function googleTranslateInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en',
        includedLanguages: 'en,ru,es,pt,fr,it,de,zh-TW',
        multilanguagePage: true,
        autoDisplay: true,
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
    }, 'google_translate_element');
}
</script>
<?php }
} ?>

<?php wp_footer(); ?>


<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>

</body>

</html>