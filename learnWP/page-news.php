<?php get_header(); ?>

<body>
<div id="banner">
        <h1>&lt;LearningWP/&gt;</h1>
        <h3>Learn WP from scratch</h3>
    </div>

    <main>
        <a href="/../news/">
            <h2 class="section-heading">News</h2>
        </a>

        <section>
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 2,
            );

            $news = new WP_Query($args);

            while ($news->have_posts()) {
                $news->the_post();
            ?>
                

            <?php
            
            ?>
            <div class="card">
                <div class="card-image">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_id())?>" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title();?></h3>
                    </a>
                    <p>
                    <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
                </div>
            </div>

            <?php } 
            // RESET QUERY SO WE DON'T RUN INTO TROUBLE LATER
            wp_reset_query(); ?>  

        </section>

        <footer>
            <div id="left-footer">
                <h3>Quick Links</h3>
                <p>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="shop.html">Shop</a>
                    </li>
                    <li>
                        <a href="checkout.html">Checkout</a>
                    </li>
                    <li>
                        <a href="about.html">About Us</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    <li>
                        <a href="faq.html">FAQ</a>
                    </li>
                </ul>
                </p>
            </div>

            <div id="right-footer">
                <h3>Follow us on</h3>
                <div id="social-media-footer">
                    <ul>
                        <li>
                            <a href="https://nl.linkedin.com/in/ian-skingley">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/I-Skingley">
                                <i class="fa fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>This website is for learning Wordpress and Woocommerce from scratch</p>
            </div>
        </footer>
    </main>

    <script src="/js/main.js"></script>
</body>

<?php get_footer(); ?>