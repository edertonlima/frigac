
<?php get_header(); ?>

	<?php if( have_posts() ){
		while ( have_posts() ) : the_post(); ?>

			<section class="box-section box-section-no-padding">

				<div class="slide-page">
					<div class="item imagem slide-item-height-full" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img-banner-quem-somos.jpg');">
						<!--<div class="container">
							<h2 class="destaque">sabor e textura de<br>manteiga de verdade</h2>
						</div>-->
					</div>
				</div>

			</section>

			<section class="box-section">
				<div class="container">
					<div class="row">
						
						<div class="col-6 align-center">
							<h1 class="destaque cor-cor1"><?php the_title(); ?></h1>
							<p><strong>A Nulu começou com uma inspiração:</strong> como seria oferecer produtos sem nada animal e ainda assim saborosos e saudáveis? Já pensou em entrar no mercado e encontrar algo feito com amor, com novos propósitos, com uma energia especial?</p>

							<p><strong>Assim nossa história foi se transformando, ao estudar laticínios veganos começamos a desenvolver produtos que possam atender a todas pessoas, saborosos, feitos com carinho e respeito.</strong></p>

							<p>Em nossas pesquisas decidimos utilizar a castanha de caju como base de nossos produtos: uma castanha 100% brasileira, que os povos originários utilizavam de diferentes formas na alimentação, cheia de sabor e saúde.</p>

							<p>​Nulu significa <strong>felicidade,</strong> que é exatamente o que sentimos em oferecer para vocês nossos produtos, acreditamos nessa nova alimentação, em uma nova forma de consumo, e em novas empresas.</p>

							<p><strong>Agradecemos a vocês por fazerem parte desse novo mundo conosco!</strong></p>

							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/eu-reciclo-page.png" class="img-single" alt="">

							<p>Nos preocupamos com nosso planeta, com nossos animais, por isso encontramos uma solução para compensar o lixo que produzimos: o <strong>Selo Eu Reciclo.</strong> Ele indica que destinamos recursos para o desenvolvimento e operação de cooperativas de reciclagem, e temos o certiﬁcado de que cumprimos com a <strong>Política Nacional de Resíduos Sólidos.</strong></p>
						</div>
						<div class="col-6 align-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/caju.png" alt="" class="img-single">
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