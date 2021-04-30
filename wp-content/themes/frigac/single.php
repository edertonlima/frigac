
<?php get_header(); ?>

	<?php if( have_posts() ){
		while ( have_posts() ) : the_post(); ?>

			<section class="box-section box-section-no-padding">
				<div class="slide-page">
					<?php 
						$imagem_array = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '' );
						$imagem = $imagem_array[0];
					?>
					<div class="item" style="background-image: url('<?php echo $imagem; ?>');">
					</div>
				</div>
			</section>


			<section class="box-section no-padding-bottom post detalhe-post">
				<div class="container">
					<div class="row">
						<div class="col-12 align-center">
							<h1><?php the_title(); ?></h1>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
						</div>
					</div>
				</div>
			</section>

			<section class="box-section no-padding-bottom post detalhe-post">
				<div class="container">
					<div class="row">

						<div class="col-3"></div>
	
							<div class="col-6">
								<article class="produto list-produto">

									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php 
											$imagem_array = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
											$imagem = $imagem_array[0];
										?>

										<div class="image-produto">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-panceta.jpg<?php //echo $imagem; ?>" alt="<?php the_title(); ?>">
										</div>

										<div class="content-produto">
											<h3 class="align-center">PANCETA SUÍNA<?php //the_title(); ?></h3>
											<p class="align-center">
												Peso 00kg
												<br>
												cod. 009
											</p>				
										</div>
									</a>

								</article>
							</div>

						<div class="col-3"></div>

					</div>
				</div>
			</section>

			<section class="box-section post detalhe-post">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="content-txt">
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
							<h2>Mais Receitas</h2>
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