<?php
// Admin panel customizations

// Custom logo on the login screen
function custom_login_logo()
{
    ?>
    <style type="text/css">
        .login h1 a {
            background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg');
            background-size: contain;
            width: 100%;
            height: 80px;
        }
    </style>
    <?php
}
add_action('login_head', 'custom_login_logo');

// Change logo url
add_filter('login_headerurl', function () {
    return home_url();
});

// Change logo alt/title
add_filter('login_headertext', function () {
    return 'Przejdź do strony głównej Be Awesome';
});

// Hide admin menu items for non-admin users
function hide_admin_menu_items_for_non_admins()
{
    // IF user ID is not 0
    if (get_current_user_id() !== 1) {
        remove_menu_page('wp-armour');
        // remove_menu_page('edit.php?post_type=acf-field-group');
        remove_menu_page('limit-login-attempts');
    }
}
add_action('admin_menu', 'hide_admin_menu_items_for_non_admins', 999);

// Remove WordPress logo from admin bar
add_action('admin_bar_menu', function ($wp_admin_bar) {
    $wp_admin_bar->remove_node('wp-logo');
}, 999);

// Remove custom plugin node from admin bar (Limit Login Attempts)
add_action('admin_bar_menu', function ($wp_admin_bar) {
    $wp_admin_bar->remove_node('llar-root');
}, 999);

// Custom admin footer text
add_filter('admin_footer_text', function () {
    return '🚀 Panel administracyjny Be Awesome';
});

// Remove <p> tags from contact form output (optional)
// add_filter('wpcf7_autop_or_not', '__return_false');

// -----------------------------------------------------------------
// Fully replace default WordPress dashboard
add_action('admin_init', function () {
    global $pagenow;

    if (is_admin() && $pagenow === 'index.php' && !isset($_GET['page'])) {
        wp_redirect(admin_url('admin.php?page=dashboard'));
        exit;
    }
});

// Remove default dashboard from menu
add_action('admin_menu', function () {
    remove_menu_page('index.php');

    add_menu_page(
        'Be Awesome Panel',
        'Kokpit',
        'manage_options',
        'dashboard',
        'render_custom_dashboard_page',
        'dashicons-chart-area',
        2
    );


    remove_action('welcome_panel', 'wp_welcome_panel');
});

// Remove default dashboard widgets
add_action('wp_dashboard_setup', function () {
    global $wp_meta_boxes;
    $wp_meta_boxes['dashboard']['normal']['core'] = [];
    $wp_meta_boxes['dashboard']['side']['core'] = [];
}, 999);


// Render the custom dashboard page
function render_custom_dashboard_page()
{
    include get_template_directory() . '/inc/templates/dashboard-template.php';
}


// Set a default admin color scheme for all users
add_action('admin_init', function () {
    $default_scheme = 'coffee';

    $users = get_users();

    foreach ($users as $user) {
        $current_scheme = get_user_option('admin_color', $user->ID);

        if ($current_scheme !== $default_scheme) {
            update_user_meta($user->ID, 'admin_color', $default_scheme);
        }
    }
});


// Disable color scheme picker in user profile
add_action('admin_head', function () {
    echo '<style>#your-profile .user-admin-color-wrap { display: none; }</style>';
});
