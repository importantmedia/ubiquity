<div id="ubiq_sitecard" class="clearfix">
  <?php if(get_option('ubiq_fb_fanpageid')) { ?>
  <div id="facebook_like">
    <fb:like-box profile_id="<?php echo get_option('ubiq_fb_fanpageid') ?>" stream="false" header="true" connections="0" width="195" height="85"></fb:like-box>
  </div>
  <?php } ?>
  <div id="social_buttons">
    <ul>
      <?php if (get_option('ubiq_twtr_sitehandle')) { ?>
      <li><a href="http://twitter.com/<?php echo get_option('ubiq_twtr_sitehandle') ?>" class="twtr_32" title="@<?php echo get_option('ubiq_twtr_sitehandle') ?>">@<?php echo get_option('ubiq_twtr_sitehandle') ?></a></li>
      <?php } ?>
      <li><a href="<?php bloginfo('rss2_url') ?>" class="rss_32" title="RSS">RSS</a></li>
    </ul>
  </div>
</div>