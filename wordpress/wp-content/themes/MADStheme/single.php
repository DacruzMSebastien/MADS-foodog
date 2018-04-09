    <!-- THIS PAGE CONTAIN SINGLEPAGE FOR EACH ARTICLE -->

    <?php get_header(); ?>
    <!-- ouvrir header.php -->
        <div id="single-content">
            <p class="category"><?php the_category(', ') ?></p>
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <div class="post" id="post-<?php the_ID(); ?>">
                <h2 class="article-title">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
                <div class="post-content">
                    <?php the_content(); ?>
                    <div class="comments-template">
                        <?php comments_template(); ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php previous_post_link() ?>
            <?php next_post_link() ?>
            <?php else : ?>
                <p>Désolé, aucun article ne correspond à vos critères.</p>
            <?php endif; ?>
        </div>
    </div>
    <?php //get_sidebar(); ?>
    <?php get_footer(); ?>
    </body>

</html>
