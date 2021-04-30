	
<div class="col-6">
	<article class="post list-post">

		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php 
				$imagem_array = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
				$imagem = $imagem_array[0];
			?>

			<div class="image-post">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/image-panceta-crocante-list.jpg<?php //echo $imagem; ?>" alt="<?php the_title(); ?>">
			</div>

			<div class="content-post">
				<h3 class="align-center"><?php the_title(); ?></h3>			
			</div>
		</a>

	</article>
</div>