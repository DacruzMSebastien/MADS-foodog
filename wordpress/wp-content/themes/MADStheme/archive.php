            <?php get_header(); ?>
            <!-- ouvrir header,php -->
            <div id="content">
                <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
                
                <div id="article">
                    <div class="post" id="post-<?php the_ID(); ?>">
                        <h3 class="category">
                            <?php the_category(', ') ?>
                        </h3>
                        <div id="archive_picture">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                    <div class="archive_title"> 
                        <?php the_title(); ?>
                     </div>
                        <div class="post_content">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </div>

                <?php endwhile; ?>
                <?php endif; ?>
                
                <div class="content_sidebar">
                    <div id="archive_sidebar">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
                
            </div>


        </div>


        <?php pagination($wp_query); ?>

        <?php theme_pagination(); ?>

        <?php get_footer(); ?>
    </body>
</html>
