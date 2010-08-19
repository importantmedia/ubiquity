<?php
if(get_the_author_meta('twitter_handle')) {
  $data_related = get_the_author_meta('twitter_handle') . ":The author's account";
} else {
  $data_related = "importantmedia:This is the Important Media Network";
}

?>
<ul class="ubiq_social_buttons">
  <li class="twtr"><a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink() ?>" data-text="<?php the_title() ?>" data-count="horizontal" data-via="<?php echo get_option('ubiq_twtr_sitehandle') ?>" data-related="<?php echo $data_related ?>:The author's account.">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></li>
  <li class="fblikesml"><fb:like href="<?php the_permalink() ?>" layout="button_count" show_faces="false" font="lucida grande"></fb:like></li>
</ul>