
<?php get_header(); ?>

	<?php if( have_posts() ){
		while ( have_posts() ) : the_post(); ?>

			<section class="box-section box-section-no-padding">
				<div class="slide-page">
					<div class="item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/image-banner-4.jpg');">
					</div>
				</div>
			</section>

			<section class="box-section">
				<div class="container">
					<div class="row">
						<div class="col-12 align-center">
							<h2>Fale Conosco</h2>
							<p class="content-reduzido">Entre em contato para esclarecer suas dúvidas ou obter mais informações</p>

							<div class="ico-contato">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-mobile-verde.svg" alt="">
								<p>+55 (48) 3272.1171</p>
							</div>

							<a href="<?php echo get_home_url(); ?>/seja-um-revendedor" class="btn btn-page" title="Seja um Revendedor">Seja um Revendedor</a>
							<a href="<?php echo get_home_url(); ?>/trabalhe-conosco" class="btn btn-page" title="Trabalhe Conosco">Trabalhe Conosco</a>
						</div>
					</div>
				</div>
			</section>

			<section class="box-section">
				<div class="container">
					<div class="row">
						<div class="col-12 align-center">
							<h2>Onde Encontrar</h2>
							<p class="content-reduzido">Confira onde você pode encontrar nossos produtos</p>

							<a href="<?php echo get_home_url(); ?>/onde-encontrar" class="btn btn-page" title="Nos encontre">Nos encontre</a>
						</div>
					</div>
				</div>
			</section>

			<!--<section class="box-section no-padding-bottom">
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
			</section>-->

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