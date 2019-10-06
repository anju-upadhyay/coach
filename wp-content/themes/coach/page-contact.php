
<?php
/* Template Name: Contact */
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
            <h2>CONTACT<br /> DETAILS</h2>
        </div>
    </div>
</div>
<!-- END banner container -->

<!-- START Page Content -->
<section class="page-content" role="main">

    <article id="page-61" class="post-61 page type-page status-publish has-post-thumbnail hentry">
        <div class="container">
            <div class="row">

                <!-- Featured Image -->
                <div class="col-md-5 page-thumb">
                    <a href="<?php echo get_bloginfo('url'); ?>">
                        <img width="500" height="500" src="<?php echo get_the_post_thumbnail_url(); ?>" class="featured-image wp-post-image" alt="" img-data="" sizes="(max-width: 500px) 100vw, 500px" />                            </a>
                </div>
                <!-- Content -->
                <div class=" col-md-7">

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
    </article>
</section>


<!-- Background Section -->
<section class="section background text-center" id="form_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2>Request a consultation</h2>
                </div>


                <div class="form-container contact-form">
                    <form id="contactForm" class="form text-left" role="form" autocomplete="off">
                        <fieldset>
                            <label>Name *</label>
                            <input type="text" name="user_name" class="input booking_name"  maxlength="120" />
                        </fieldset>
                        <fieldset>
                            <label>Email *</label>
                            <input type="text" name="user_email" class="input booking_email" maxlength="120" />
                        </fieldset>

                        <fieldset>
                            <label>Message *</label>
                            <textarea rows="10" cols="50" name="user_message" class="input booking_msg"></textarea>
                        </fieldset>

                        <fieldset>
                            <input type="hidden" id="_wpnonce" name="_wpnonce" value="<?php echo wp_create_nonce('coach@%52nonce'); ?>" />
                            <input type="button" class="submit button small pull-right" value="SEND MESSAGE" id="contactFormSubmit" name="booking-submit" />
                        </fieldset>

                        <fieldset>
                            <div class="loader" style="display:none;">Please wait..</div>
                            <div class="contact-form-response"></div>
                        </fieldset>
                    </form>
                </div>


            </div>
        </div>
    </div>
    <style>
        #form_section{background-color:#d9d3c7;background-repeat:no-repeat;background-position:right center;background-size:100% auto;background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/coach-leave-a-message.png);}            
    </style>
</section>

<!--Map Section -->
<section class="section solid white text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h2><?php echo get_post_meta(get_the_ID(), 'location_heading')[0]; ?></h2>
                </div>

                <div class="section-content">
                    <p><?php echo get_post_meta(get_the_ID(), 'location_description')[0]; ?></p>
                    <div class="map">
                        <p><?php echo get_post_meta(get_the_ID(), 'location_map')[0]; ?></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- END Page Content -->


<?php
get_footer();
