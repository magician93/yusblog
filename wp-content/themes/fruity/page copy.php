<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header(); ?>
		<div data-role="header" data-position="fixed">
			<div class="left">
			    <a href="#" class="showMenu menu-button"><img src="images/menu-button.png" width="40" /></a>
			</div>
			<h1><p>Fruity</p></h1>
		</div>
		<div class="header-shadow"></div>
		<div data-role="content" data-theme="a" class="minus-shadow">
			
		

<!-- cherry slider here-->


			<div class="white-content-box">
			    <h1 class="center">Welcome to <span>Fruity</span></h1>
			    <p class="center  ipad-width-optimize">A creative and professional approach to deliver your message. Show off your content with class and style with this new Klassio template.</p>
			</div>
			<br/>
			<div class="content-margin">
			    <br/>
			    <ul class="column-split flexible-column">
				<li>
					<p class="center right-padding">
					    <img src="images/content/responsive.png" width="48" />
					    <br/>
					    <strong>Responsive Design</strong>
					    <br/>
					    Leverage your goal with this fresh and innovative mobile template, get noticed uniquely.
					</p>
				</li>
				<li>
					<p class="center left-padding">
					    <img src="images/content/retina-clarity.png"  width="48" />
					    <br/>
					    <strong>Retina Clarity</strong>
					    <br/>
					    Leverage your goal with this fresh and innovative mobile template, get noticed uniquely.
					</p>
				</li>
				<li>
					<p class="center right-padding">
					    <img src="images/content/customizable.png"  width="48" />
					    <br/>
					    <strong>Flexible Theming</strong>
					    <br/>
					    Leverage your goal with this fresh and innovative mobile template, get noticed uniquely.
					</p>
				</li>
				<li>
					<p class="center left-padding">
					    <img src="images/content/in-motion.png" width="48" />
					    <br/>
					    <strong>In Motion</strong>
					    <br/>
					    Leverage your goal with this fresh and innovative mobile template, get noticed uniquely.
					</p>
				</li>
			    </ul>
			    <div class="clear"></div>
			    <br/>
			</div>
		</div>


<div id="pagecontainer">
    	<div id="header" class="black_gradient">
            <a href="<?php echo home_url(); ?>" class="back_button black_button"><?php $rvd_fruity_theme->option('home_button'); ?></a>
            <div class="page_title"><?php $rvd_fruity_theme->option('header_text'); ?></div>
            <a href="#" id="menu_open" class="black_button"><?php $rvd_fruity_theme->option('menu_button'); ?></a>
            <a href="#" id="menu_close" class="black_button"><?php $rvd_fruity_theme->option('close_button'); ?></a>
            <div class="clear"></div>
        </div>    
    	<div id="pages_nav">
            <div class="icons_nav">
                <ul class="slides">
					<?php
					$count = 1;
					query_posts(array( 'post_type' => 'icons_menu', 'orderby' => 'menu_order', 'order' => 'ASC', 'showposts' => '999')); ?>
                    <?php $postsnr = $wp_query->found_posts; ?>
                    <?php if (have_posts()) : ?>
                    <li>
                    <?php while (have_posts()) : the_post(); ?>
                    <a href="<?php echo get_post_meta($post->ID, "menu_item_url", $single = true); ?>" class="icon"><?php the_post_thumbnail('menu-icon-size'); ?><span><?php the_title(); ?></span></a>
                    <?php if ($postsnr > 4 && $count == 4){ ?>
                    </li><li>
                    <?php } if ($postsnr > 8 && $count == 8){ ?>
                    </li><li>
                    <?php } ?>
                    <?php $count++; endwhile; ?>
					</li>
                    <?php if ($postsnr < 4 || $postsnr == 4){ ?>
                    <li></li>
                    <?php } ?>
					<?php endif; ?>
                </ul>
          </div>
      </div>
        
      <?php wp_reset_query(); ?>
   	  <div class="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<h1><?php the_title(); ?></h1>
        
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			</div>

		<?php endwhile; endif; ?> 
        
	 <?php if($rvd_fruity_theme->get_option('show_widget_area_2') == 'enable') {
     if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Archive widget area') ) : ?>
     <h2>You can add widgets here from Admin->Appearance->Widgets <br /> Enable or Disable this widget area from Theme Options -> Widgets</h2>
    <?php endif; } else {}?>  
        
      <div class="clear"></div>  
      </div>  

<?php get_footer(); ?>  

</div>


