<div class="container">
	<h1 class="title-m1">Blog</h1>
	<?php rewind_posts(); ?>
	<?php query_posts("" ); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- post -->
	<a href=" <?php the_permalink(); ?>">
	<div class="col-md-3 col-xs-12 seccion-1">
		<figure>
			<?php the_post_thumbnail( ); ?>
		</figure>
		<h1 class="title-s1"> <?php the_title( ); ?></h1>
	</div>
	</a>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>
</div>