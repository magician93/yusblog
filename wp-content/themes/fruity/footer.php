<?php global $rvd_fruity_theme; ?>
    <?php if ( is_active_sidebar("primary-widget-area") ) {?>
    <div class="widgets-sidebar white-content-box">
        <?php dynamic_sidebar( "primary-widget-area" ); ?>
    </div>
    <?php }?>
        <div data-position="fixed" data-role="footer">
            <div style="height: 34px !important; overflow: hidden; ">
                <?php if (!is_front_page()) get_template_part("part-breadcrumbs"); ?>
                <p style="float: right;"><?php $rvd_fruity_theme->option('footer_text'); ?><span>&nbsp;&nbsp;<a class="scroll-to-top"><i class="icon-arrow-up"></i></a>&nbsp;&nbsp;</span></p>
            </div>
        
        </div>
</div><!-- /page -->
<!-- start -->
<?php wp_footer(); ?>
<!-- end -->
<?php $rvd_fruity_theme->option('analytics_code'); ?>
</body>
</html>