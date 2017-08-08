<div class="col-md-2 col-xs-12 proyectos">
	<?php rewind_posts(); ?>
	<?php query_posts("" ); ?>
	 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- post -->
		<a href="<?php the_permalink(); ?>">
		<h1 style="font-size: 16px; font-weight: 400; padding: 5px 0px;" class="col-xs-12"><?php the_title( ); ?></h1>
		</a>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?> 
	</div>