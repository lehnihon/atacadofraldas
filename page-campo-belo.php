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
          </p>
				</div>
        <div class="col-md-6 text-left">
          <div class="videoWrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d18863.762713741104!2d-47.09682969060947!3d-23.036066316592386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8ca8e9f44f305%3A0xf20c23b6cc3d0f40!2sGaleria+do+Sol+(Campo+Belo)!5e0!3m2!1spt-BR!2sbr!4v1537535453113" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <br>
            <p><strong>Acompanhe o Atacado das Fraldas Indaiatuba nas redes sociais</strong></p>
            <ul class="redes">
              <li><a href="#" title=""><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/redes1.jpg"; ?>"/></a></li>
              <li><a href="#" title=""><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/redes2.jpg"; ?>"/></a></li>
            </ul>
        </div>
			</div><!-- .row --><br>
		</div><!-- .container -->
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>
	
</main><!-- #content -->

<?php get_footer(); ?>
