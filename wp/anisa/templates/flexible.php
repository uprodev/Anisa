<?php

$id = get_the_ID();

if( have_rows('content', $id) ): ?>

    <?php while( have_rows('content', $id) ): the_row(); ?>

        <?php get_template_part('templates/sections/' . get_row_layout()); ?>

    <?php endwhile; ?>

<?php endif; ?>



<section class="story">
    <div class="content-width">
        <div class="content">
            <figure>
                <img src="img/img-5.png" alt="">
            </figure>
            <div class="text">
                <h2>Our <span>story</span></h2>
                <p>The Anisa Foundation is a project of the Anisa Kabir family.</p>
                <p>The foundation started as a small project—a way to give back as our family built <a href="#">Path</a>, a photo editing business with operations based in Gaibandha, Bangladesh.</p>
                <p>We began with a pledge to dedicate 5% of company revenue to charitable contributions, and have since put over $800,000 into our work in Gaibandha.</p>
                <p>In 2024 our dreams got even bigger. We formed the Anisa Foundation with a vision of a thriving Gaibandha where everyone has access to the resources they need for a good life.</p>
            </div>
        </div>
    </div>
</section>

<section class="logo-text">
    <div class="content-width">
        <div class="content">
            <figure>
                <img src="img/logo-4.svg" alt="">
            </figure>
            <div class="text">
                <h2>About <span>our name</span></h2>
                <p>The Anisa Foundation is named after our family’s matriarch, Anisa Khatun.</p>
                <p>She has been at the heart of our community work since the beginning—always leading our efforts with a deep sense of compassion and love.</p>
                <p>The name Anisa can also be translated as “faithful companion,” “one who is friendly and gentle with others,” and “one whose presence brings calm and peace.” We think it’s the perfect evocation of our way of working, as well as a way to honour the woman who has done so much for our family and our community.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-text-img">
    <div class="content-width">
        <div class="content">
            <div class="text">
                <h2>Give back </h2>
                <h4>To Gaibandha</h4>
                <p>Want to be part of leading the transformation of Gaibandha and our people? We’d love your support. Contact us to learn more about how you can help most right now.</p>
                <div class="btn-wrap">
                    <a href="#contact" class="btn-arrow fancybox btn-white">See how you can help <img src="img/arrow.svg" alt=""></a>
                </div>
            </div>
            <figure>
                <img src="img/img-6.png" alt="">
            </figure>
        </div>
    </div>
</section>

<section class="slider-block">
    <div class="content-width">
        <h2>What’s new with the <b>Anisa Foundation</b></h2>
        <div class="slider-wrap">
            <div class="swiper home-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <figure>
                            <a href="#">
                                <img src="img/img-7-1.jpg" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <h6 class="label">anisa foundation</h6>
                            <h3><a href="#">How to Prop Up Products With Blocks to Create Eye-Catching Product Photos</a></h3>
                            <p>Add dimension and personality to your images with blocks, boxes, cubes, and other photography props.</p>
                            <ul>
                                <li><img src="img/icon-2.svg" alt="">10 Min read</li>
                                <li><p class="date">October 20, 2021</p></li>
                                <li><p class="name">by Laura Bauer</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <a href="#">
                                <img src="img/img-7-2.jpg" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <h6 class="label">anisa foundation</h6>
                            <h3><a href="#">How to Prop Up Products With Blocks to Create Eye-Catching Product Photos</a></h3>
                            <p>Add dimension and personality to your images with blocks, boxes, cubes, and other photography props.</p>
                            <ul>
                                <li><img src="img/icon-2.svg" alt="">10 Min read</li>
                                <li><p class="date">October 20, 2021</p></li>
                                <li><p class="name">by Laura Bauer</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <a href="#">
                                <img src="img/img-7-3.jpeg" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <h6 class="label">anisa foundation</h6>
                            <h3><a href="#">How to Prop Up Products With Blocks to Create Eye-Catching Product Photos</a></h3>
                            <p>Add dimension and personality to your images with blocks, boxes, cubes, and other photography props.</p>
                            <ul>
                                <li><img src="img/icon-2.svg" alt="">10 Min read</li>
                                <li><p class="date">October 20, 2021</p></li>
                                <li><p class="name">by Laura Bauer</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <a href="#">
                                <img src="img/img-7-1.jpg" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <h6 class="label">anisa foundation</h6>
                            <h3><a href="#">How to Prop Up Products With Blocks to Create Eye-Catching Product Photos</a></h3>
                            <p>Add dimension and personality to your images with blocks, boxes, cubes, and other photography props.</p>
                            <ul>
                                <li><img src="img/icon-2.svg" alt="">10 Min read</li>
                                <li><p class="date">October 20, 2021</p></li>
                                <li><p class="name">by Laura Bauer</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <a href="#">
                                <img src="img/img-7-2.jpg" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <h6 class="label">anisa foundation</h6>
                            <h3><a href="#">How to Prop Up Products With Blocks to Create Eye-Catching Product Photos</a></h3>
                            <p>Add dimension and personality to your images with blocks, boxes, cubes, and other photography props.</p>
                            <ul>
                                <li><img src="img/icon-2.svg" alt="">10 Min read</li>
                                <li><p class="date">October 20, 2021</p></li>
                                <li><p class="name">by Laura Bauer</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <figure>
                            <a href="#">
                                <img src="img/img-7-3.jpeg" alt="">
                            </a>
                        </figure>
                        <div class="text">
                            <h6 class="label">anisa foundation</h6>
                            <h3><a href="#">How to Prop Up Products With Blocks to Create Eye-Catching Product Photos</a></h3>
                            <p>Add dimension and personality to your images with blocks, boxes, cubes, and other photography props.</p>
                            <ul>
                                <li><img src="img/icon-2.svg" alt="">10 Min read</li>
                                <li><p class="date">October 20, 2021</p></li>
                                <li><p class="name">by Laura Bauer</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next home-next btn"><img src="img/icon-1.svg" alt=""></div>
                <div class="swiper-button-prev home-prev btn"><img src="img/icon-1.svg" alt=""></div>
            </div>
        </div>
    </div>
</section>
