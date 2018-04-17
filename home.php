<?php
/*
 * Template Name: Home
 */

	if ( !defined('ABSPATH') ){ die(); }
	
	// global $avia_config;
	get_header();

	$member_group_terms = get_terms( 'grupo' );


	foreach ( $member_group_terms as $member_group_term ) {
    $member_group_query = new WP_Query( array(
        'post_type' => 'member',
        'tax_query' => array(
            array(
                'taxonomy' => 'grupo',
                'field' => 'slug',
                'terms' => array( $member_group_term->slug ),
                'operator' => 'IN'
            )
        )
    ) );

    // print_r($member_group_term);
    ?>
    	<a href="/staging/grupo?id=<?php echo $member_group_term->term_id; ?>"><?php echo $member_group_term->name; ?></a><br/>	
    <?php
    
    $member_group_query = null;
    wp_reset_postdata();
}



     get_footer();
?>