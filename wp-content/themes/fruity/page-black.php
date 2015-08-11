<?php
/*
Template Name: Black
*/
global $rvd_fruity_theme;
get_header(); ?>
<style>
    .ui-footer {
	display: none;
    }
    .black-div {
	text-shadow: none;
    }
    .black-div * {
	text-shadow: none;
    }
    .ui-page {
	height: 500px !important;
    }
</style>
<div class="black-div" style="color: #fff; background: #000; width: 100%; height: 100%; position: absolute !important; top: 0; left: 0;">
    <br><br>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>