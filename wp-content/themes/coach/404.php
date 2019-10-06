<?php
get_header();
?>
<!-- START banner container -->
<div class="banner internal-banner custom_height" role="banner">
    <div class="container banner-content align-left">
        <div class="banner-caption text-left">
            <h2>404 page not found</h2>
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
                <div class="post-content">
                    <?php
                    while (have_posts()):
                        the_post();
                        the_content();
                    endwhile;
                    ?>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- END Page Content -->

<?php
get_footer();
