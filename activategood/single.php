<?php get_header(); ?>
	<div class="row">
		<div class="col-sm-12">		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content-single', get_post_format() );
					endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div> 
	</div> 
<?php get_footer(); ?>