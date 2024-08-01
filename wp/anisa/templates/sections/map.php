<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$text = get_sub_field('text');
$image_top = get_sub_field('image_top');
$image_bottom = get_sub_field('image_bottom');
$map = get_sub_field('map');
$logo = get_sub_field('logo');

?>

<section class="map-section">
    <?php if($map):?>
        <div class="bg">
            <img src="<?= $map['url'];?>" alt="<?= $map['alt'];?>">
        </div>
    <?php endif;?>
    <div class="content-width">
        <div class="title">
            <?php if($title):?>
                <h2><?= $title;?></h2>
            <?php endif;?>
            <?php if($subtitle):?>
                <h3><?= $subtitle;?></h3>
            <?php endif;?>
        </div>
        <div class="content">
            <div class="left">
                <?php if($image_top):?>
                    <figure>
                        <img src="<?= $image_top['url'];?>" alt="<?= $image_top['alt'];?>">
                    </figure>
                <?php endif;?>
            </div>
            <div class="right">
                <div class="text">
                    <?php if($logo):?>
                        <div class="logo-wrap">
                            <img src="<?= $logo['url'];?>" alt="<?= $logo['alt'];?>">
                        </div>
                    <?php endif;?>
                    <?= $text;?>
                </div>
                <?php if($image_bottom):?>
                    <figure>
                        <img src="<?= $image_bottom['url'];?>" alt="<?= $image_bottom['alt'];?>">
                    </figure>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>
