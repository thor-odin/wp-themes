<?php get_header(); ?>
	<div class="row">
		<div class="col-sm-12">

<?php
$my_id = 17;
$post_id = get_post($my_id);
$content = $post_id->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]>', $content);
echo $content;
?>
			<?php 
				$args = array('name' => '_alert');
				$posts_from_slug = get_posts( $args );
				$my_post_id = get_post($posts_from_slug[0]);
				echo $my_post_id->post_content;
			?>			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
					get_template_part( 'content', get_post_format() );
					endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div> 
	</div> 
<?php get_footer(); ?>