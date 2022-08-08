<?php

function wl_posts()
{

    if(current_user_can('edit_posts'))
    {
        $args = [
            'numberposts' => '6',
            'post_type' => 'projects',
            'project_type' => 'architecture'
        ];
    
    

    $posts = get_posts($args);

    $data = [];

    $i = 0;

    foreach($posts as $post)
    {
        $data[$i]['id'] = $post->ID;
        $data[$i]['title'] = $post->post_title;
        $data[$i]['link'] = $post->guid;
        $i++;
    }

    return $data;
    }   else {
        $args = [
            'numberposts' => '3',
            'post_type' => 'projects',
            'project_type' => 'architecture'
        ];
    
    

    $posts = get_posts($args);

    $data = [];

    $i = 0;

    foreach($posts as $post)
    {
        $data[$i]['id'] = $post->ID;
        $data[$i]['title'] = $post->post_title;
        $data[$i]['link'] = $post->guid;
        $i++;
    }

    return '{"success":"true", '.json_encode($data).'}';
    }

}



add_action('rest_api_init', function() {
    register_rest_route('projects', 'architecture', [
        'methods'
         => 'GET',
        'callback' => 'wl_posts'
    ]);


});