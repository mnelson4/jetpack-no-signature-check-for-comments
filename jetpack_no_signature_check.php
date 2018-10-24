<?php
/*
Plugin Name: JetPack - No Signature Check for Commenters
Plugin URI: https://github.com/mnelson4/jetpack-no-signature-check-for-comments
Description: Avoids the error "invalid security token" which commenters sometimes get.
Author: Michael Nelson
Version: 1.0
Author URI: https://cmljnelson.wordpress.com
*/
function jnscc_init()
{
    if(class_exists('Jetpack_Comments')) {
        remove_action(
            'pre_comment_on_post',
            array(
                Jetpack_Comments::init(),
                'pre_comment_on_post'
            ),
            1
        );
    }
}
add_action('init','jnscc_init');