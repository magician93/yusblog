<?php
	global $post;
	$bcs = array(($post?$post->ID:null)); //array should have null if no post
	$curr_post = get_page($post->ID);
	if (!is_single()) {
		while ($parent_id=(isset($curr_post->post_parent)?$curr_post->post_parent:"")) {
			$bcs[] = $parent_id;
			$curr_post = get_page($parent_id);
		}
	} else {
		$curr_post = get_page(get_the_ID());
		$post_type = get_post_type($curr_post);
		$post_type_label = "";
		switch($post_type) {
			case "news_events":
				$post_type_label = "News & Events";
				break;
			case "portfolio":
				$post_type_label = "Portfolio";
				break;
			case "products_services":
				$post_type_label = "Products & Services";
				break;
			case "videos":
				$post_type_label = "Videos";
				break;
			default:
				$post_type_label = "Post";
		}
		$bcs[] = $post_type_label;
	}
	$bcs = array_reverse($bcs);
?>

	
<div class="bread-crumb">
	<ul class="crumbs">
	    <li><a data-transition="pop" href="<?php echo home_url(); ?>"> <i class="icon-home" style="color: #fff; font-size: 17px;"></i> </a></li>
	    <?php foreach($bcs as $idx=>$bc) {?>
		<?php if ($idx != count($bcs)-1) {?>
			<?php if (is_numeric($bc)) {?>
		<li><a data-transition="pop" href="<?php echo get_permalink($bc); ?>"><span><?php echo get_page($bc)->post_title;?></span></a></li>
			<?php }else{?>
		<li><span><?php echo $bc ?></span></li>
			<?php }?>
		<?php }else{?>
		<li><span><?php wp_title(""); ?></span></li>
		<?php }?>
	    <?php }?>
	</ul>
</div>