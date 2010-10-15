<?php

add_action('wp_head','ubiq_add_socialgraph');
//add_action('wp_footer','ubiq_fb_javascriptapi');

function ubiq_add_socialgraph() {
  if (!get_option('ubiq_fb_opengraph')) { return; }

  if (is_single()) {
  
    $image_id = get_post_thumbnail_id();
    $image_url = wp_get_attachment_image_src($image_id,'large', true);
  
    ?>
      <meta property="og:title" content="<?php the_title() ?>"/>
      <meta property="og:type" content="article"/>
      <meta property="og:url" content="<?php echo get_permalink() ?>"/>
      <?php
      if (get_the_post_thumbnail()) {
      ?>
      <meta property="og:image" content="<?php echo $image_url[0] ?>"/>
      <?php } else { ?>
      <meta property="og:image" content="<?php header_image(); ?>"/>
      <?php } ?>
      <meta property="og:site_name" content="<?php echo get_bloginfo('name') ?>"/> 
      <meta property="og:description" content="<?php echo strip_tags(get_the_excerpt()) ?>"/>
      <?php if (get_option('ubiq_fb_appid')) { ?>
      <meta property="fb:app_id" content="<?php echo get_option('ubiq_fb_appid') ?>" />
      <?php } ?>
    <?php
  } else if(is_home()) {
    ?>
      <meta property="og:title" content="<?php echo get_bloginfo('name') ?>"/>
      <meta property="og:type" content="website"/>
      <meta property="og:url" content="<?php bloginfo('url') ?>"/>
      <meta property="og:image" content="<?php header_image(); ?>"/>
      <meta property="og:site_name" content="<?php echo get_bloginfo('name') ?>"/> 
      <meta property="og:description" content="<?php echo bloginfo('description') ?>"/>
      <?php if (get_option('ubiq_fb_appid')) { ?>
      <meta property="fb:app_id" content="<?php echo get_option('ubiq_fb_appid') ?>" />
      <?php } ?>
    <?php
  }
}

function ubiq_fb_javascriptapi() {
  if (!get_option('ubiq_fb_javascriptsdk') && !get_option('ubiq_fb_appid') && !is_admin()) { return; }
  
  $fbAppId = get_option('ubiq_fb_appid');
  ?>
  <div id="fb-root"></div>
  <script>
    window.fbAsyncInit = function() {
      FB.init({appId: '<?php echo $fbAppId ?>', status: true, cookie: true,
               xfbml: true});
    };
    (function() {
      var e = document.createElement('script'); e.async = true;
      e.src = document.location.protocol +
        '//connect.facebook.net/en_US/all.js';
      document.getElementById('fb-root').appendChild(e);
    }());
  </script>
  <?php
}

function ubiq_sitecard() {
  include('widgets/sitecard.php');
}

function ubiq_social_buttons() {
  include('widgets/social_buttons.php');
}

?>