
<?php get_header(); ?>

	<?php if( have_posts() ){
		while ( have_posts() ) : the_post(); ?>

			<section class="box-section box-section-no-padding">
				<div class="slide-page">
					<div class="item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/image-banner-3.jpg');">
					</div>
				</div>
			</section>

			<section class="box-section">
				<div class="container">
					<div class="row">
						<div class="col-12 align-center">
							<h2><?php the_title(); ?></h2>
						</div>
						<div class="col-12">
							<div class="content-txt align-justify">
								<?php the_content(); ?>
							</div>
						</div>					
					</div>
				</div>
			</section>

			<section class="box-section">
				<div class="container">
					<div class="row">
						<div class="col-12 align-center">
							<h2>Fale Conosco</h2>
							<p class="content-reduzido">Entre em contato para esclarecer suas dúvidas ou obter mais informações</p>

							<a href="<?php echo get_home_url(); ?>/seja-um-revendedor" class="btn btn-page" title="Seja um Revendedor">Seja um Revendedor</a>
							<a href="<?php echo get_home_url(); ?>/trabalhe-conosco" class="btn btn-page" title="Trabalhe Conosco">Trabalhe Conosco</a>
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