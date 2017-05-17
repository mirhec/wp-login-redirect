<?php

add_action('init', 'login_redirect_register_shortcodes');

function login_redirect_register_shortcodes() {
    // register shortcode [redirect_user]
    add_shortcode('redirect_user', 'redirect_user');
}

function redirect_user($args, $content) {
    // This assumes that this files sits in "wp-content/plugins/peters-login-redirect/wplogin_redirect_control.php" and that you haven't moved your wp-content folder
    if(file_exists('../../../wp-load.php')) {
        include '../../../wp-load.php';
    } else {
        if(file_exists('wp-load.php')) {
            include 'wp-load.php';
        } else {
            print 'Plugin paths not configured correctly.';
        }
    }

    $current_user = wp_get_current_user();
    $redirect_url = redirect_to_front_page('', '', $current_user);
    
    // return $redirect_url;
    // echo("<script>alert('" . $redirect_url . "');</script>");
    if($redirect_url !== '') {
        return '<script>window.location.href = "' . $redirect_url . '";</script>';
    }
}

?>