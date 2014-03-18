<?php
class wsf_shortcode {
  function __construct() {
    add_shortcode( 'wsf-date', array( $this, 'shortcode_date' ) );
    add_shortcode( 'wsf-projects-list', array( $this, 'shortcode_projects_list' ) );
  }

  function shortcode_date( $atts ) {
    extract( shortcode_atts( array(
      'format' => 'd/m/Y',
      'before' => '',
      'after' => ''
    ), $atts ) );
    return "<p>" . $before . date( $format ) . $after . "</p>";
  }

  function shortcode_projects_list() {
    $current_author = get_the_author_meta( 'ID' );
    $project_query = new WP_Query( array(
        'post_type' => 'projet',
        'posts_per_page' => 3,
        'orderby' => 'rand',
        'author' => $current_author
    ) );

    if ( !$project_query->have_posts() ) {
      return false;
    }

    ?>
    <h3>D'autres projets</h3>
    <ul>
      <?php while ( $project_query->have_posts() ) : 
        $project_query->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      <?php endwhile; ?>
    </ul>

    <?php
  }







}