<?php
get_header('sem-banner'); ?>
<main id="content">
	<section id="contato">
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<h4 class="blue"><strong>Atacado das Fraldas Campo Belo</strong></h4>
          <img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/contato1.jpg"; ?>"/>
          <p>
            Rod. Engenheiro Miguel Melhado Campos S/N<br>
            Campo Belo - Campinas - SP<br>
            Galeria do Sol - Cointainers Amarelos<br>
            <strong>WhatsApp:</strong> (19) 99885-7987
          </p>
          <p>
            <strong>Horário de funcionamento</strong><br>
            Segunda a Sexta 09h às 18h30 - Sábado 09 às 13h
          </p><br>
          <a class="btn-saiba" href="<?php echo esc_url( home_url( '/' )."campo-belo" ); ?>" title="">saiba mais</a>
				</div>
        <div class="col-md-6 text-left">
          <h4 class="blue"><strong>Atacado das Fraldas Indaiatuba</strong></h4>
          <img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/contato2.jpg"; ?>"/>
          <p>
            Avenida Ario Barnabé, 1083 - Jardim Morada Sol<br>
            Indaiatuba - São Paulo<br>
            Disk Fraldas: (19) 3935-5456<br>
            <strong>WhatsApp:</strong> (19) 99597-0327
          </p>
          <p>
            <strong>Horário de funcionamento:</strong><br>
            Segunda a Sexta: 09h às 18h30 - Sábado: 09 às 18h
          </p><br>
          <a class="btn-saiba" href="<?php echo esc_url( home_url( '/' )."indaiatuba" ); ?>" title="">saiba mais</a>
        </div>
			</div><!-- .row --><br>
		</div><!-- .container -->
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>
	
</main><!-- #content -->

<?php get_footer(); ?>
