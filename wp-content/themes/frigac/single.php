
<?php get_header(); ?>

	<?php if( have_posts() ){
		while ( have_posts() ) : the_post(); ?>

			<section class="box-section box-section-no-padding">

				<div class="slide-page">
					<div class="item imagem slide-item-height-full" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img-banner-single-blog.jpg');">
						<!--<div class="container">
							<h2 class="destaque">sabor e textura de<br>manteiga de verdade</h2>
						</div>-->
					</div>
				</div>

			</section>

			<section class="box-section">
				<div class="container">
					<div class="row">
						
						<div class="col-12 align-center">
							<h1 class="destaque cor-cor2 single-cor2 label-h1">
								<?php the_title(); ?>
								<div>
									<a href="#">estilo de vida</a>
									<span>28 de março</span>
								</div>		
							</h1>
						</div>

						<div class="col-12 content-txt">
							<p>Você sente falta de cuidar de si mesmo no dia a dia? Gostaria de se cuidar e se revitalizar todos os dias relaxando um pouco dos seus compromissos?</p>

							<h4>1. Tome um café da manhã sem pressa</h4>

							<p>Vale a pena acordar mais cedo pra começar seu dia sem pressa, tomar um banho relaxante e um café da manhã nutritivo, com calma, alinhando seus pensamentos e desfrutando desse momento!</p>

							<p>Coloque seu alarme pra dez minutinhos antes e aproveite para nutrir seu corpo e sua mente com sabedoria.</p>

							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-blog-single.jpg" alt="" class="img-single">

							<h4>2. Durma cedo</h4>

							<p>Tente jantar cedo, tomar um chá digestivo e dormir mais cedo.</p>

							<p>Muitos estudos já comprovam que uma boa noite de sono ajuda seu organismo a prevenir várias doenças, a produzir melhor os hormônios, a viver de forma menos estressante.</p>

							<p>Todos sabemos que o ritmo da vida moderna é muito acelerado, e as consequências são devastadoras: ansiedade, pânico, estresse e por aí vai.</p>

							<p>Que tal estabelecer uma nova rotina? Pra você e pra sua família, juntos é mais fácil, conseguir criar um novo hábito que com certeza vai fazer toda a diferença na sua qualidade de vida.</p>

							<h4>3. Beba bastante água</h4>

							<p>Água, o elixir da vida.</p>

							<p>Beber água ajuda a desintoxicar nosso organismo, a melhorar o metabolismo, regula nossa temperatura interna, hidrata nosso corpo, e os benefícios são muitos.</p>

							<p>Mas quanto de nós está acostumado a beber água? </p>

							<p>Se você tem dificuldade de beber porque esquece, aqui abaixo vão algumas dicas pra te ajudar a lembrar de tomar água e criar esse novo hábito até que não saia de casa sem uma garrafinha:</p>

							<p>
								- Coloque alarme no seu celular lembrando de beber.<br>
								- Tenha um copo bem grande sempre cheio ao seu lado, ou uma garrafa cheia pra ir bebendo as poucos.
								- Baixe aplicativos que te ajudem a lembrar de beber e a controlar a quantidade.
							</p>

							<p>Tenho certeza que você vai sentir muita diferença na sua vida quando começar a se hidratar da forma correta, sua digestão vai melhorar, seu sono, e seu dia a dia vai ser muito mais prazeroso.</p>

							<h4>4. Agradeça a sua vida</h4>

							<p>Agradecer é um hábito, que muitas vezes esquecemos. Independente da sua crença, ou de como foi o seu dia, quando nós deitamos a cabeça no travesseiro, não há nada melhor do que agradecer por mais um dia respirando, pelo ar, pela refeição, pelos familiares e por aí vai.</p>

							<p>Quanto mais agradecemos mais valorizamos nossa própria vida, praticando assim o Amor Próprio, vamos começar agora?</p>

							<h4>5. Faça exercício </h4>

							<p>A maior dificuldade das pessoas é ter energia e vontade para se exercitar.</p>

							<p>Começar nem sempre é fácil, muitas vezes vamos ter que nos estimular pra fazer o exercício, mas todos sabemos que no final fica aquela sensação de dever cumprido e um bem estar físico muito grande.</p>

							<p>Vamos nos estimular? </p>

							<p>Pode ser correr ou caminhar na rua, fazer exercícios em casa, dançar, andar de skate ou surfar, o importante é estar em movimento.</p>

							<p><strong>Vamos juntos criar um novo estilo de vida, mais lento, mais consciente, com mais amor próprio e com mais tranquilidade!</strong></p>

						</div>

					</div>
					<div class="row footer-single">

						<div class="col-12 align-center">
							<div class="ico-redes">
								<p class="cor-cor2">Compartilhe com pessoas de interesse!</p>

								<ul>
									<li><a href="" class="ico-social cor-cor2"><span class="ico-linkedin"></span></a></li>
									<li><a href="" class="ico-social cor-cor2"><span class="ico-twitter"></span></a></li>
									<li><a href="" class="ico-social cor-cor2"><span class="ico-facebook"></span></a></li>
									<li><a href="" class="ico-social cor-cor2"><span class="ico-instagram"></span> </a></li>
									<li><a href="" class="ico-social cor-cor2"><span class="ico-whatsapp"></span> </a></li>
								</ul>
							</div>
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