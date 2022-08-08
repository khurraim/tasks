<?php
if(!defined('ABSPATH'))
{
    exit;
}

add_filter("template_include", 'project_archive_page');

function project_archive_page($template) {
    global $post;

    if(is_archive() AND $post->post_type == 'projects') {
        $template = plugin_dir_path(__FILE__) . '../templates/projects-archive.php';
    }

    return $template;
}