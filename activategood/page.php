<?php get_header(); ?>
	<div class="row">
		<div class="col-xs-12 col-md-8 col-md-offset-2">		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );
					endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div> 
	</div> 
<?php get_footer(); ?>