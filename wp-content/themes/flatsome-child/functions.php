<?php
// Add custom Theme Functions here

function custom_post_type_display($atts)
{
  // Lấy từ khóa tìm kiếm
  $search_query = isset($_GET['s']) ? sanitize_text_field($_GET['s']) : '';

  $args = array(
    'post_type' => 'huong-dan-su-dung2',
    'posts_per_page' => 100,
    's' => $search_query,
  );

  $query = new WP_Query($args);

  if ($query->have_posts()) {
    $output = '<ul>';
    while ($query->have_posts()) {
      $query->the_post();
      $output .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
    }
    $output .= '</ul>';
    wp_reset_postdata();
    return $output;
  } else {
    return 'Không có bài viết nào phù hợp với từ khóa.';
  }
}
add_shortcode('custom_post_type_list', 'custom_post_type_display');


function filter_search_by_custom_post_type($query)
{
  if ($query->is_search && !is_admin() && $query->get('post_type') === 'huong-dan-su-dung2') {
    $query->set('post_type', 'huong-dan-su-dung2');
  }
  return $query;
}
add_filter('pre_get_posts', 'filter_search_by_custom_post_type');

function custom_search_template_for_huongdansudung2($template)
{
  if (is_search() && !is_admin() && isset($_GET['post_type']) && $_GET['post_type'] == 'huong-dan-su-dung2') {
    $new_template = locate_template(array('archive-huong-dan-su-dung2.php'));
    if (!empty($new_template)) {
      return $new_template;
    }
  }
  return $template;
}

add_filter('template_include', 'custom_search_template_for_huongdansudung2');

function add_custom_js()
{
  // Thêm file JS vào footer
  wp_enqueue_script('custom-js', get_template_directory_uri() . '/myjs.js', array(), null, true);
}
add_action('wp_footer', 'add_custom_js');
