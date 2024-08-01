<?php

$text = get_sub_field('text');
$image = get_sub_field('image');

?>

<section class="text-img" id="work">
    <div class="bg">
        <img src="<?= get_template_directory_uri();?>/img/after-1.svg" alt="">
    </div>
    <div class="content-width">
        <div class="content">
            <?php if($text):?>
                <div class="text">
                    <?= $text;?>
                </div>
            <?php endif;?>

            <?php if($image):?>

                <figure>
                    <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>" class="img">
                    <img src="<?= get_template_directory_uri();?>/img/after-2.svg" alt="" class="after">
                </figure>

            <?php endif;?>

        </div>
    </div>
</section>
