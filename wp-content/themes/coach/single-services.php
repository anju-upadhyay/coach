
<?php
    get_header();
?>
<!-- START banner container -->
<div class="banner internal-banner custom_height " role="banner" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/coach-hero-image-services.jpg);">
    <div class="container banner-content align-left">
        <div class="banner-caption text-left">

            <h2><?php echo get_the_title(); ?></h2>
        </div>
    </div>
</div>
<!-- END banner container -->
<!-- END Banner Container -->


<section class="page-content" role="main">

    <article id="lesson-12" class="cpt-single post-12 lesson type-lesson status-publish has-post-thumbnail hentry" role="article">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- CPT Title -->
                    <header class="cpt-title">
                        <h2><?php   the_title(); ?></h2>                        
                        <h6>Tempus auctor eu, adipiscing elit tortor ipsum vel metus sed parturient.</h6>                   
                    </header>
                </div>
                <div class="clear"></div>
                <div class="col-md-8">

                    <!-- CPT Content -->
                    <div class="cpt-content">

                        <!-- CPT Featured Image -->
                        <div class="cpt-thumb" role="img">
                            <img width="740" height="500" src="<?php echo get_the_post_thumbnail_url(); ?>" class="featured-image wp-post-image" alt="" img-data="http://localhost/themes/coach/wp-content/uploads/sites/17/2017/05/coach-business-planning-home.jpg 740w, http://localhost/themes/coach/wp-content/uploads/sites/17/2017/05/coach-business-planning-home-500x338.jpg 500w, http://localhost/themes/coach/wp-content/uploads/sites/17/2017/05/coach-business-planning-home-370x250.jpg 370w" sizes="(max-width: 740px) 100vw, 740px" />                           
                        </div>


                        <!-- CPT Excerpt -->
                        <div class="cpt-excerpt" role="complementary">
                            <p>Lorem ipsum dolor sit amet donec eget. Et sunt consectetuer maecenas. Ac conubia risus egestas aptent eget mauris sit semper nibh vestibulum vel mattis feugiat aliquam dapibus dolor dolor justo.</p>
                        </div>

                        <!-- CPT Text -->
                        <div class="post-content" role="main">
                            <h5 class="cursive-font">Service Description</h5>
                            <p>
                                Justo mauris a fusce accumsan erat elit odio quam feugiat rutrum nascetur
                                nisl ut tellus ultricies quis blandit sodales nisl dapibus ut mi sapien nec 
                                pellentesque vestibulum vehicula mauris lacus lorem nisl blandit mauris.
                                Nisl risus augue diam libero ligula non amet proin condimentum mi nec quisque 
                                venenatis sodales vivamus non aliquet ac donec consequat semper. 
                                Vivamus nulla nulla vitae lacus eget ipsum rutrum in auctor placerat elementum risus vitae sed nunc. Quisque dui tincidunt in porta sed. Aptent in. Suspendisse vestibulum duis nec leo duis vel malesuada amet. Elit imperdiet 
                                vestibulum sem tristique magnis commodo curabitur placerat justo cursus consequat. Nullam ipsum vitae per scelerisque mauris officiis dictum duis erat duis cras enim. Pede odio vel ac egestas ut tortor dui sapien tortor erat 
                                cras quisque praesent mollis ut id in at adipiscing duis laoreet scelerisque quas nec amet. Natoque ipsum sapien faucibus eget quisque mi sociosqu suscipit commodo. Nunc elit et eu nascetur eget venenatis. Vel vitae non dolor sed gravida tortor in et arcu vivamus 
                                id sit aenean sapien blandit augue tellus. Hendrerit dis at et cupidatat turpis saepe hymenaeos commodo curae.
                            </p>
                            <ul>
                                <li>Quia vestibulum laoreet id litora interdum hac congue</li>
                                <li>Wisi suspendisse feugiat vel nisl dis massa quam ipsum incidunt</li>
                                <li>Enim tempus massa cursus nec scelerisque nullam duis gravida</li>
                                <li>Pharetra bibendum diam ipsum velit quisque cras sodales</li>
                                <li>Ultricies mauris vitae neque libero at nec et scelerisque venenatis</li>
                            </ul>
                        </div>

                    </div>
                </div>
                <!-- Sidebar --->
                <aside class="col-md-4 sidebar primary" role="complementary">
                    <!-- CPT Custom Fields -->
                    <div class="cpt-custom-fields">
                        <div class="field-block">
                            <h5 class="cursive-font">Process</h5>
                            <ul><li>Budget and Milestones
                                </li><li>Pre-Assessment
                                </li><li>Service Implementation</li></ul>                            
                        </div>

                        <div class="field-block">
                            <h5 class="cursive-font">Let us help you</h5>
                            <ul><li>Lorem ipsum the consteur adpscing 
                                </li><li>elitse labore andlre magns aliquenim
                                </li><li>veniam quis nostru ercation ullamco</li></ul>                           
                        </div>
                    </div>

                    <div class="cpt-buttons">
                        <a href="<?php echo get_bloginfo('url'); ?>/contact" class="button border">REQUEST A CONSULTATION</a>
                    </div>

                    <br class="clear" />
                    <br class="clear" />

                    <!-- Sidebar Widgets -->
                    <div id="one_cta_banner-1" class="widget widget_one_cta_banner">
                        <div class="widget_cta_banner" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/coach-get-a-free-consultation.jpg); min-height:460px"><div class="widget_banner_caption" style="margin-bottom: 74px;"><h4>GET A FREE <br />
                                    CONSULTATION <br />
                                    NOW</h4></div><a class="button banner_button" href="#" target="_self">REQUEST A CONSULTATION</a></div>
                    </div>
                </aside>

            </div>
        </div>
    </article>
</section>
<?php
get_footer();




