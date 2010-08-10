<div id="facebook_widget" class="color_fb clearfix">
<div class="widget_masthead">
  <fb:fan profile_id="<?php echo get_option('ubiq_fb_fanpageid') ?>"
  	stream="0" connections="0" width="200"></fb:fan> 
  </div>
  
  <div class="widget_header">
    <ul class="tabs">
    	<li class="fr_activity active">From my Network</li>
    </ul>
  </div>
  
  <div class="widget_body">
    <ul class="panels">
    
    	<li class="active"><fb:activity site="<?php bloginfo('url') ?>" width="280"
    		header="false" font="lucida grande" border_color="#fff"
    		recommendations="false"></fb:activity></li>
    
    </ul>
  </div>
</div>