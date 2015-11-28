<?php
get_header(); ?>

<div id="content">
	<section id="banner">
		<div class="container">
			<div class="row banner-row">
				<div class="col-md-12">			
					<?php putRevSlider( "banner-index" ) ?>
				</div>
			</div>
			<div class="row categorias-row">
				<div class="col-md-4">		
					<?php putRevSlider( "categoria1" ) ?>
				</div>
				<div class="col-md-4">		
					<?php putRevSlider( "categoria1" ) ?>
				</div>
				<div class="col-md-4">		
					<?php putRevSlider( "categoria1" ) ?>
				</div>
			</div>
		</div>
	</section>

	<section id="marcas">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">			
					<?php putRevSlider( "marcas" ) ?>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
