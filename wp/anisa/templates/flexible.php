<?php

$id = get_the_ID();

if( have_rows('content', $id) ): ?>

    <?php while( have_rows('content', $id) ): the_row(); ?>

        <?php get_template_part('templates/sections/' . get_row_layout()); ?>

    <?php endwhile; ?>

<?php endif; ?>





<section class="text-img-line">
    <div class="content-width">
        <h2>Some of our <span>initiatives</span></h2>
        <div class="content">
            <div class="item item-1">
                <div class="text">
                    <h3>Disaster <span>relief</span></h3>
                    <p>When floods and other natural disasters hit Gaibandha, we’re there to help. We provide food, blankets, and financial support to get people through the hardest times.</p>
                </div>
                <figure>
                    <img src="img/img-3-1.jpg" alt="">
                </figure>
            </div>
            <div class="item item-2">
                <div class="text">
                    <h3>Educational <span>support</span></h3>
                    <p>So many students can’t afford education that can change their lives. We offer scholarships to support education and career development. </p>
                </div>
                <figure>
                    <img src="img/img-3-2.jpg" alt="">
                </figure>
            </div>
            <div class="item item-3">
                <div class="text">
                    <h3>Medical <span>care</span></h3>
                    <p>Quality medical care is expensive and difficult for many to access. We offer access to life-saving medical care, so no one has to suffer from an illness that could be easily treated.</p>
                </div>
                <figure>
                    <img src="img/img-3-3.jpg" alt="">
                </figure>
            </div>
            <div class="item item-4">
                <div class="text">
                    <h3>Community <span>building</span></h3>
                    <p>We believe in bringing people together in times of celebration, not just times of crisis. This is how we can create real change, long-term.</p>
                </div>
                <figure>
                    <img src="img/img-3-4.jpg" alt="">
                </figure>
            </div>
        </div>
    </div>
</section>

<section class="map-section">
    <div class="bg">
        <img src="img/bg-1.png" alt="">
    </div>
    <div class="content-width">
        <div class="title">
            <h2>Gaibandha</h2>
            <h3>Is our home</h3>
        </div>
        <div class="content">
            <div class="left">
                <figure>
                    <img src="img/img-4-1.jpg" alt="">
                </figure>
            </div>
            <div class="right">
                <div class="text">
                    <div class="logo-wrap">
                        <img src="img/logo-3.svg" alt="">
                    </div>
                    <h6>We’re dedicated to ending suffering for everyone in the district— working together to create a community founded on compassion and hope.</h6>
                    <p>Because our roots are in the community we serve, we’re able to help, exactly when and where it’s needed most.</p>
                </div>
                <figure>
                    <img src="img/img-4-2.jpg" alt="">
                </figure>
            </div>
        </div>
    </div>
</section>

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
