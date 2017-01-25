<?php

if( $_GET && isset( $_GET['val'] ) ){
require_once( "../../../wp-load.php" );
$curSlug = $_GET['val'];
	


$args = array(
    'post_type'      => 'page',
    'posts_per_page' => 1,
    'pagename'    => $curSlug,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );


$parent = new WP_Query( $args );

if ( $parent->have_posts() ) : ?>

    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

        <div id="parent-<?php the_ID(); ?>" class="parent-page">






<div class="col-md-6">
    <?php the_content(); ?>
</div>

<div class="col-md-6">
	<?php the_post_thumbnail(); ?>
</div>







        </div>

    <?php endwhile; ?>

<?php endif; wp_reset_query();

} ?>