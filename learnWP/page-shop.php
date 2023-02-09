<?php get_header(); ?>

<body>
    <main>
        <a href="/../shop">
            <h2 class="section-heading">Shop</h2>
        </a>
        <section>
            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 2,
            );

            $products = new WP_Query($args);

            while ($products->have_posts()) {
                $products->the_post();
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
                    <?php the_excerpt(); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
                </div>
            </div>
        <?php }
        wp_reset_query();?>
        </section>



    
    </main>

    <script src="/js/main.js"></script>
</body>

<?php get_footer(); ?>