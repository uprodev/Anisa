<?php

/* clear phone number */

function phone_clear($phone_num){
    $phone_num = preg_replace("![^0-9]+!",'',$phone_num);
    return($phone_num);
}


/* excerpt */

add_filter( 'excerpt_length', function(){
    return 20;
} );


add_filter('wpcf7_autop_or_not', '__return_false');



/* reading time */

function reading_time() {
    $content = get_post_field( 'post_content', $post->ID );
    $word_count = str_word_count( strip_tags( $content ) );
    $readingtime = ceil($word_count / 200);

    $totalreadingtime = $readingtime . ' Min read';

    return $totalreadingtime;
}