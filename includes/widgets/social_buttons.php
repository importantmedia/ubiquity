<div class="ubiq_button_fb" href="<?php the_permalink() ?>"><div class="fbicon"></div><div class="sharetext">Share</div><div class="count"></div></div>
<fb:like href="<?php the_permalink() ?>" layout="button_count" show_faces="false"></fb:like>
<?php if( get_option('ubiq_twtr_sitehandle')) { ?>
<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink() ?>" data-count="horizontal" data-text="<?php the_title() ?>" data-via="<?php echo get_option('ubiq_twtr_sitehandle') ?>">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<?php } ?>
<script type="text/javascript" src="http://d.yimg.com/ds/badge2.js" badgetype="small-votes"><?php the_permalink() ?></script>
