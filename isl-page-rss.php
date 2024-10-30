<?php
/*
Plugin Name: BX Page RSS
Plugin URI: http://www.businessxpand.com
Description: Adds your pages to the blog RSS feeds
Version: 1.1
Author: Business Xpand
Author URI: http://www.businessxpand.com
*/

function isl_page_rss($query) {
  if ($query->is_feed) {
    $query->set('post_type', 'any');
  }
  return $query;
}

add_filter('pre_get_posts', 'isl_page_rss');
?>
