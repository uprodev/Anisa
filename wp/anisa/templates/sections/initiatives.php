<?php

$title = get_sub_field('title');
$initiatives = get_sub_field('initiatives');
$i = 1;

?>

<section class="text-img-line">
    <div class="content-width">

        <?php if($title):?>
            <h2><?= $title;?></h2>
        <?php endif;?>

        <?php if($initiatives):?>
            <div class="content">
                <?php foreach ($initiatives as $ini):
                    $titl = $ini['title'];
                    $text = $ini['text'];
                    $image = $ini['image'];
                    ?>
                    <div class="item item-<?= $i;?>">
                        <div class="text">
                            <?php if($titl):?>
                                <h3><?= $titl;?></h3>
                            <?php endif;?>
                            <?php if($text):?>
                                <p><?= $text;?></p>
                            <?php endif;?>
                        </div>

                        <?php if($image):?>
                            <figure>
                                <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
                            </figure>
                        <?php endif;?>

                    </div>
                <?php $i++; endforeach;?>
            </div>
        <?php endif;?>

    </div>
</section>
