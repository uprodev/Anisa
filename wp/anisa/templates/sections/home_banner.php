<?php

$title = get_sub_field('title');
$text = get_sub_field('text');
$image = get_sub_field('image');
$link = get_sub_field('button');
$button_popup = get_sub_field('button_popup');

?>

<section class="home-banner">

    <?php if($image):?>
        <div class="bg">
            <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
        </div>
    <?php endif;?>

    <div class="content-width">
        <div class="content">

            <?= $title;?>

            <?php if($text):?>
                <div class="text-wrap">
                    <?= $text;?>
                </div>
            <?php endif;?>

            <?php if( $link ):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <div class="btn-wrap">
                    <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>" class="btn-arrow<?= $button_popup?' fancybox':'';?>"><?= esc_html($link_title); ?> <img src="<?= get_template_directory_uri();?>/img/arrow.svg" alt=""></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
