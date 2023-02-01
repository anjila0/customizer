<?php
function theme_customizer_function($wp_customize)
{
    // for the navigation start=============================
    $wp_customize->add_panel(
        'Header1',
        array(

            'title' => 'header',
            'priority' => 10,

            'capability' => 'edit_theme_options',
        )
    );
    $wp_customize->add_section(
        'Header_section',
        array(
            'title' => 'left heading',
            'priority' => 1,
            'panel' => 'Header1',
        )
    );
    //for leftside main heading===================================
    $wp_customize->add_setting(
        'Header_section_title',
        array(
            'default' => 'All rights reserved ',
            // 'sanitize_callback' => 'sanitize_text_field',

        )
    );
    $wp_customize->add_control(
        'Header_section_title',
        array(
            'type' => 'text',
            'priority' => 10,
            'section' => 'Header_section',
            'label' => 'Copyright text',
            'description' => 'Text put here will be outputted in the footer',
        )
    );

    // starting of new pannel==========================
    $wp_customize->add_panel(
        'site_setting',
        array(

            'title' => 'Site Setting',
            'priority' => 10,

            'capability' => 'edit_theme_options',
        )
    );
    $wp_customize->add_section(
        'banner_section',
        array(
            'title' => 'Banner Section',
            'priority' => 1,
            'panel' => 'site_setting',
        )
    );
    //banner-title==========================
    $wp_customize->add_setting(
        'banner_section_title',
        array(
            'default' => 'All rights reserved ',
            // 'sanitize_callback' => 'sanitize_text_field',

        )
    );
    $wp_customize->add_control(
        'banner_section_title',
        array(
            'type' => 'text',
            'priority' => 10,
            'section' => 'banner_section',
            'label' => 'Banner Title',
            'description' => 'Text put here will be outputted in the footer',
        )
    );
    //banner content==============
    $wp_customize->add_setting(
        'banner_section_content',
        array(
            'default' => 'All rights reserved ',
            // 'sanitize_callback' => 'sanitize_text_field',

        )
    );
    $wp_customize->add_control(
        'banner_section_content',
        array(
            'type' => 'textarea',
            'priority' => 10,
            'section' => 'banner_section',
            'label' => 'Banner Content',
            'description' => 'Text put here will be outputted in the footer',
        )
    );






















    //app demo video
    $wp_customize->add_setting(
        'set_app_demo_vid',
        array(
            'type' => 'theme_mod',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Media_Control(
            $wp_customize,
            'set_app_demo_vid',
            array(
                'label' => __('App demo video', 'vile'),
                'section' => 'banner_section',
                'mime_type' => 'video',
                // Required. Can be image, audio, video, application, text
                'button_labels' => array(
                    // Optional
                    'select' => __('Select File'),
                    'change' => __('Change File'),
                    'default' => __('Default'),
                    'remove' => __('Remove'),
                    'placeholder' => __('No file selected'),
                    'frame_title' => __('Select File'),
                    'frame_button' => __('Choose File'),
                )
            )
        )
    );

    // mobile image========================
    $wp_customize->add_setting(
        'mobile_image',
        array(

            // 'sanitize_callback' => 'sanitize_text_field',

        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'mobile_image',
            array(

                'priority' => 10,
                'section' => 'banner_section',
                'label' => 'mobile_image',

            )
        )
    );

    //add the phone border around the app demo video
    function vilecustomizable_phone_border()
    {
        $phone_border = get_theme_mod('mobile_image');
        if (!empty($phone_border)):
            ?>
            <style type="text/css" id="vilecustomizable-theme-option-css">
                .device[data-device=iPhoneX][data-orientation=portrait][data-color=black]::after {
                    content: "";
                    background-image: url("<?php echo $phone_border ?>");
                }
            </style>
            <?php
        endif;
    }
    add_action('wp_head', 'vilecustomizable_phone_border');















    //banner badge started======================
    $wp_customize->add_setting(
        'banner_badge1',
        array(

            // 'sanitize_callback' => 'sanitize_text_field',

        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'banner_badge1',
            array(

                'priority' => 10,
                'section' => 'banner_section',
                'label' => 'Badge1',

            )
        )
    );
    //banner badge2 started============
    $wp_customize->add_setting(
        'banner_badge2',
        array(

            // 'sanitize_callback' => 'sanitize_text_field',

        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'banner_badge2',
            array(

                'priority' => 10,
                'section' => 'banner_section',
                'label' => 'Badge2',

            )
        )
    );
    //quote section started===============
    $wp_customize->add_section(
        'quote_section',
        array(
            'title' => 'Quote Section',
            'priority' => 1,
            'panel' => 'site_setting',
        )
    );
    $wp_customize->add_setting(
        'quote_section_content',
        array(
            'default' => 'All rights reserved ',
            // 'sanitize_callback' => 'sanitize_text_field',

        )
    );
    $wp_customize->add_control(
        'quote_section_content',
        array(
            'type' => 'textarea',
            'priority' => 10,
            'section' => 'quote_section',
            'label' => 'Quote Content',
            'description' => 'Text put here will be outputted in the footer',
        )
    );
    //logo image=====================
    $wp_customize->add_setting(
        'logo',
        array(

            // 'sanitize_callback' => 'sanitize_text_field',

        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'logo',
            array(

                'priority' => 10,
                'section' => 'quote_section',
                'label' => 'logo',

            )
        )
    );
    //feature section started
    $wp_customize->add_section(
        'feature_section',
        array(
            'title' => 'Feature Title',
            'priority' => 1,
            'panel' => 'site_setting',
        )
    );
    $wp_customize->add_setting(
        'feature_section',
        array(
            'default' => 'All rights reserved ',
            // 'sanitize_callback' => 'sanitize_text_field',

        )
    );
    $wp_customize->add_control(
        'feature_section',
        array(
            'type' => 'text',
            'priority' => 10,
            'section' => 'feature_section',
            'label' => 'Feature Title',
            'description' => 'Text put here will be outputted in the footer',
        )
    );
    $wp_customize->add_setting(
        'feature_section_content',
        array(
            'default' => 'All rights reserved ',
            // 'sanitize_callback' => 'sanitize_text_field',

        )
    );
    $wp_customize->add_control(
        'feature_section_content',
        array(
            'type' => 'textarea',
            'priority' => 10,
            'section' => 'feature_section',
            'label' => 'Feature Content',
            'description' => 'Text put here will be outputted in the footer',
        )
    );
    //!-- Feature item-->
    $wp_customize->add_setting(
        'feature2_section',
        array(
            'default' => 'All rights reserved ',
            // 'sanitize_callback' => 'sanitize_text_field',

        )
    );
    $wp_customize->add_control(
        'feature2_section',
        array(
            'type' => 'text',
            'priority' => 10,
            'section' => 'feature_section',
            'label' => 'Feature Title',
            'description' => 'Text put here will be outputted in the footer',
        )
    );
    $wp_customize->add_setting(
        'feature2_section_content',
        array(
            'default' => 'All rights reserved ',
            // 'sanitize_callback' => 'sanitize_text_field',

        )
    );
    $wp_customize->add_control(
        'feature2_section_content',
        array(
            'type' => 'textarea',
            'priority' => 10,
            'section' => 'feature_section',
            'label' => 'Feature Content',
            'description' => 'Text put here will be outputted in the footer',
        )
    );
    //!-- Feature item-->
    $wp_customize->add_setting(
        'feature3_section',
        array(
            'default' => 'All rights reserved ',
            // 'sanitize_callback' => 'sanitize_text_field',

        )
    );
    $wp_customize->add_control(
        'feature3_section',
        array(
            'type' => 'text',
            'priority' => 10,
            'section' => 'feature_section',
            'label' => 'Feature Title',
            'description' => 'Text put here will be outputted in the footer',
        )
    );
    $wp_customize->add_setting(
        'feature3_section_content',
        array(
            'default' => 'All rights reserved ',
            // 'sanitize_callback' => 'sanitize_text_field',

        )
    );
    $wp_customize->add_control(
        'feature3_section_content',
        array(
            'type' => 'textarea',
            'priority' => 10,
            'section' => 'feature_section',
            'label' => 'Feature Content',
            'description' => 'Text put here will be outputted in the footer',
        )
    );
    //!-- Feature item-->
    $wp_customize->add_setting(
        'feature4_section',
        array(
            'default' => 'All rights reserved ',
            // 'sanitize_callback' => 'sanitize_text_field',

        )
    );
    $wp_customize->add_control(
        'feature4_section',
        array(
            'type' => 'text',
            'priority' => 10,
            'section' => 'feature_section',
            'label' => 'Feature Title',
            'description' => 'Text put here will be outputted in the footer',
        )
    );
    $wp_customize->add_setting(
        'feature4_section_content',
        array(
            'default' => 'All rights reserved ',
            // 'sanitize_callback' => 'sanitize_text_field',

        )
    );
    $wp_customize->add_control(
        'feature4_section_content',
        array(
            'type' => 'textarea',
            'priority' => 10,
            'section' => 'feature_section',
            'label' => 'Feature Content',
            'description' => 'Text put here will be outputted in the footer',
        )
    );
    //App feature section started=============================
    $wp_customize->add_section(
        'Appfeature_section',
        array(
            'title' => 'Appfeature Title',
            'priority' => 1,
            'panel' => 'site_setting',
        )
    );
    $wp_customize->add_setting(
        'Appfeature_section',
        array(
            'default' => 'All rights reserved ',
            // 'sanitize_callback' => 'sanitize_text_field',

        )
    );
    $wp_customize->add_control(
        'Appfeature_section',
        array(
            'type' => 'text',
            'priority' => 10,
            'section' => 'APPfeature_section',
            'label' => 'Appfeature Title',
            'description' => 'Text put here will be outputted in the footer',
        )
    );
    $wp_customize->add_setting(
        'Appfeature_section_content',
        array(
            'default' => 'All rights reserved ',
            // 'sanitize_callback' => 'sanitize_text_field',

        )
    );
    $wp_customize->add_control(
        'Appfeature_section_content',
        array(
            'type' => 'textarea',
            'priority' => 10,
            'section' => 'APPfeature_section',
            'label' => 'Appfeature Content',
            'description' => 'Text put here will be outputted in the footer',
        )
    );
    //Call to action setting started========================== 
    $wp_customize->add_section(
        'Action_section',
        array(
            'title' => ' Action Title',
            'priority' => 1,
            'panel' => 'site_setting',
        )
    );
    $wp_customize->add_setting(
        'Action_section',
        array(
            'default' => 'All rights reserved ',
            // 'sanitize_callback' => 'sanitize_text_field',

        )
    );
    $wp_customize->add_control(
        'Action_section',
        array(
            'type' => 'text',
            'priority' => 10,
            'section' => 'Action_section',
            'label' => ' Action Title',
            'description' => 'Text put here will be outputted in the footer',
        )
    );
    $wp_customize->add_setting(
        'Action2_section',
        array(
            'default' => 'All rights reserved ',
            // 'sanitize_callback' => 'sanitize_text_field',

        )
    );
    $wp_customize->add_control(
        'Action2_section',
        array(
            'type' => 'text',
            'priority' => 10,
            'section' => 'Action_section',
            'label' => ' Action Title',
            'description' => 'Text put here will be outputted in the footer',
        )
    );
    //for Download  
    $wp_customize->add_setting(
        'Download_section',
        array(
            'default' => 'All rights reserved ',
            // 'sanitize_callback' => 'sanitize_text_field',

        )
    );
    $wp_customize->add_control(
        'Download_section',
        array(
            'type' => 'text',
            'priority' => 10,
            'section' => 'Download_section',
            'label' => ' Download Title',
            'description' => 'Text put here will be outputted in the footer',
        )
    );
    //App badge section started=================================
    $wp_customize->add_section(
        'Appbadge_section',
        array(
            'title' => ' Appbadge Title',
            'priority' => 1,
            'panel' => 'site_setting',
        )
    );
    $wp_customize->add_setting(
        'Appbadge_section',
        array(
            'default' => 'All rights reserved ',
            // 'sanitize_callback' => 'sanitize_text_field',

        )
    );
    $wp_customize->add_control(
        'Appbadge_section',
        array(
            'type' => 'text',
            'priority' => 10,
            'section' => 'Appbadge_section',
            'label' => ' Appbadge Title',
            'description' => 'Text put here will be outputted in the footer',
        )
    );
    //copyright section started============
    $wp_customize->add_section(
        'copyright_section',
        array(
            'title' => ' copyright Title',
            'priority' => 1,
            'panel' => 'site_setting',
        )
    );
    $wp_customize->add_setting(
        'copyright_section',
        array(
            'default' => 'All rights reserved ',
            // 'sanitize_callback' => 'sanitize_text_field',

        )
    );
    $wp_customize->add_control(
        'copyright_section',
        array(
            'type' => 'text',
            'priority' => 10,
            'section' => 'copyright_section',
            'label' => ' copyright Title',
            'description' => 'Text put here will be outputted in the footer',
        )
    );
    $wp_customize->add_setting('customizer_repeater_example', array(
        'sanitize_callback' => 'customizer_repeater_sanitize'
    )
    );
    $wp_customize->add_control(new Customizer_Repeater($wp_customize, 'customizer_repeater_example', array(
        'label' => esc_html__('Example', 'customizer-repeater'),
        'section' => 'quote_section',
        'priority' => 1,


        'customizer_repeater_text_control' => true,

        'customizer_repeater_repeater_control' => true
    )));

}
add_action('customize_register', 'theme_customizer_function');
?>