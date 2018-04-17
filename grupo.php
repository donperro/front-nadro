<?php
/*
 * Template Name: GRupo
 */

	if ( !defined('ABSPATH') ){ die(); }
	
	global $wpdb;
	get_header();

	$grupo_id = $_GET['id'];

	$Query = $wpdb->get_results("SELECT distinct a2.term_taxonomy_id as tax_id, a4.name as tax FROM $wpdb->posts a1 LEFT JOIN $wpdb->term_relationships a2 ON a1.id = a2.object_id LEFT JOIN $wpdb->term_taxonomy a3 ON a2.term_taxonomy_id = a3.term_taxonomy_id LEFT JOIN $wpdb->terms a4 ON a2.term_taxonomy_id = a4.term_id WHERE a1.POST_TYPE = 'jugador' AND a1.POST_STATUS = 'publish' AND taxonomy = 'equipo' AND a1.id in (SELECT a1.id FROM $wpdb->posts a1 LEFT JOIN $wpdb->term_relationships a2 ON a1.id = a2.object_id LEFT JOIN $wpdb->term_taxonomy a3 ON a2.term_taxonomy_id = a3.term_taxonomy_id WHERE a1.POST_TYPE = 'jugador' AND a1.POST_STATUS = 'publish' AND taxonomy = 'grupo' AND a2.term_taxonomy_id = $grupo_id)");

	    foreach ($Query as $equipo) {
	    	?>
			<a href="/staging/equipo?id=<?php echo $equipo->tax_id; ?>"><?php echo $equipo->tax; ?></a><br/>	
			<?php
		}		
     get_footer();

?>