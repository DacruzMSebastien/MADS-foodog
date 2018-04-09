<div class="featured-post">
    <h3 class="title">FEATURED POST</h3>
    <?php
        $args = array(
            'posts_per_page' => 3,
            'meta_key' => 'meta-checkbox',
            'meta_value' => 'yes'
        );
        
        $featured = new WP_Query($args);

    if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
                    <p>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </p>
        <h3 class="category">
            <?php the_category(', '); ?>
        </h3>
        <h3 class="article-title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h3>
            <div class="post_content">
                <?php the_content(); ?>
            </div>
        
        <!-- <p>
            <?php //the_excerpt();?>
        </p> -->
    <?php
        
        endwhile; else:
        endif;
    ?>
</div>