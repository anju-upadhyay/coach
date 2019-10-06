<?php
get_header();
?>
<!-- START banner container -->
<?php 
$backgroundUrl = "";
if(isset(get_post_meta(get_the_ID(), 'hero_background')[0])){
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

    </div>
</section>
<!-- END Page Content -->

<?php
get_footer();
?>












