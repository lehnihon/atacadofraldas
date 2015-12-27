<?php
get_header('sem-banner'); ?>

<main id="content">
	<section id="contato">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<h4>Contato</h4>
					<p>Envie suas dúvidas ou sugestões, responderemos em breve!</p>
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 6 ); } ?>
				</div>
				<div class="col-md-6 text-left">
					<p><strong>Localização</strong> </p>
					<p>Avenida Ario Barnabé - 1083, Jardim Morada Sol Indaiatuba - São Paulo</p>
					<p>3935-5456</p>
					<p>contato@atacadodasfraldas.com.br</p>				
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>
	
</main><!-- #content -->

<?php get_footer(); ?>
