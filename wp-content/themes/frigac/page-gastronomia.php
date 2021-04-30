
<?php get_header(); ?>

	<?php if( have_posts() ){
		while ( have_posts() ) : the_post(); ?>

			<section class="box-section">
				<div class="container">
					<div class="row">
						<div class="col-12 align-center">
							<p>Aqui tem dicas para seu churrasco, receitas para inspirar seu fim de semana e o guia definitivo de como harmonizar nossos produtos com vinhos e cerveja. Conheça:</p>
						</div>
					</div>
				</div>
			</section>

			<section class="box-section box-section-no-padding">
				<div class="slide-page slide-gastronomia">
					<a href="<?php echo get_home_url(); ?>/?cat=1" title="RECEITAS">
						<div class="item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/image-banner-8.jpg');">
							<div class="container">
								<h2 class="tit-areas-gastronomia">RECEITAS</h2>
								<span class="desc-areas-gastronomia">para todas as ocasiões</span>
							</div>
						</div>
					</a>
				</div>
			</section>

			<section class="box-section box-section-no-padding margin-top ">
				<div class="slide-page slide-gastronomia">
					<a href="<?php echo get_home_url(); ?>/?page_id=54">
						<div class="item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/image-banner-9.jpg');">
							<div class="container">
								<h2 class="tit-areas-gastronomia">HARMONIZE</h2>
								<span class="desc-areas-gastronomia">vinhos e cerveja</span>
							</div>
						</div>
					</a>
				</div>
			</section>

			<section class="box-section box-section-no-padding margin-top ">
				<div class="slide-page slide-gastronomia">
					<a href="<?php echo get_home_url(); ?>/?page_id=56">
						<div class="item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/image-banner-2.jpg');">
							<div class="container">
								<h2 class="tit-areas-gastronomia">SEXTOU<br>CHURRAS</h2>
								<span class="desc-areas-gastronomia">dicas e receitas</span>
							</div>
						</div>
					</a>
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