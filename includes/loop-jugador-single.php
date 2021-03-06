<?php
global $avia_config, $post_loop_count;

$post_loop_count= 1;
// $post_class 	= "post-entry-".avia_get_the_id();

query_posts( array('post_type' => 'jugador', 'posts_per_page' => -1) );

// check if we got posts to display:
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

        // $thumb = get_the_post_thumbnail(get_the_ID(), $avia_config['size']);
		
		
        do_action('ava_after_content', get_the_ID(), 'single-jugador');

	$post_loop_count++;
	endwhile;
	?> 
		</table>	
	<?	

	else:
?>

    <article class="entry">
        <header class="entry-content-header">
            <h1 class='post-title entry-title'><?php _e('Nothing Found', 'avia_framework'); ?></h1>
        </header>

        <?php get_template_part('includes/error404'); ?>

        <footer class="entry-footer"></footer>
    </article>

<?php

	endif;
?>
