<?php

$title = get_sub_field('title');
$news = get_sub_field('news');

?>

<section class="slider-block">
    <div class="content-width">
        <?php if($title):?>
            <h2><?= $title;?></h2>
        <?php endif;?>
        <?php if( $news ): ?>
            <div class="slider-wrap">
                <div class="swiper home-slider">
                    <div class="swiper-wrapper">

                        <?php foreach( $news as $post): ?>
                            <?php setup_postdata($post); ?>

                            <?php get_template_part('templates/post');?>

                        <?php endforeach; ?>

                        <?php wp_reset_postdata(); ?>


                    </div>
                    <div class="swiper-button-next home-next btn"><img src="<?= get_template_directory_uri();?>/img/icon-1.svg" alt=""></div>
                    <div class="swiper-button-prev home-prev btn"><img src="<?= get_template_directory_uri();?>/img/icon-1.svg" alt=""></div>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section>
