<?php //Silence...
get_header();


$allPosts = get_posts();

foreach ($allPosts as $singlePost) {
    echo $singlePost->post_title;
}

get_footer();
