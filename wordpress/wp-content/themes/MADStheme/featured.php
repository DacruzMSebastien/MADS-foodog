<div class="featured-post">
    <h6 class="title">Featured Post</h6>
    <?php
        $args = array(
            'posts_per_page' => 3,
            'meta_key' => 'meta-checkbox',
            'meta_value' => 'yes'
        );

        $featured = new WP_Query($args);

        if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>

        <div class="article-content">
            <div class="left">
                <p>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                </p>
            </div>
            <div class="right">
                <h3 class="category">
                    <?php the_category(', '); ?>
                </h3>
                <h3 class="article-title">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
                <div class="post_content">
                    <?php the_excerpt(); ?>
                </div>
            </div>
        </div>
    <?php
        endwhile; else:
        endif;
    ?>
</div>
