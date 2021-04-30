	
<div class="col-6">
	<article class="produto list-produto">

		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php 
				$imagem_array = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
				$imagem = $imagem_array[0];
			?>

			<div class="image-produto">
				<img src="<?php echo $imagem; ?>" alt="<?php the_title(); ?>">
			</div>

			<div class="content-produto">
				<h3 class="align-center"><?php the_title(); ?></h3>
				<p class="align-center">
					Venda por peso
					<br>
					cod. 001
				</p>				
			</div>
		</a>

	</article>
</div>