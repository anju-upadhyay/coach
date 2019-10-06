
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

    <div class="col-md-12">
        <div class="post-content">
            <?php
            while (have_posts()):
                the_post();
                the_content();
            endwhile;
            ?>

        </div>
    </div>


</section>
<?php
get_footer();




