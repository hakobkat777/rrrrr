<?php
/*
Template name:Service template
*/
get_header(); ?>

<div class="container">
<div class="row">










<div class="tab">

	<?php 
	$args = array(
		'post_parent' => $post->ID,
		'post_type'   => 'page', 
		'numberposts' => -1,
		'order' => 'ASC'
	);

	$children = get_children( $args ); $i = 0;
	$array = array('facebook', 'twitter', 'google-plus');
	foreach ($children as $child) { 
	$j = $i++; ?> 

		<div class="col-md-4">
			<img class="inject" src="<?php echo get_bloginfo('template_directory'); ?>/images/<?php echo $array[$j]; ?>.svg" alt="">
		    <span class="" id="<?php echo $child->post_name; ?>"><?php echo $child->post_title; ?></span>
		</div>

	<?php } ?>

</div>



<div class="tab-content">

<?php
$args = array(
    'post_type'      => 'page',
    'posts_per_page' => 1,
    'post_parent'    => $post->ID,
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

<?php endif; wp_reset_query(); ?>

</div>










</div>
</div>




<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('.tab div:first-child').addClass('active');
		jQuery('.tab span').click(function(cont){
	        // jQuery(this).each(function(){

	            var slug = jQuery(this).attr('id');

	            jQuery.get( "<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/service-filter.php",
	                {"val": slug},
	                function(cont){
	                    jQuery('.tab-content').html(cont);
	            });
	            jQuery(this).parent().addClass('active').siblings('.active').removeClass('active');
	        });
    	});
	})
</script>







<?php get_footer(); ?>