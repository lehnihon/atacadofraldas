<?php
get_header('sem-banner'); ?>

<main id="content">
	<section id="contato">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h4 class="blue"><strong>Contato</strong></h4>
				</div>
			</div><!-- .row -->
			<div class="row">
				<div class="col-md-6 text-left">
					<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 6 ); } ?>
				</div>
				<div class="col-md-6 text-left ">

					<div class="videoWrapper">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3669.4486997797053!2d-47.237052884543914!3d-23.1172688512282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf4cc0bedaca7f%3A0x6310e653786a1252!2sAv.+%C3%81rio+Barnab%C3%A9%2C+1083+-+Jardim+Sao+Conrado%2C+Indaiatuba+-+SP%2C+13346-400!5e0!3m2!1spt-BR!2sbr!4v1451603260272" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="quadro">
						<p><strong>Endereço</strong> </p>
						<p>Avenida Ario Barnabé - 1083, Jardim Morada Sol <br>Indaiatuba - São Paulo</p><br>
						<p><strong>Telefone</strong> </p>
						<p>19 3935-5456</p><br>
						<p><strong>Email</strong> </p>
						<p>contato@atacadodasfraldas.com.br</p>							
					</div>
				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>
	
</main><!-- #content -->

<?php get_footer(); ?>
