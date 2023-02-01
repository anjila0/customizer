<?php get_header(); ?>

<!-- Mashead header-->
<header class="masthead">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <!-- Mashead text and app badges-->
                <div class="mb-5 mb-lg-0 text-center text-lg-start">
                    <h1 class="display-1 lh-1 mb-3">
                        <?php echo get_theme_mod('banner_section_title') ?>
                    </h1>
                    <p class="lead fw-normal text-muted mb-5">
                        <?php echo get_theme_mod('banner_section_content') ?>
                    </p>
                    <div class="d-flex flex-column flex-lg-row align-items-center">
                        <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge"
                                src="<?php echo get_theme_mod('banner_badge1') ?>" alt="..." /></a>
                        <a href="#!"><img class="app-badge" src="<?php echo get_theme_mod('banner_badge2') ?>"
                                alt="..." /></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Masthead device mockup feature-->
                <div class="masthead-device-mockup">
                    <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                <stop class="gradient-start-color" offset="0%"></stop>
                                <stop class="gradient-end-color" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <circle cx="50" cy="50" r="50"></circle>
                    </svg>
                    <svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                            transform="translate(120.42 -49.88) rotate(45)"></rect>
                        <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                            transform="translate(-49.88 120.42) rotate(-45)"></rect>
                    </svg>
                    <svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50" cy="50" r="50"></circle>
                    </svg>
                    <div class="device-wrapper">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen bg-black">
                                <style type="text/css" id="vilecustomizable-theme-option-css">
                                    .device[data-device=iPhoneX][data-orientation=portrait][data-color=black]::after {
                                        content: "";
                                        background-image: url("<?php echo get_theme_mod('mobile_image'); ?>");
                                    }
                                </style>

                                <!-- PUT CONTENTS HERE:-->
                                <!-- * * This can be a video, image, or just about anything else.-->
                                <!-- * * Set the max width of your media to 100% and the height to-->
                                <!-- * * 100% like the demo example below.-->
                                <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%">
                                    <source
                                        src="<?php echo wp_get_attachment_url(get_theme_mod('set_app_demo_vid')); ?>"
                                        type="video/mp4" />
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Quote/testimonial aside-->
<aside class="text-center bg-gradient-primary-to-secondary">
    <?php $customizer_repeater_example = get_theme_mod('customizer_repeater_example', json_encode(array( /*The content from your default parameter or delete this argument if you don't want a default*/)));
    /*This returns a json so we have to decode it*/
    $customizer_repeater_example_decoded = json_decode($customizer_repeater_example);
    foreach ($customizer_repeater_example_decoded as $repeater_item) {

        echo $repeater_item->text;

    } ?>
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xl-8">
                <div class="h2 fs-1 text-white mb-4">
                    <?php echo get_theme_mod('quote_section_content') ?>
                </div>
                <img src="<?php echo get_theme_mod('logo') ?>" alt="..." style="height: 3rem" />
            </div>
        </div>
    </div>
</aside>
<!-- App features section-->
<section id="features">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                <div class="container-fluid px-5">
                    <div class="row gx-5">
                        <div class="col-md-6 mb-5">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="bi-phone icon-feature text-gradient d-block mb-3"></i>
                                <h3 class="font-alt">
                                    <?php echo get_theme_mod('feature_section') ?>
                                </h3>
                                <p class="text-muted mb-0">
                                    <?php echo get_theme_mod('feature_section_content') ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="bi-camera icon-feature text-gradient d-block mb-3"></i>
                                <h3 class="font-alt">
                                    <?php echo get_theme_mod('feature2_section') ?>
                                </h3>
                                <p class="text-muted mb-0">
                                    <?php echo get_theme_mod('feature2_section_content') ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-5 mb-md-0">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="bi-gift icon-feature text-gradient d-block mb-3"></i>
                                <h3 class="font-alt">
                                    <?php echo get_theme_mod('feature3_section') ?>
                                </h3>
                                <p class="text-muted mb-0">
                                    <?php echo get_theme_mod('feature3_section_content') ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="bi-patch-check icon-feature text-gradient d-block mb-3"></i>
                                <h3 class="font-alt">
                                    <?php echo get_theme_mod('feature4_section') ?>
                                </h3>
                                <p class="text-muted mb-0">
                                    <?php echo get_theme_mod('feature4_section_content') ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-lg-0">
                <!-- Features section device mockup-->
                <div class="features-device-mockup">
                    <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                <stop class="gradient-start-color" offset="0%"></stop>
                                <stop class="gradient-end-color" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <circle cx="50" cy="50" r="50"></circle>
                    </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                            transform="translate(120.42 -49.88) rotate(45)"></rect>
                        <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                            transform="translate(-49.88 120.42) rotate(-45)"></rect>
                    </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50" cy="50" r="50"></circle>
                    </svg>
                    <div class="device-wrapper">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen bg-black">
                                <!-- PUT CONTENTS HERE:-->
                                <!-- * * This can be a video, image, or just about anything else.-->
                                <!-- * * Set the max width of your media to 100% and the height to-->
                                <!-- * * 100% like the demo example below.-->
                                <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%">
                                    <source
                                        src="<?php echo wp_get_attachment_url(get_theme_mod('set_app_demo_vid')); ?>"
                                        type="video/mp4" />
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Basic features section-->
<section class="bg-light">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
            <div class="col-12 col-lg-5">
                <h2 class="display-4 lh-1 mb-4">
                    <?php echo get_theme_mod('Appfeature_section') ?>
                </h2>
                <p class="lead fw-normal text-muted mb-5 mb-lg-0">
                    <?php echo get_theme_mod('Appfeature_section_content') ?>
                </p>
            </div>
            <div class="col-sm-8 col-md-6">
                <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle"
                        src="https://source.unsplash.com/u8Jn2rzYIps/900x900" alt="..." /></div>
            </div>
        </div>
    </div>
</section>
<!-- Call to action section-->
<section class="cta">
    <div class="cta-content">
        <div class="container px-5">
            <h2 class="text-white display-1 lh-1 mb-4">
                <?php echo get_theme_mod('Action_section') ?>
                <br />
                <?php echo get_theme_mod('Action2_section') ?>
            </h2>
            <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="https://startbootstrap.com/theme/new-age"
                target="_blank">
                <?php echo get_theme_mod('Download_section') ?>
            </a>
        </div>
    </div>
</section>
<!-- App badge section-->
<section class="bg-gradient-primary-to-secondary" id="download">
    <div class="container px-5">
        <h2 class="text-center text-white font-alt mb-4">
            <?php echo get_theme_mod('Appbadge_section') ?>
        </h2>
        <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
            <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge"
                    src="<?php echo get_theme_mod('banner_badge1') ?>" alt="..." /></a>
            <a href="#!"><img class="app-badge" src="<?php echo get_theme_mod('banner_badge2') ?>" alt="..." /></a>
        </div>
    </div>
</section>

<!-- Footer-->
<footer class="bg-black text-center py-5">
    <div class="container px-5">
        <div class="text-white-50 small">
            <div class="mb-2">&copy; Your Website 2022. All Rights Reserved.</div>
            <a href="#!">Privacy</a>
            <span class="mx-1">&middot;</span>
            <a href="#!">Terms</a>
            <span class="mx-1">&middot;</span>
            <a href="#!">FAQ</a>
        </div>
    </div>
</footer>


<php get_footer(); ?>