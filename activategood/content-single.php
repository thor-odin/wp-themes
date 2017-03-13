<div class=content-single-header>
	<h1><?php the_title(); ?></h1>
	<p><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
</div>
<div class="row">
	<div class="col-xs-8">
		<?php if ( has_post_thumbnail() ) { 
			$post_thumbnail_id = get_post_thumbnail_id();
            $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );?>
				<img src="<?php echo $post_thumbnail_url; ?>" class="img-responsive" alt="Responsive image">
		<?php } ?>
		<?php the_content(); ?>
	</div>
	<div class="col-xs-3 col-md-offset-1 blog-sidebar">
		<h4>Misc stuff go here</h4>
	</div>
</div>