<?php
/*
 * Template Name: GRupo
 */

	if ( !defined('ABSPATH') ){ die(); }
	
	global $wpdb;
	get_header();

	$equipo_id = $_GET['id'];

	
	query_posts( array('post_type' => 'jugador', 'posts_per_page' => -1, 'order' => 'ASC','tax_query' => array( 
        array( 
            'taxonomy' => 'equipo', //or tag or custom taxonomy
            'field' => 'id', 
            'terms' => array($equipo_id) 
        ) 
    ) 
) );

	if (have_posts()) :

	?>
	<table id="table" style="width:100%">
		  <tr>
		    <th>Jugador</th>
		    <th>Equipo</th> 
		    <th>Grupo</th>
		    <th>Laboratorio</th> 
		    <th>Pais</th>
		    <th>Sucursal</th>
		  </tr>
<?
	while (have_posts()) : the_post();

		$ID = get_field('producto');
		$jugador = strtoupper(get_the_title());
		// $excerpt = get_the_excerpt();
		$equipo = strtoupper(get_the_terms($id,'equipo')[0]->name);
		$grupo = strtoupper(get_the_terms($id,'grupo')[0]->name);
		$laboratorio = strtoupper(get_the_terms($id,'labs')[0]->name);
		$pais = strtoupper(get_the_terms($id,'labs2')[0]->name);
		$sucursal = strtoupper(get_the_terms($id,'sucursal')[0]->name);
		// the_field('producto');
		// get_field('fecha_inicio');
		// the_field('precio');
		
		// $post = get_post($ID);
		// $tipo = get_post_type();

		?>

		
		  <tr>
		    <td><?=$jugador; ?></td>
		    <td><?=$equipo; ?></td>
		    <td><?=$grupo; ?></td>
		    <td><?=$laboratorio; ?></td>
		    <td><?=$pais; ?></td>
		    <td><?=$sucursal; ?></td>
		  </tr>
		 

		<?
	endwhile;
	?> 
		</table>	
	<?	

	endif;
	 

     get_footer();

?>