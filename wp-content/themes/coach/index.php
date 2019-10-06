<?php
// Include header
get_header();
?>

<!-- START banner container -->
<section class="banner home-banner custom_height " role="banner" style="background-image:url('<?php echo ot_get_option('home_page_banner_image')['background-image']; ?>');">
    <div class="container banner-content  align-center">
        <div class="banner-caption text-center">
            <?php
            // banner Title
            if (!empty(ot_get_option('home_page_banner_title'))):
                echo ot_get_option('home_page_banner_title');
            endif;

            // banner SubTitle
            if (!empty(ot_get_option('home_page_banner_title'))):
                ?>
                <div class="sub-title cursive-font"><?php echo ot_get_option('home_page_banner_subtitle'); ?></div>
                <?php
            endif;
            // banner Button
            if (!empty(ot_get_option('home_page_banner_button_text'))):
                ?>
                <div class="banner-button">
                    <p><a class="button" href="<?php echo get_the_permalink(ot_get_option('home_page_banner_button_link')); ?>"><?php echo ot_get_option('home_page_banner_button_text'); ?></a></p>
                </div>
                <?php
            endif;
            ?>
        </div>
    </div>
</section>
<!-- END banner container -->

<!--- START White-Solid Section --->
<section class="section solid white-bg text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                // Success stories title
                if (!empty(ot_get_option('home_page_success_stories_title'))):
                    ?>
                    <div class="section-title">
                        <h2>
                            <?php echo ot_get_option('home_page_success_stories_title'); ?>
                        </h2>
                    </div>
                    <?php
                endif;

                // Success stories description
                if (!empty(ot_get_option('home_page_success_stories_description'))):
                    ?>
                    <div class="section-content">
                        <?php echo ot_get_option('home_page_success_stories_description'); ?>
                    </div>
                <?php endif; ?>

                <div class="section-columns">
                    <div class="row">
                        <!--home_page_success_stories_service_3-->
                        <?php
                        for ($service_count = 1; $service_count <= 3; $service_count++):
                            if (!empty(ot_get_option('home_page_success_stories_service_' . $service_count))):
                                ?>
                                <div class="col-md-4 cpt-col">
                                    <div class="cta-block">
                                        <div class="cta-banner">
                                            <img width="370" height="250" src="<?php echo get_the_post_thumbnail_url(ot_get_option('home_page_success_stories_service_' . $service_count)); ?>" class="attachment-lesson_thumb size-lesson_thumb wp-post-image" alt="" img-data="http://localhost/themes/coach/wp-content/uploads/sites/17/2017/05/coach-personal-mentorship-home-370x250.jpg 370w, http://localhost/themes/coach/wp-content/uploads/sites/17/2017/05/coach-personal-mentorship-home-500x338.jpg 500w, http://localhost/themes/coach/wp-content/uploads/sites/17/2017/05/coach-personal-mentorship-home.jpg 740w" sizes="(max-width: 370px) 100vw, 370px" />
                                        </div>
                                        <div class="cta-content">
                                            <h3 class="cursive-font"><?php echo get_the_title(ot_get_option('home_page_success_stories_service_' . $service_count)); ?></h3>
                                            <p><?php echo get_metadata(ot_get_option('home_page_success_stories_service_' . $service_count), 'service_subtitle')[0]; ?></p>
                                            <a href="<?php echo get_the_permalink(ot_get_option('home_page_success_stories_service_' . $service_count)); ?>" class="button inline border">PROJECT DETAILS</a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            endif;
                        endfor;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--- END White-Solid Section --->

<!--- START Features Section --->
<section class="section background text-white text-center" style="background-image: url('<?php echo ot_get_option('home_page_my_work_background_image')['background-image']; ?>');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php
                // My work process title
                if (!empty(ot_get_option('home_page_my_work_process_title'))):
                    ?>
                    <div class="section-title">
                        <h2><?php echo ot_get_option('home_page_my_work_process_title'); ?></h2>
                    </div>
                    <?php
                endif;

                // My work process description
                if (!empty(ot_get_option('home_page_my_work_process_description'))):
                    ?>
                    <div class="section-content">
                        <?php echo ot_get_option('home_page_my_work_process_description'); ?>              
                    </div>
                    <?php
                endif;

                // My work process features
                $features = ot_get_option('home_page_my_work_process_features');
                ?>

                <div class="section-features">
                    <div class="row">
                        <?php
                        if (!empty($features)):
                            $loop_count = 1;
                            $text_class = 'text-right';

                            foreach ($features as $feature):
                                $feature_title = !empty($feature['title']) ? $feature['title'] : '';
                                $feature_description = !empty($feature['description']) ? $feature['description'] : '';

                                if ($loop_count % 2 == 0):
                                    $text_class = 'text-left';
                                else:
                                    $text_class = 'text-right';
                                endif;
                                ?>
                                <!-- Feature Box -->
                                <div class="col-md-6 feature-box <?php echo $text_class; ?>">
                                    <div class="feature-image">
                                        <?php if (!empty($feature['image'])): ?>
                                            <img src="<?php echo $feature['image']; ?>"/>
                                        <?php endif; ?>
                                    </div>

                                    <div class="feature-text">
                                        <h4 class="cursive-font feature-heading"><?php echo $feature_title; ?></h4>
                                        <p><?php echo $feature_description; ?></p>
                                    </div>
                                </div>
                                <?php
                                $loop_count++;
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
                <?php if (!empty(ot_get_option('home_page_my_work_button_text')) && !empty(ot_get_option('home_page_my_work_process_button_link'))):
                    ?>
                    <div class="section-button">
                        <a href="<?php echo get_the_permalink(ot_get_option('home_page_my_work_process_button_link')); ?>" class="button"><?php echo ot_get_option('home_page_my_work_button_text'); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!--- END Features Section --->

<!--- START BG Section --->
<section class="section background text-center text-dark" id="app_section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                if (!empty(ot_get_option('home_page_how_can_i_help_title'))):
                    ?>
                    <div class="section-title">
                        <h2><?php echo ot_get_option('home_page_how_can_i_help_title'); ?></h2>
                    </div>
                <?php endif; ?>
                <?php
                if (!empty(ot_get_option('home_page_how_can_i_help_description'))):
                    ?>
                    <div class="section-content">
                        <?php echo ot_get_option('home_page_how_can_i_help_description'); ?>                       
                    </div>
                <?php endif; ?>
                <?php
                if (!empty(ot_get_option('home_page_how_can_i_help_button_link')) && !empty(ot_get_option('home_page_how_can_i_help_button_text'))):
                    ?>
                    <div class="section-button">
                        <a href="<?php echo get_permalink(ot_get_option('home_page_how_can_i_help_button_link')); ?>" class="button transparent border"><?php echo ot_get_option('home_page_how_can_i_help_button_text'); ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <style>
        #app_section{background-color:#d9d3c7;background-repeat:no-repeat;background-position:-348px 0px;background-size:auto 100%;background-image:url('<?php if (!empty(ot_get_option('home_page_how_can_we_help_background_'))):  echo ot_get_option('home_page_how_can_we_help_background_')['background-image']; endif; ?>');}            
    </style>
</section>
<!--- END BG Section --->


<!--- START Testimonial Section --->
<section class="section background text-white text-center"
         style="background-image: url('<?php if (!empty(ot_get_option('home_page_what_clients_say_background_image'))): echo ot_get_option('home_page_what_clients_say_background_image'); endif; ?>')">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="testimonials">
                    <span class="icon"></span>
                    <?php
                    if (!empty(ot_get_option('home_page_what_clients_say_title'))):
                    ?>
                    <div class="section-title">
                        <h2><?php echo ot_get_option('home_page_what_clients_say_title'); ?></h2>
                    </div>
                    <?php endif; ?>

                    <div class="testimonials-row">

                        <div class="testimonial">
                            <?php
                            if (!empty(ot_get_option('home_page_what_clients_say_content'))):
                                ?>
                                <blockquote><?php echo ot_get_option('home_page_what_clients_say_content'); ?></blockquote>
                            <?php endif; ?>
                            <?php
                            if (!empty(ot_get_option('home_page_what_clients_say_name'))):
                                ?>
                                <cite class="cursive-font"><?php echo ot_get_option('home_page_what_clients_say_name'); ?></cite>
                            <?php endif; ?>
                        </div>
                    </div>                
                </div>
            </div>
        </div>
    </div>
</section>
<!--- END Testimonial Section --->


<!--- START Newsletter Section --->
<section class="section solid white text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                if (!empty(ot_get_option('home_page_grow_up_your_business_title'))):
                    ?>
                    <div class="section-title">
                        <h2><?php echo ot_get_option('home_page_grow_up_your_business_title'); ?></h2>
                    </div>
                <?php endif; ?>
                <?php
                if (!empty(ot_get_option('home_page_grow_up_your_business_description'))):
                    ?>
                    <div class="section-content">
                        <?php echo ot_get_option('home_page_grow_up_your_business_description'); ?>

                    </div>
                <?php endif; ?>
                <div class="form-container newsletter-form">

                    <form id="subscribeForm" name="subscribe_form" class="form text-center" autocomplete="off">
                        <fieldset>
                            <input type="text" name="subscribe_email" class="input sub_email" placeholder="Please enter your email."/>
                        </fieldset>
                        <fieldset>
                            <input type="hidden" id="_wpnonce" name="_wpnonce" value="<?php echo wp_create_nonce('subscribeCoach@%52nonce'); ?>" />
                            <input type="button" class="submit button small dark pull-right" value="Subscribe" id="subscribeFormSubmit" name="newsletter-submit"/>
                        </fieldset>
                        <div class="subscribe-response"></div>
                        <div class="subscribe-form-response"></div>
                    </form>

                </div>

            </div>
        </div>
    </div>
</section>
<!--- END Newsletter Section --->

<?php
// Include footer
get_footer();
