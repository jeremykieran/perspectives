<?php
/*
  Create Custom Post Type
*/

function add_post_type($name, $icon = "admin-post", $tax_name = null) {
  $plural = Inflector::pluralize($name);
  $singular = $name;

  $labels = array(
    "name" => $plural,
    "singular_name" => $singular,
    "all_items" => "All " . $plural,
    "add_new_item" => "Add New " . $singular,
    "edit_item" => "Edit " . $singular,
    "new_item" => "New " . $singular,
    "view_item" => "View " . $singular,
    "search_items" => "Search " . $plural,
    "not_found" => "No " . strtolower($plural) . " found",
    "not_found_in_trash" => "No " . strtolower($plural) . " found in Trash",
    "parent_item_colon" => "Parent " . $singular . ":",
  );

  $post_args = array(
    "public" => true,
    "menu_icon" => "dashicons-".$icon,
    "labels" => $labels,
    "capability_type" => "post",
    "supports" => array(
      "title",
      "editor",
      "custom-fields",
      "revisions",
      "thumbnail",
    ),
  );
  
  // If taxonomy is given
  if($tax_name) {
    add_taxonomy($tax_name, $name);
  }

  register_post_type(strtolower($name), $post_args);
}

/*
  Create Custom Taxonomy
*/

function add_taxonomy($name, $post_type) {
  $plural = Inflector::pluralize($name);
  $singular = $name;

  $labels = array(
    "name" => $plural,
    "singular_name" => $singular,
    "all_items" => "All " . $plural,
    "edit_item" => "Edit " . $singular,
    "view_item" => "View " . $singular,
    "update_item" => "Update " . $singular,
    "add_new_item" => "Add New " . $singular,
    "parent_item" => "Parent " . $singular,
    "search_items" => "Search " . $plural,
    "popular_items" => "Popular " . $plural,
    "add_or_remove_items" => "Add or remove " . strtolower($plural),
    "choose_from_most_used" => "Choose from the most used " . strtolower($plural),
    "not_found" => "No " . strtolower($plural) . " found"
  );

  $tax_args = array(
    "labels" => $labels,
    "show_ui" => true,
    "query_var" => true,
    "show_admin_column" => false,
    "hierarchical" => true,
  );
  register_taxonomy(strtolower($name), strtolower($post_type), $tax_args);

  new CPT_Filter(array(strtolower($post_type) => array(strtolower($singular) ) ) );
}

/*
  Add Taxonomy filter to a CPT
  @author Ohad Raz <admin@bainternet.info>
*/
class CPT_Filter {
  function __construct($cpt = array()) {
    $this->cpt = $cpt;
    add_action("restrict_manage_posts", array($this, "my_restrict_manage_posts") );
  }

  /*
    Add select dropdown per taxonomy
  */
  public function my_restrict_manage_posts() {
    // only display these taxonomy filters on desired custom post_type listings
    global $typenow;
    $types = array_keys($this->cpt);

    if (in_array($typenow, $types) ) {
      // create an array of taxonomy slugs you want to filter by - if you want to retrieve all taxonomies, could use get_taxonomies() to build the list
      $filters = $this->cpt[$typenow];

      foreach ($filters as $tax_slug) {
        // retrieve the taxonomy object
        $tax_obj = get_taxonomy($tax_slug);
        $tax_name = $tax_obj->labels->name;

        // output html for taxonomy dropdown filter
        echo "<select name='".strtolower($tax_slug)."' id='".strtolower($tax_slug)."' class='postform'>";
        echo "<option value=''>Show All $tax_name</option>";
        $this->generate_taxonomy_options($tax_slug,0,0,(isset($_GET[strtolower($tax_slug)])? $_GET[strtolower($tax_slug)] : null));
        echo "</select>";
      }
    }
  }
     
  /*
    Generate_taxonomy_options generate dropdown       
  */
  public function generate_taxonomy_options($tax_slug, $parent = "", $level = 0, $selected = null) {
    $args = array("show_empty" => 1);

    if(!is_null($parent) ) {
      $args = array("parent" => $parent);
    }
    $terms = get_terms($tax_slug, $args);
    $tab = "";
    
    for($i = 0; $i < $level; $i++) {
      $tab .= "--";
    }

    foreach ($terms as $term) {
      // output each select option line, check against the last $_GET to show the current option selected
      echo "<option value=". $term->slug, $selected == $term->slug ? " selected='selected'" : "", ">" . $tab . $term->name ." (" . $term->count .")</option>";
      $this->generate_taxonomy_options($tax_slug, $term->term_id, $level + 1, $selected);
    }
  }
}//end class