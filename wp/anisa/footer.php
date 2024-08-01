</main>

<footer>
    <div class="content-width">
        <div class="logo-wrap">
            <?php $logo = get_field('logo_footer', 'options');

            if($logo):?>
                <a href="<?= get_home_url();?>"><img src="<?= $logo['url'];?>" alt="<?= $logo['alt'];?>"></a>
            <?php endif;?>
        </div>

        <nav class="footer-menu">
            <?php wp_nav_menu([
                'theme_location' => 'footer-menu',
                'container' => false,
                'menu_class' => '',
                'walker' => new Footer_Nav_Menu(),
            ]);?>
        </nav>

        <?php if(get_field('footer_text', 'options')):?>
            <div class="bottom">
                <p><?php the_field('footer_text', 'options');?></p>
            </div>
        <?php endif;?>
    </div>
</footer>

<?php

$title_help = get_field('title_help', 'options');
$text_help = get_field('text_help', 'options');
$items_help = get_field('items_help', 'options');
$bottom_text = get_field('bottom_text', 'options');

?>

<div id="contact" class="popup-contact" style="display:none;">
    <div class="popup-main">
        <div class="title">

            <?php if($title_help):?>
                <h2><?= $title_help;?></h2>
            <?php endif;?>

            <?php if($text_help):?>
                <p><?= $text_help;?></p>
            <?php endif;?>

        </div>

        <?php if($items_help): $t=1;?>
            <div class="content">
                <?php foreach ($items_help as $ih):
                    $title = $ih['title'];
                    $text = $ih['text'];
                    $image = $ih['image'];
                    $link = $ih['link'];
                    ?>
                    <div class="item item-<?= $t;?>">
                        <?php if($image):?>
                            <figure>
                                <img src="<?= $image['url'];?>" alt="<?= $image['alt'];?>">
                            </figure>
                        <?php endif;?>
                        <div class="text">
                            <?php if($title):?>
                                <h3><?= $title;?></h3>
                            <?php endif;?>
                            <?php if($text):?>
                                <p><?= $text;?></p>
                            <?php endif;?>
                            <?php if( $link ):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>"></a>

                                <div class="btn-wrap">
                                    <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>" class="btn-arrow scroll"><?= esc_html($link_title); ?> <img src="<?= get_template_directory_uri();?>/img/arrow.svg" alt=""></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php $t++;
                endforeach;?>
            </div>
        <?php endif;?>

        <?php if($bottom_text):?>
            <div class="bottom">
                <p><?= $bottom_text;?></p>
            </div>
        <?php endif;?>

    </div>
</div>


<div id="form" class="popup-contact popup-form" style="display:none;">
    <div class="popup-main">

        <div class="title-form">
            <?php $logocf = get_field('logo_cf', 'options');

            if($logocf):?>
            <div class="logo-wrap">
                <img src="<?= $logocf['url'];?>" alt="<?= $logocf['alt'];?>">
            </div>
            <?php endif;?>

            <?php the_field('text_cf', 'options');?>

        </div>

        <?php $form = get_field('form', 'options');

        if($form){
            echo do_shortcode('[contact-form-7 id="'.$form.'"]');
        }?>

    </div>
</div>

  <?php wp_footer(); ?>
	</body>
</html>
