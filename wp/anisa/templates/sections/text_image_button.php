<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$text = get_sub_field('text');
$image = get_sub_field('image');
$link = get_sub_field('link');
$button_popup = get_sub_field('button_popup');

?>

<section class="bg-text-img">
    <div class="content-width">
        <div class="content">
            <div class="text">
                <?php if($title):?>
                    <h2><?= $title;?></h2>
                <?php endif;?>
                <?php if($subtitle):?>
                    <h4><?= $subtitle;?></h4>
                <?php endif;?>
                <?php if($text):?>
                    <p><?= $text;?></p>
                <?php endif;?>
                <?php if( $link ):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <div class="btn-wrap">
                        <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>" class="btn-arrow<?= $button_popup?' fancybox':'';?> btn-white"><?= esc_html($link_title); ?> <img src="<?= get_template_directory_uri();?>/img/arrow.svg" alt=""></a>
                    </div>
                <?php endif; ?>
            </div>
            <?php if($image):?>
                <figure>
                    <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
                </figure>
            <?php endif;?>
        </div>
    </div>
</section>
