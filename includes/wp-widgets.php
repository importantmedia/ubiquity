<?php


add_action('widgets_init', create_function('', 'return register_widget("UbiqFBStandard");'));

class UbiqFBStandard extends WP_Widget {
  /** constructor */
  function UbiqFBStandard() {
    parent::WP_Widget(false, $name = 'Ubiquity: Facebook');	
  }
  
  /** @see WP_Widget::widget */
  function widget($args, $instance) {		
    extract( $args );
    
    $ubiquity_plugin_url = trailingslashit( get_bloginfo('wpurl') ).PLUGINDIR.'/'. dirname( plugin_basename(__FILE__) );
    wp_register_style('ubiq_fbstandard_style', $ubiquity_plugin_url.'/css/widget-fb-standard.css');
    wp_enqueue_style('ubiq_fbstandard_style');
    
    ?>
    <?php echo $before_widget; ?>
    <?php include('widgets/fb-standard.php') ?>
    <?php echo $after_widget; ?>
  <?php
  }
  
  /** @see WP_Widget::update */
  function update($new_instance, $old_instance) {				
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
    return $instance;
  }
  
  /** @see WP_Widget::form */
  function form($instance) {				
    $title = esc_attr($instance['title']);
    ?>
    <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>
    <?php 
  }

} // class FooWidget

?>