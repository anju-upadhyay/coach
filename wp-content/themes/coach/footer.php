<!-- Footer markup here --->
<footer id="site-footer" role="footer">
    <div class="footer-widgets">
        <div class="container">
            <div class="row flex-row ">
                <?php 
                // Footer Section One
                if(!empty(ot_get_option('footer_section_one'))): ?>
                    <div class="col-lg-4 col-md-6 flex-column">
                        <div id="one_footer_logo-2" class="widget widget_one_footer_logo">
                            <?php echo ot_get_option('footer_section_one'); ?>
                        </div>
                    </div>
                    <?php 
                endif;
                
                // Footer Section Two
                if(!empty(ot_get_option('footer_section_two'))): ?>
                    <div class="col-lg-4 col-md-6 flex-column">
                        <div id="recent-posts-4" class="widget widget_recent_entries">		
                            <?php echo ot_get_option('footer_section_two'); ?>
                        </div>
                    </div>
                    <?php 
                endif;
                
                // Footer Section Three
                if(!empty(ot_get_option('footer_section_three'))): ?>
                    <div class="col-lg-4 col-md-6 flex-column">
                        <div id="one_footer_address-2" class="widget widget_one_footer_address">
                            <?php echo ot_get_option('footer_section_three'); ?>
                        </div>
                    </div>
                    <?php 
                endif; 
                ?>
            </div>
        </div>
    </div>
    
    <?php 
    // Copyright
    if(!empty(ot_get_option('footer_copyright_section'))): ?>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php echo ot_get_option('footer_copyright_section'); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php 
    endif; 
    ?>
    
</footer>


</div>
<!-- END Page Wrapper -->

<!--- START Mobile Menu --->
<div id="sticky_menu_wrapper" class="mobile-only">
    <div id="sticky_menu" class="menu">
        <?php
        // Mobile menus
        wp_nav_menu(array(
            'menu' => 3,
            'theme_location' => '',
            'container' => false,
                //'container_class' => 'menu'
        ));
        ?>
    </div>
    <div class="sticky_menu_collapse"><i></i></div>
</div>

<?php wp_footer(); ?>

</body>
</html>