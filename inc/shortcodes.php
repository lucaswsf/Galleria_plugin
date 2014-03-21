<?php
class galleria_shortcode {
  function __construct() {
    add_shortcode( 'galleria', array( $this, 'shortcode_galleria' ) );
    add_shortcode( 'galleries_list', array( $this, 'shortcode_galleries_list' ) );
  }

  function shortcode_galleria( $atts ) {
    extract( shortcode_atts( array(
      'gallery_id' => 0,
    ), $atts ) );

    $galleria_repeater = get_field( 'galleria', $gallery_id );
    
    if ( empty( $galleria_repeater ) || !is_array( $galleria_repeater ) ) {
      return false;
    } 
    
    $return = '';
    $return .= '<div class="galleria">';
        $return .= '<div class="galleria-list">';
        foreach( $galleria_repeater as $image ) {
              $return .= '<p>' . $image['titre'] . '</p>';
              $return .= '<a href="' . $image['image']['sizes']['large'] . '"><img src="' . $image['image']['sizes']['medium'] . '" /></a>';
              $return .= '<p>' . $image['description'] . '</p>';
        }
        $return .= "</div>";
      $return .= "</div>";
    return $return;
  }

  function shortcode_galleries_list( $atts ) {
   extract( shortcode_atts( array(
      'number' => 3,
    ), $atts ) );
    $current_author = get_the_author_meta( 'ID' );
    $project_query = new WP_Query( array(
        'post_type' => 'gallery',
        'posts_per_page' => $number,
        'orderby' => 'rand',
        'author' => $current_author
    ) );

    if ( !$project_query->have_posts() ) {
      return false;
    }

    ?>
    <h3>D'autres galleries</h3>
    <ul>
      <?php while ( $project_query->have_posts() ) : 
        $project_query->the_post(); ?>
        <li>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
      <?php endwhile; ?>
    </ul>

    <?php
  }
}