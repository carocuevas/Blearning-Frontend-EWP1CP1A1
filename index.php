<?php get_header(); ?>
	<header>
		<div>
			<div class="row__header">
				<div class="col-md-8 col-md-offset-4">
					<h1 class="h1header">Comienza una nueva vida y únete al mundo tecnológico</h1>
					<div class="divbotonazul"><a href="#" class="pbotones">Comienza acá!</a></div>
					<div class="divbotonverde"><a href="#" class="pbotones">Más info</a></div>
					<p class="subtitulo">Hay una escasez gigante de desarrolladores en el mundo y más aún en Latinoamérica, se necesitan más desarrolladores y tú puedes ser uno!</p>
          		</div>
          	</div>
		
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="<?php echo get_bloginfo('template_url'); ?>/images/bg.jpeg">
					</div>
					<div class="item">
						<img src="<?php echo get_bloginfo('template_url'); ?>/images/bg22.jpeg">
					</div>
					<div class="item">
						<img src="<?php echo get_bloginfo('template_url'); ?>/images/bg22.jpeg">
					</div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</header>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>El bootcamp de programación más grande de latinoamérica</h3>
					<p> Lorem ipsum dolor sit amet, consectetur adipicing elit. Totam in accusantium corrupti possimus facere hic optio eligendi asperiores porro laboriosam ratione quos repellat accusamus ea eum ex aut! Molestias eius!</p>
					<img class="img2" src="<?php echo get_bloginfo('template_url'); ?>/images/viewing-gallery-for-happy-people.png">
				</div>
			</div>
		</div>
		<div class="jumbotron">
			<div class="row">
				<div class="col-md-12">
					<h3>solicita información e inscríbete</h3>
					<p> Lorem ipsum dolor sit amet, consectetur adipicing elit. Totam in accusantium corrupti possimus facere hic optio eligendi asperiores porro laboriosam ratione quos repellat accusamus ea eum ex aut! Molestias eius!</p>
					<div class="divbotontarea"><a href="#" class="pbotones">Inscribete!</a></div>
					<br>
					<p> Vive la experiencia Desafío Latam!</p>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-3">
					<h4>Contacto</h4>
					<br>
					<h5>Desafío Latam</h5>
					<h5>Ezequias Alliende 2361</h5>
					<h5>+56 9 5117 7975</h5>
					<a href="mailto:inscripciones@desafíolatam.com" class="contacto">inscripciones@desafíolatam.com</a>
				</div>

				<div class="col-md-7">
					<h4>Suscríbete</h4>
					<br>
					<h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>

					<form class="formulario" action="#">
						<input type="text" placeholder="Ingresa tu mail">
						<button type="submit">Enviar</button>
					</form>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>