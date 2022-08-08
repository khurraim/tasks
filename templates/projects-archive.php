<?php get_header(); ?>
<div class="projects-archive">
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$data= new WP_Query(array(
    'post_type'=>'projects', // your post type name
    'posts_per_page' => 6, // post per page
    'paged' => $paged,
));

if($data->have_posts())
{
    while($data->have_posts())
    {
        $data->the_post();
?>


<div class='project-card'>
    <?php the_post_thumbnail('medium');?>
    <a href='<?php echo get_permalink(get_the_ID()); ?>'><h2><?php the_title(); ?></h2></a>
</div>

<?php

    }   // while loop
    $total_pages = $data->max_num_pages;

    if ($total_pages > 1){

        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => 'page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text'    => __('« prev'),
            'next_text'    => __('next »'),
        ));



        
    }
} // upper if
?>

</div>
<?php get_footer(); ?>