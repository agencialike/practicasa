<style>
	.banner-1{
	background: url("https://images.pexels.com/photos/276651/pexels-photo-276651.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb");
	background-position: absolute;
	 }
	.banner-1 p {
	font-size: 50px;
	font-weight: 800;
	padding: 70px 0px;
	text-align: center;
	color :white;
	text-shadow: 2px 2px #2c3e50;
	}
}

.widgets {
		list-style: none;}
.widget_media_image{
	list-style: none;
}
.widgets img{
		width: 100%;
		height: auto;
		padding: 15px 0px;
		
	}

</style>

<div class="container-fluid" style="padding: 0px;">
	<?php rewind_posts(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="col-xs-12 banner-1" style="position: relative;">
			<p class="col-md-6 col-md-offset-3 col-xs-12"><?php the_title( ); ?></p>
		</div>
		<div class="container" style="padding: 0px;">
			<div class="col-md-8 col-xs-12 styleblog-1" style="padding: 60px;">
				<?php the_content( ); ?>
			</div>
			<div class="col-md-4 col-xs-12 widgets">
				<?php dynamic_sidebar("widgetuno" ); ?>
			</div>
		</div>
	<!-- post -->
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>
</div>