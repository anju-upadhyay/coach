<?php
/* Template Name: Service Listing */

get_header();
?>
<!-- START banner container -->
<?php
$backgroundUrl = "";
if (isset(get_post_meta(get_the_ID(), 'hero_background')[0])) {
    $backgroundUrl = get_post_meta(get_the_ID(), 'hero_background')[0]['background-image'];
}
?>
<div class="banner internal-banner custom_height " role="banner" style="background-image:url(<?php echo $backgroundUrl; ?>);">
    <div class="container banner-content align-left">
        <div class="banner-caption text-left">

            <h2>
                <?php
                if (isset(get_post_meta(get_the_ID(), 'hero_title')[0])) {
                    echo get_post_meta(get_the_ID(), 'hero_title')[0];
                } else {
                    echo get_the_title();
                }
                ?>
            </h2>

        </div>
    </div>
</div>
<!-- END banner container -->
<!-- START Page Content -->
<section class="page-content" role="main">
    <div class="container">
        <div class="row">
            <!-- Page content -->
            <div class="col-md-12">
            </div>
        </div>
        <?php
        $args = array('post_type' => array('services'),
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => 1,
            'posts_per_page' => -1,
        );
        $query = new WP_Query($args);



        if ($query->post_count > 0) {
            ?>
            <div class="cpt-listing">
                <?php
                while ($query->have_posts()) {
                    $query->the_post();
                    ?>
                    <!-- START Single CPT -->
                    <article id="lesson-<?php echo get_the_ID(); ?>" class="cpt-single-item post-16 lesson type-lesson status-publish has-post-thumbnail hentry">

                        <div class="row">
                            <!-- CPT Featured Image -->
                            <div class="cpt-thumb col-md-5">
                                <a href="<?php echo get_the_permalink(); ?>">
                                    <img width="480" height="500" src="<?php echo get_the_post_thumbnail_url(); ?>" class="featured-image wp-post-image" alt="" />                                           
                                </a>
                            </div>

                            <!-- CPT Content -->
                            <div class="cpt-content col-md-7">
                                <header class="cpt-title">
                                    <h2><a href="<?php echo get_the_permalink(); ?>" rel="bookmark"><?php echo get_the_title(); ?></a></h2>                                            
                                    <h6><?php echo get_post_meta(get_the_ID(),'service_subtitle')[0]; ?></h6>                                        
                                </header>

                                <div class="cpt-excerpt">
                                    <?php
                                    //service_subtitle 
                                    echo get_the_excerpt();
                                    ?>
                                </div>

                                <!-- CPT Custom Fields -->
                                <div class="row cpt-custom-fields">
                                    <div class="field-block col-md-6 col-sm-6">
                                        <h5 class="cursive-font"><?php echo get_post_meta(get_the_ID(),'other_option_title_1')[0]; ?></h5>
                                        <?php echo get_post_meta(get_the_ID(),'other_option_description_1')[0]; ?>
                                    </div>

                                    <div class="field-block col-md-6 col-sm-6">
                                        <h5 class="cursive-font"><?php echo get_post_meta(get_the_ID(),'other_option_title_2')[0]; ?></h5>
                                        <?php echo get_post_meta(get_the_ID(),'other_option_description_2')[0]; ?>                                     
                                    </div>
                                </div>

                                <br class="clear"/>

                                <div class="row cpt-buttons">
                                    <div class="col-md-6 col-sm-6 cpt-button">
                                        <a href="<?php echo get_the_permalink(); ?>" class="button border">Read More</a>
                                    </div>
                                    <div class="col-md-6 col-sm-6 cpt-button">
                                        <a href="<?php echo get_bloginfo('url') . '/contact'; ?>" class="button border">REQUEST A CONSULTATION</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </article>
                    <!-- END Single CPT -->
                    <?php
                }
                ?>
            </div>
            <?php
        }
        ?>
    </div>
</section>
<!-- END Page Content -->

<?php
get_footer();
?>












