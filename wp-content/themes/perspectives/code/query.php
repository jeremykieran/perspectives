<?php

/*
  Custom WP Query
*/

class Post {
  public static function find($args = null) {
    wp_reset_postdata();
    
    if(empty($args) ) {
      $args = array(
        "post_type" => get_called_class()
      );
    } else {
      $args["post_type"] = get_called_class();
    }

    return new WP_Query($args);
  }


  public static function find_by($key, $value) {
    wp_reset_postdata();

    $args = array(
      $key => $value,
      "post_type" => get_called_class()
    );
    return new WP_Query($args);
  }
}

class Page extends Post {}