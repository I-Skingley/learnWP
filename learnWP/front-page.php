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

        <h2 class="section-heading">Source Code</h2>

        <section id="section-source">
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente magnam iusto recusandae molestias voluptas ab quasi sequi nam consectetur sit nobis repellat, architecto, praesentium quidem, vel minus aperiam optio suscipit!
            </p>
            <br>
            <a class="btn-readmore git" href="#"><i class="fa fa-github"></i> GitHub Profile</a>
        </section>

        
    </main>

    <script src="/js/main.js"></script>
</body>

<?php get_footer(); ?>