<?php

add_action('wp_head','ubiq_add_socialgraph');


function ubiq_add_socialgraph() {
  if (is_single()) {
    ?>
      <meta property="og:title" content="<?php wp_title() ?>"/>
      <meta property="og:type" content="article"/>
      <meta property="og:url" content="<?php echo get_permalink() ?>"/>
      <?php
      if (get_the_post_thumbnail()) {
      ?>
      <meta property="og:image" content="<?php echo get_the_post_thumbnail() ?>"/>
      <?php } else { ?>
      <meta property="og:image" content="<?php header_image(); ?>"/>
      <?php } ?>
      <meta property="og:site_name" content="<?php echo get_bloginfo('name') ?>"/> 
      <meta property="og:description" content="<?php echo htmlentities(get_the_excerpt()) ?>"/>
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

?>