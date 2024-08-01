<?php

$cat = get_the_terms(get_the_ID(), 'category');
$author = get_field('author');
?>

<div class="swiper-slide">
    <?php if(has_post_thumbnail()):?>
        <figure>
            <a href="<?php the_permalink();?>">
                <img src="<?php the_post_thumbnail_url();?>" alt="<?= strip_tags(get_the_title());?>">
            </a>
        </figure>
    <?php endif;?>
    <div class="text">
        <?php if($cat):?>
            <h6 class="label"><?= $cat[0]->name;?></h6>
        <?php endif;?>
        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
        <?php the_excerpt();?>
        <ul>
            <li><img src="<?= get_template_directory_uri();?>/img/icon-2.svg" alt=""><?= reading_time();?></li>
            <li><p class="date"><?php the_time('F j, Y'); ?></p></li>
            <?php if($author):?>
                <li><p class="name"><?= $author;?></p></li>
            <?php endif;?>
        </ul>
    </div>
</div>
