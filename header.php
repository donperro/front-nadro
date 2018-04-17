<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mundialito Nadro</title>
	<?php
	wp_head();
	?>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"> -->
</head>
<body>
	<header>
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item" href="#">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mundialitonadro.png">
          </a>
          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
        <div class="navbar-menu navbar-end">
          <div class="navbar-item has-dropdown">
            <a class="navbar-link">Torneo</a>
            <div class="navbar-dropdown">
              <a href="#" className="navbar-item">Registro de Equipos</a>
              <a href="#" className="navbar-item">Estadísticas</a>
              <a href="#" className="navbar-item">Resultados</a>
              <a href="#" className="navbar-item">Noticias</a>
              <a href="#" className="navbar-item">Media</a>
            </div>
          </div>
          <!--a href="#" class="navbar-item is-disabled">DT Nadro</a-->
          <a href="#" class="navbar-item is-disabled">Galería</a>
          <a href="#" class="navbar-item">Contacto</a>
        </div>
      </div>
    </nav>
	</header>
  <section class="hero is-dark">
    <div class="hero-body">
      <div class="container">
        <h1 class="title is-size-1"><?php the_title(); ?></h1>
      </div>
    </div>
	</section>
	<section class="section">
    <div class="container">
