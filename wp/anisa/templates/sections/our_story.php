<?php

$text = get_sub_field('text');
$image = get_sub_field('image');

?>

<section class="story" id="story">
    <div class="content-width">
        <div class="content">

            <?php if($image):?>
                <figure>
                    <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
                </figure>
            <?php endif;?>

            <?php if($text):?>
                <div class="text">
                    <?= $text;?>
                </div>
            <?php endif;?>

        </div>
    </div>
</section>
