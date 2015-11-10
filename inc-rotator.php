<?php $home = new WP_Query( array( 'pagename' => 'test') ); ?>
<?php $home->the_post(); ?>
<style type="text/css">
  #parallax-bg { display:none; }
  #masthead {
    margin-bottom: 0;
  }
  .inner-wrap { max-width:100%;}

</style>
<?php if( get_field('slides') ) { ?>
<div class="rotator js-rotator">
	<div id="js-rotator" class="owl owl-theme">
	<?php
		while ( the_repeater_field('slides') ) {
			$img = get_sub_field('slide_image');
			$title = get_sub_field('slide_title');
	?>
		<?php // If slide is a link ?>
		<?php if(get_sub_field('slide_link')) { ?>
		<a href="<?php echo get_sub_field('slide_link'); ?>" title="<?php echo $title; ?>" target="_blank"><img src="<?php echo $img; ?>" alt="<?php echo $title; ?>" class="img-full"></a>

		<?php // If slide is a video ?>
		<?php } elseif(get_sub_field('slide_youtube_id')) { ?>
		<div>
			<a href="<?php echo get_sub_field('slide_youtube_id'); ?>" title="<?php echo $title; ?>" class="js-video-anchor"><img src="<?php echo $img; ?>" alt="<?php echo $title; ?>" class="img-full">
			</a>
			<div class="js-slide-video slide-video"></div>
		</div>

		<?php // If slide is just an image ?>
		<?php } else { ?>
		<img src="<?php echo $img; ?>" alt="<?php echo $title; ?>" class="img-full">
		<?php } ?>
	<?php } ?>
	</div>
</div>
<?php } ?>
<?php wp_reset_query();  ?>
