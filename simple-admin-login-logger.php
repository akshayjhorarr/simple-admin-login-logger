<?php
/*
Plugin Name: Simple Admin Login Logger
Description: Logs WordPress admin login activity.
Version: 1.0
Author: Akshay Jhorar
*/

function sall_track_login($user_login) {
    error_log("User logged in: " . $user_login);
}

add_action('wp_login', 'sall_track_login');