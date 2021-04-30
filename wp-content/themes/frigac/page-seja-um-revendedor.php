
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
							<h2>Seja um Revendedor</h2>
							<p class="content-reduzido">Cresça conosco vendendor as melhores carnes do sul do Brasil. Preencha o formulário abaixo ou nos ligue para mais informações:</p>

							<div class="ico-contato">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-mobile-verde.svg" alt="">
								<p>+55 (48) 3272.1171</p>
							</div>
						</div>
						
						<div class="col-12">
							<form action="">
								<fieldset class="input">
									<label for="nome">*Nome</label>
									<input type="text" id="nome" name="nome" placeholder="|">
								</fieldset>
								<fieldset class="input">
									<label for="empresa">*Empresa</label>
									<input type="text" id="empresa" name="empresa" placeholder="|">
								</fieldset>
								<fieldset class="input">
									<label for="telefone">*Telefone</label>
									<input type="tel" id="telefone" name="telefone" placeholder="|">
								</fieldset>
								<fieldset class="input">
									<label for="email">*E-mail</label>
									<input type="email" id="email" name="email" placeholder="|">
								</fieldset>
								<fieldset class="input">
									<label for="cidade-estado">*Cidade/Estado</label>
									<input type="text" id="cidade-estado" name="cidade-estado" placeholder="|">
								</fieldset>
								<fieldset class="input">
									<label for="pais">*País</label>
									<input type="text" id="pais" name="pais" placeholder="|">
								</fieldset>
								<fieldset class="input">
									<label for="assunto">*Assunto</label>
									<input type="text" id="assunto" name="assunto" placeholder="|">
								</fieldset>
								<fieldset class="textarea">
									<label for="mensagem">*Mensagem</label>
									<textarea id="mensagem" name="mensagem" placeholder="|"></textarea>
								</fieldset>
								<fieldset class="button">
									<button type="submit" class="btn btn-enviar">Enviar</button>
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