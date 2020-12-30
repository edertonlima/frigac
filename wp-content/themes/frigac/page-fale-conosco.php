
<?php get_header(); ?>

	<?php if( have_posts() ){
		while ( have_posts() ) : the_post(); ?>

			<section class="box-section box-section-no-padding">

				<div class="slide-page">
					<div class="item imagem slide-item-height-full" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img-banner-contato.jpg');">
						<!--<div class="container">
							<h2 class="destaque">sabor e textura de<br>manteiga de verdade</h2>
						</div>-->
					</div>
				</div>

			</section>

			<section class="box-section no-padding-bottom">
				<div class="container">
					<div class="row">
						
						<div class="col-12">
							<ul class="ico-single">
								<li class="ico-link">
									<a href="<?php echo get_home_url(); ?>/parcerias">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-parcerias.svg" alt="">
										<span>parcerias</span>
									</a>
								</li>
								<li class="ico-link">
									<a href="<?php echo get_home_url(); ?>/trabalhe-conosco">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-trabalhe-conosco.svg" alt="">
										<span>trabalhe<br>conosco</span>
									</a>
								</li>
							</ul>
						</div>

					</div>
				</div>
			</section>

			<section class="box-section">
				<div class="container">
					<div class="row">
						
						<div class="col-12 align-center">
							<h1 class="destaque cor-cor1"><?php the_title(); ?></h1>
							<p>Em caso de dúvidas ou por busca de mais informações <strong>entre em contato</strong> preenchendo este formulário, ou mande e-mail para <a href="mailto:contato@nulufoods.com.br">contato@nulufoods.com.br</a></p>

							<form action="">
								<fieldset class="input">
									<input type="text" name="nome" placeholder="Nome">
								</fieldset>
								<fieldset class="input">
									<input type="email" name="email" placeholder="E-mail">
								</fieldset>
								<fieldset class="input">
									<input type="tel" name="telefone" placeholder="Telefone">
								</fieldset>
								<fieldset class="input">
									<input type="text" name="assunto" placeholder="Assunto">
								</fieldset>
								<fieldset class="textarea">
									<textarea name="mensagem" placeholder="Mensagem"></textarea>
								</fieldset>
								<fieldset class="button">
									<button type="submit" class="btn enviar">Enviar</button>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</section>

		<?php endwhile;
	} ?>

<?php get_footer(); ?>

<script type="text/javascript">
	$(document).ready(function(){
		
	});
</script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/slick/slick.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

	});
</script>