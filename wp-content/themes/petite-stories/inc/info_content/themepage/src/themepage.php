<?php
defined("ABSPATH") || exit();

require(trailingslashit(get_template_directory()) . 'inc/info_content/themepage/config.php');
$sptConfig = new SuperbInfoContentConfig();
$user = wp_get_current_user();
$theme = wp_get_theme();
$parent_name = is_child_theme() ? wp_get_theme($theme->Template) : '';
$theme_name = is_child_theme() ? $theme . " " . __("and", "petite-stories") . " " . $parent_name : $theme;
$demo_text = is_child_theme() ? sprintf(__("Need inspiration? Take a moment to view our theme demo for the %s parent theme %s!", "petite-stories"), $theme, $parent_name) : __("Need inspiration? Take a moment to view our theme demo!", "petite-stories");
$premium_text = is_child_theme() ? sprintf(__("Unlock all features by upgrading to the premium edition of %s and its parent theme %s.", "petite-stories"), $theme, $parent_name) : sprintf(__("Unlock all features by upgrading to the premium edition of %s.", "petite-stories"), $theme);
?>
<div class="wrap">

    <div class="spt-theme-settings-wrapper">
        <div class="spt-theme-settings-wrapper-main-content">

            <div class="spt-theme-settings-wrapper-main-content-section">
                <div class="spt-theme-settings-wrapper-main-content-section-top">
                    <span class="spt-theme-settings-headline"><?php esc_html_e("Customize Settings", "petite-stories"); ?></span>
                    <a class="spt-theme-settings-headline-link" href="<?php echo esc_url(admin_url('customize.php'))  ?>"><?php esc_html_e("Go To Customizer", "petite-stories"); ?></a>
                </div>

                <div class="spt-theme-settings-content">

                    <div class="spt-theme-settings-content-getting-started-wrapper">
                        <div class="spt-theme-settings-content-item">
                            <div class="spt-theme-settings-content-item-header">
                                <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/info_content/themepage/src/icons/list-bullets.svg'); ?>" />
                                <div class="spt-theme-settings-content-item-headline">
                                    <?php esc_html_e("Add Menus", "petite-stories"); ?>
                                </div>
                                <p><?php esc_html_e("Add a navigation to your website to improve the user experience.", "petite-stories"); ?></p>
                            </div>
                            <div class="spt-theme-settings-content-item-content">
                                <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('nav-menus.php'))  ?>"><?php esc_html_e("Go to menus", "petite-stories"); ?></a>
                            </div>
                        </div>

                        <div class="spt-theme-settings-content-item">
                            <div class="spt-theme-settings-content-item-header">
                                <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/info_content/themepage/src/icons/squares-four.svg'); ?>" />
                                <div class="spt-theme-settings-content-item-headline">
                                    <?php esc_html_e("Add Widgets", "petite-stories"); ?>
                                </div>
                                <p><?php esc_html_e("Add content to the sidebar and other widget areas.", "petite-stories"); ?></p>
                            </div>
                            <div class="spt-theme-settings-content-item-content">
                                <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('widgets.php'))  ?>"><?php esc_html_e("Go to widgets", "petite-stories"); ?></a>
                            </div>
                        </div>

                        <div class="spt-theme-settings-content-item">
                            <div class="spt-theme-settings-content-item-header">
                                <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/info_content/themepage/src/icons/paint-brush.svg'); ?>" />
                                <div class="spt-theme-settings-content-item-headline">
                                    <?php esc_html_e("Customize Design", "petite-stories"); ?>
                                </div>
                                <p><?php esc_html_e("Customize your website design to fit your personality or brand.", "petite-stories"); ?></p>
                            </div>
                            <div class="spt-theme-settings-content-item-content">
                                <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('customize.php')) ?>"><?php esc_html_e("Go to customizer", "petite-stories"); ?></a>
                            </div>
                        </div>

                        <div class="spt-theme-settings-content-item">
                            <div class="spt-theme-settings-content-item-header">
                                <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/info_content/themepage/src/icons/text-a-underline.svg'); ?>" />
                                <div class="spt-theme-settings-content-item-headline">
                                    <?php esc_html_e("Change Site Title", "petite-stories"); ?>
                                </div>
                                <p><?php esc_html_e("Add your website name and tagline to improve the design and SEO.", "petite-stories"); ?></p>
                            </div>
                            <div class="spt-theme-settings-content-item-content">
                                <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('customize.php')) ?>"><?php esc_html_e("Go to customizer", "petite-stories"); ?></a>
                            </div>
                        </div>

                        <div class="spt-theme-settings-content-item">
                            <div class="spt-theme-settings-content-item-header">
                                <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/info_content/themepage/src/icons/image.svg'); ?>" />
                                <div class="spt-theme-settings-content-item-headline">
                                    <?php esc_html_e("Upload Logo", "petite-stories"); ?>
                                </div>
                                <p><?php esc_html_e("Add a custom logo to make your website look more professional.", "petite-stories"); ?></p>
                            </div>
                            <div class="spt-theme-settings-content-item-content">
                                <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('customize.php')) ?>"><?php esc_html_e("Go to customizer", "petite-stories"); ?></a>
                            </div>
                        </div>

                        <div class="spt-theme-settings-content-item">
                            <div class="spt-theme-settings-content-item-header">
                                <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/info_content/themepage/src/icons/file.svg'); ?>" />
                                <div class="spt-theme-settings-content-item-headline">
                                    <?php esc_html_e("Create New Pages", "petite-stories"); ?>
                                </div>
                                <p><?php esc_html_e("Start creating your website by adding pages to it.", "petite-stories"); ?></p>
                            </div>
                            <div class="spt-theme-settings-content-item-content">
                                <a class="spt-theme-settings-content-item-button" href="<?php echo esc_url(admin_url('edit.php?post_type=page')) ?>"><?php esc_html_e("Create a new page", "petite-stories"); ?></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="spt-theme-settings-wrapper-main-content-section">
                <div class="spt-theme-settings-wrapper-main-content-section-top">
                    <span class="spt-theme-settings-headline"><?php esc_html_e("Premium Features", "petite-stories"); ?></span>
                    <a class="spt-theme-settings-headline-link" href="<?= esc_url(SuperbInfoContentConfig::THEME_LINK); ?>"><?php esc_html_e("Unlock All Features", "petite-stories"); ?></a>
                </div>
                <p class="spt-theme-settings-wrapper-main-content-section-top-description">
                    <?php esc_html_e("Create a beautiful website easily, without coding.", "petite-stories"); ?>
                </p>

                <div class="spt-theme-settings-content spt-theme-settings-content-us">
                    <?php
                    foreach ($sptConfig->GetFeatures() as $feature) :
                    ?>
                        <a target="_blank" href="<?= esc_url(SuperbInfoContentConfig::THEME_LINK); ?>" class="spt-theme-settings-content-item spt-theme-settings-content-item-unavailable">
                            <span class="spt-theme-settings-content-item-unavailable-premium">Premium</span>
                            <div class="spt-theme-settings-content-item-header">
                                <div>
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/inc/info_content/themepage/src/icons/' . $feature["icon"]); ?>" />
                                </div>
                                <span class="spt-theme-settings-content-us-title"><?php esc_html_e($feature["title"]); ?></span></span>
                                <p><?php esc_html_e("With ", "petite-stories"); ?><?= esc_attr($theme_name); ?> <?php esc_html_e(" Premium you'll have full access to this feature as well as all the other features listed.", "petite-stories"); ?></p>
                            </div>
                            <div class="spt-theme-settings-content-item-content">
                                <span class="spt-theme-settings-content-us-button-link"><?php esc_html_e("Get Premium Version", "petite-stories"); ?></span>
                            </div>
                        </a>
                    <?php
                    endforeach;
                    ?>

                </div>
            </div>
        </div>


        <div class="spt-theme-settings-wrapper-sidebar">

            <div class="spt-theme-settings-wrapper-sidebar-item">
                <div class="spt-theme-settings-wrapper-sidebar-item-content">
                    <img class="spt-theme-settings-wrapper-sidebar-item-content-demo-image" src="<?= esc_url(get_template_directory_uri() . '/inc/admin_notification/src/preview.png'); ?>" alt="<?= esc_attr($theme_name); ?> Preview" />
                    <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("View Demo", "petite-stories"); ?></div>
                    <p><?= esc_html__("Need inspiration? Take a moment to view our theme demo!", "petite-stories") ?></p>
                    <a href="<?= esc_url(SuperbInfoContentConfig::DEMO_LINK); ?>" target="_blank" class="button"><?php esc_html_e("View Demo", "petite-stories"); ?></a>
                </div>
            </div>

            <div class="spt-theme-settings-wrapper-sidebar-item">
                <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/info_content/themepage/src/icons/color-crown.svg'); ?>" />
                <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("Upgrade to premium", "petite-stories"); ?></div>
                <div class="spt-theme-settings-wrapper-sidebar-item-content">
                    <p><?php echo esc_html($premium_text); ?></p>
                    <a href="<?= esc_url(SuperbInfoContentConfig::THEME_LINK); ?>" target="_blank" class="button button-primary"><?php esc_html_e("View Premium Version", "petite-stories"); ?></a>
                </div>
            </div>

            <div class="spt-theme-settings-wrapper-sidebar-item">
                <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/info_content/themepage/src/icons/wechat-logo.svg'); ?>" />
                <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("Contact support", "petite-stories"); ?></div>
                <div class="spt-theme-settings-wrapper-sidebar-item-content">
                    <p><?php esc_html_e("If you have issues with", "petite-stories"); ?> <?php echo esc_html($theme); ?> <?php esc_html_e("then send us an email through our website!", "petite-stories"); ?></p>
                    <a href="https://superbthemes.com/customer-support/" target="_blank" class="button"><?php esc_html_e("Contact Support", "petite-stories"); ?></a>
                </div>
            </div>

            <div class="spt-theme-settings-wrapper-sidebar-item">
                <img width="25" height="25" src="<?php echo esc_url(get_template_directory_uri() . '/inc/info_content/themepage/src/icons/shooting-star.svg'); ?>" />
                <div class="spt-theme-settings-wrapper-sidebar-item-header"><?php esc_html_e("Give us feedback", "petite-stories"); ?></div>
                <div class="spt-theme-settings-wrapper-sidebar-item-content">
                    <p><?php esc_html_e("Do you enjoy using", "petite-stories"); ?> <?php echo esc_html($theme); ?><?php esc_html_e("? Support us by reviewing us on WordPress.org!", "petite-stories"); ?></p>
                    <a href="https://wordpress.org/support/theme/<?php echo esc_attr(get_stylesheet()); ?>/reviews/#new-post" target="_blank" class="button"><?php esc_html_e("Leave a Review", "petite-stories"); ?></a>
                </div>
            </div>



        </div>

    </div>
</div>