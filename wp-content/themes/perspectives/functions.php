<?php include "code/main.php";

// THEME SUPPORT
add_theme_support("post-thumbnails"); 
add_theme_support("menus");

/* CUSTOM POST TYPE
   1: Type name, MUST be singular
   2: (opt) Icon name, check http://melchoyce.github.io/dashicons/
   3: (opt) Taxonomy name, MUST be singular
*/
// Example:
add_post_type("Film", "video-alt", "Type");
class Film extends Post {};

add_post_type("Workshop", "editor-paste-word");
class Workshop extends Post {};

/* Remove Unnecessary ADMIN SIDEBAR
   - Use the slug
function remove_menu_items() {
  $items = array(
    "upload.php",
  );
  foreach($items as $item) { remove_menu_page($item); }
}
*/