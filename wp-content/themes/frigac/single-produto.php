
<?php get_header(); ?>

	<?php if( have_posts() ){
		while ( have_posts() ) : the_post(); ?>

			<section class="box-section box-section-no-padding">
				<div class="slide-page">
					<div class="item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/image-banner-7.jpg');">
					</div>
				</div>
			</section>


			<section class="box-section produto detalhe-produto">
				<div class="container">
					<div class="row">
						<div class="col-12 align-center">
							<h1><?php the_title(); ?></h1>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
						</div>

						<div class="col-6">
							<div class="content-txt">
								<?php the_content(); ?>
							</div>
						</div>
						<div class="col-6">
							<div class="image-produto">
								<?php 
									$imagem_array = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );
									$imagem = $imagem_array[0];
								?>
								<img src="<?php echo $imagem; ?>" alt="<?php the_title(); ?>">
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="box-section">
				<div class="container">
					<div class="row">
						<div class="col-12 align-center">
							<h2>Conheça mais produtos</h2>
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
		$('.slide-produtos').slick({
			dots: false,
			arrows: true,
			infinite: false,
			speed: 300,
			slidesToShow: 1,
			slidesToScroll: 1,
			variableWidth: true
		});

		/*slide = 0;
		$('#depoimentos .slick-dots li').each(function() {
			imagem = $('#depoimentos .slick-slide[data-slick-index="'+ slide +'"] img').attr('src');
			$('button', this).css('background-image','url('+ imagem +')');
			slide = slide+1;
		});

		// projetos
		$('#projetos').slick({
			dots: true,
			arrows: false,
			infinite: false,
			speed: 300,
			slidesToShow: 3,
			slidesToScroll: 1
		});*/
	});
</script>