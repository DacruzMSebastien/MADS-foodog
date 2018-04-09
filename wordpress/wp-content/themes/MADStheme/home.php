<?php get_header(); ?>

<div id="content">

    <div id="home_container">

    </div>


    <div id="home_featured">
        <p>Featured posts</p>


    </div>




    <div id="home_last_posts">
        <p>Latest posts</p>

        <ul>
            <?php
            $my_query = new WP_Query('showposts=6');
            while ($my_query->have_posts()) : $my_query->the_post();
            ?>

                <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                <?php
                endwhile;
                ?>
        </ul>
    </div><!-- #post_404 -->
</div>



<?php get_footer(); ?>