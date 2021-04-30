
<?php get_header(); ?>

	<section class="box-section">
		<div class="container">
			<div class="row">
				<div class="col-12 align-center">
					<h2><?php single_cat_title(); ?></h2>
					<p>Confira as melhores receitas para a melhor carne suína do Brasil!</p>
				</div>

				<?php if( have_posts() ){
					while ( have_posts() ) : the_post();

						get_template_part( 'content/list-post' );

					endwhile;
				}else{ ?>
					<div class="col-12 align-center">
						<p class="msg-none-post">Nenhuma receita encontrada.</p>
					</div>
				<?php } ?>
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