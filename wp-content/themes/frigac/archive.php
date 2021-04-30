
<?php get_header(); ?>

	<section class="box-section box-section-no-padding">
		<div class="slide-page">
			<div class="item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/image-banner-7.jpg');">
			</div>
		</div>
	</section>


	<section class="box-section">
		<div class="container">
			<div class="row">
				<div class="col-12 align-center">
					<h2><?php single_cat_title(); ?></h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
				</div>

				<?php if( have_posts() ){
					while ( have_posts() ) : the_post();

						get_template_part( 'content/list-produto' );

					endwhile;
				}else{ ?>
					<div class="col-12 align-center">
						<p class="msg-none-post">Nenhum produto encontrado.</p>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>


	<section class="box-section box-section-no-padding">
		<div class="slide-page slide-gastronomia">
			<div class="item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/image-banner-2.jpg');">
				<div class="container">
					<h2>ÁREA <br> GASTRONÔMICA</h2>
					<a href="#">conheça</a>
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

<?php get_footer(); ?>

<script type="text/javascript">
	$(document).ready(function(){
		
	});
</script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/slick/slick.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#depoimentos').slick({
			dots: true,
			arrows: false,
			infinite: false,
			speed: 300,
			slidesToShow: 1,
			slidesToScroll: 1
		});

		slide = 0;
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
		});
	});
</script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/scrollbar/scrollbar.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.scrollbar-dynamic').scrollbar();
	});
</script>