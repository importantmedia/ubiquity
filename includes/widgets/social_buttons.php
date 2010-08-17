<?php
$shareUrl = urlencode(get_permalink($post->ID));
$shareTitle = urlencode($post->post_title);
$fbLinkStats = simplexml_load_file('http://api.facebook.com/restserver.php?method=links.getStats&urls='.$shareUrl);
$numshares = $fbLinkStats->link_stat->total_count;
if (0 < $numshares) $numshares = number_format($numshares);
?>

<div class="ubiq_button_fb" href="<?php the_permalink() ?>"><div class="fbicon"></div><div class="sharetext">Share</div><div class="count"><?php echo $numshares ?></div></div>

<a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink() ?>" data-text="Testing" data-count="horizontal" data-via="jakeluer" data-related="author:The Author's account.">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>


