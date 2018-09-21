<?php
get_header('sem-banner'); ?>

<main id="content">
	<section id="contato">
		<div class="container">
			<div class="row">
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
          </p>
				</div>
        <div class="col-md-6 text-left">
          <div class="videoWrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3669.443889756427!2d-47.237076384562265!3d-23.117444784905103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf4cc0bfa7674d%3A0xe7317db96a4b8334!2sAv.+%C3%81rio+Barnab%C3%A9%2C+1083+-+Jardim+Sao+Conrado%2C+Indaiatuba+-+SP%2C+13346-400!5e0!3m2!1spt-BR!2sbr!4v1537535483738" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
