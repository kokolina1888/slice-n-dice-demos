<?php get_header();?>
<!-- content -->
<div id="content">
	<div class="container">
		<div class="wrapper">
			<?php get_sidebar('left-sidebar');?>
			<?php 
			if( have_posts() ):
				while( have_posts() ):
					the_post();
			?>
					<h2><?php the_title(); ?></h2>
					<p>
					<?php the_content(); ?>
					</p>
					<?php 
				endwhile;
				endif;	
					?>
		</div>
	</div>
</div>
<?php get_footer();?>