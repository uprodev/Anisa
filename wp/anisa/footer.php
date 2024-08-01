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

<div id="contact" class="popup-contact" style="display:none;">
    <div class="popup-main">
        <div class="title">
            <h2>How you can help</h2>
            <p>If you want to be part of helping us change even more lives, here’s how you can get involved.</p>
        </div>

        <div class="content">
            <div class="item item-1">
                <figure>
                    <img src="img/logo-1.svg" alt="">
                </figure>
                <div class="text">
                    <h3>Work <span>with Path</span></h3>
                    <p>The Anisa Foundation is a project from the team behind Path—professional photo editing that’s good for business AND good for the world. 5% of all proceeds go directly towards our charitable work. </p>
                    <div class="btn-wrap">
                        <a href="#work" class="btn-arrow scroll">Work with Path <img src="img/arrow.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="item item-2">
                <figure>
                    <img src="img/logo-2.svg" alt="">
                </figure>
                <div class="text">
                    <h3><span>Connect</span> with us</h3>
                    <p>Have an idea for how we can work together, or another reason you want to get in touch? Contact us any time. </p>
                    <div class="btn-wrap">
                        <a href="#form" class="btn-arrow fancybox-form">Contact Anisa Foundation <img src="img/arrow.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <p>Thanks so much for your support.</p>
        </div>
    </div>
</div>


<div id="form" class="popup-contact popup-form" style="display:none;">
    <div class="popup-main">

        <div class="title-form">
            <div class="logo-wrap">
                <img src="img/logo-2.svg" alt="">
            </div>
            <h2>Contact the Anisa Foundation </h2>
            <p>We’d love to hear from you. Connect with us by sending a message here, or you can email us at <a href="mailto:">[foundation email address]</a>.</p>

        </div>
        <form action="#" class="default-form">
            <div class="input-wrap">
                <label for="name">what’s your first and last name?</label>
                <input type="text" name="name" id="name" placeholder="Your full name">
            </div>
            <div class="input-wrap">
                <label for="email">what’s your email?</label>
                <input type="email" name="email" id="email" placeholder="Your email address">
            </div>
            <div class="input-wrap input-wrap-full">
                <label for="message">what do you want us to know?</label>
                <textarea name="message" id="message" placeholder="Write your message here"></textarea>
            </div>
            <div class="input-wrap-submit">
                <button class="btn-arrow btn-blue">SUBMIT <img src="img/arrow-big.svg" alt=""></button>
            </div>
        </form>
    </div>
</div>

  <?php wp_footer(); ?>
	</body>
</html>
