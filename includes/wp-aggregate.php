<?php


add_action('edit_post', 'ubiq_agg_edit_post', 20, 2);
add_action('save_post', 'ubiq_agg_edit_post', 20, 2);


/*
 * Save the post in the wp_allposts table for any
 * changes including comment additions or moderation.
 */
function ubiq_agg_edit_post($post_id, $post) {
  global $wpdb, $wp_current_filter, $wp_actions;
  static $ran = false;

  $current_action = end($wp_current_filter);
  
  if (!get_option('ubiq_aggregate')) {
  	return;
  }

  // Bail out if we already ran in a previous call
//  if ($ran)
//    return;
/*
  // Update comment count. Add 1 because $post->comment_count hasn't been updated yet
  if (in_array('wp_update_comment_count', $wp_actions)) {
    $sql = 'UPDATE wp_allposts SET comment_count="'.($post->comment_count+1).'"
            WHERE blog_id="'.$wpdb->blogid.'" AND post_id="'.$post_id.'"';
    $wpdb->query($sql);
    $ran = true;
    return;
  }
*/
  if (is_object($post) && $post->post_type == 'post') {

    // Save post to global posts table
    $data = array(
      'post_author' => $post->post_author,
      'post_status' => $post->post_status,
      'post_date_gmt' => $post->post_date_gmt,
      'post_modified_gmt' => $post->post_modified_gmt,
      'comment_count' => $post->comment_count,
    );
    
    // Check if post is inserted yet
    $sql = 'SELECT post_status FROM wp_allposts
            WHERE blog_id="'.$wpdb->blogid.'" AND post_id="'.$post_id.'" ';
    $result = $wpdb->get_var($sql);
        
    if ($result) { // Update existing post
      $where = array(
        'blog_id' => $wpdb->blogid,
        'post_id' => $post->ID,
      );
      $result = $wpdb->update('wp_allposts', $data, $where);
    } else { // Insert new post
      $data['blog_id'] = $wpdb->blogid;
      $data['post_id'] = $post->ID;
      $data['post_type'] = $post->post_type;
      $result = $wpdb->insert('wp_allposts', $data);
    }
	/*
    // Add post terms to posts2cats that are in term_relationships
    $sql = 'INSERT INTO wp_posts2cats
            SELECT '.$wpdb->blogid.', r.object_id, t.term_id, t.taxonomy
            FROM '.$wpdb->term_relationships.' r
            INNER JOIN '.$wpdb->term_taxonomy.' t
            ON r.term_taxonomy_id = t.term_taxonomy_id
            WHERE r.object_id="'.$post_id.'" AND t.term_id NOT IN (
                SELECT term_id FROM wp_posts2cats
                WHERE blog_id="'.$wpdb->blogid.'" AND post_id="'.$post_id.'"
            )';
    $wpdb->query($sql);
	*/
	
	/*
    // Remove post terms from posts2cats that are not in term_relationships
    $sql = 'DELETE FROM wp_posts2cats
            WHERE blog_id="'.$wpdb->blogid.'" AND post_id="'.$post_id.'" AND term_id NOT IN (
                SELECT t.term_id
                FROM '.$wpdb->term_relationships.' r
                INNER JOIN '.$wpdb->term_taxonomy.' t
                ON r.term_taxonomy_id = t.term_taxonomy_id
                WHERE r.object_id="'.$post_id.'"
            )';
    $wpdb->query($sql);
	*/
	/*
    // Create tag cloud view
    $exclude = go_query_where_blog_private('p');
    $sql = 'TRUNCATE wp_tagcloud';
    $wpdb->query($sql);
    $sql = 'INSERT INTO wp_tagcloud
            SELECT c.term_id, s.cat_name, s.category_nicename, COUNT(c.post_id) AS cnt
            FROM wp_posts2cats c
            INNER JOIN wp_allposts p
            ON c.blog_id = p.blog_id AND c.post_id = p.post_id
            INNER JOIN wp_sitecategories s ON c.term_id = s.cat_ID
            WHERE p.post_status = "publish" AND c.taxonomy = "post_tag"'. $exclude .'
            GROUP BY c.term_id
            HAVING cnt > 1
            ORDER BY cnt DESC
            LIMIT 300';
    $wpdb->query($sql);
    */
    
  }
  $ran = true;
}

?>