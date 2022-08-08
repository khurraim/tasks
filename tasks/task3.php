<?php

function redirect_from_ip()
{
    $chunks = explode('.', $_SERVER['REMOTE_ADDR']);
    $whitelist = array(77.29, 186, 182, 190);
    $server = "http://google.com";
    if(in_array($chunks[0], $whitelist))
    {
        //redirect to another server
        wp_redirect( “www.google.com” );
        die();
    }
}


add_action('init', 'redirect_from_ip');
?>