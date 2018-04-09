<?php
/*
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>

<div class="page_header_404 ">
        
    <img id="dog" src="http://localhost/MADS-foodog/wordpress/wp-admin/images/ooups.jpg" alt="chien dessin au crayon">
        
     <div class="page_title_404">
        <p><?php _e( 'An error occured unexpectedly !', 'MADS-foodog' ); ?></p>
    </div>

    <div class="page_content_404">
        <p><?php _e( 'It looks like nothing was found at this location.'); ?></p>
        <p><?php _e('Try to find something else?', 'MADS-foodog' ); ?></p>
    </div><!-- .page_content_404 -->

    <?php get_search_form(); ?>

<!-- Afficher les derniers articles du blog -->
    <div id="post_404">
        <p>Discover the last posts :</p>

        <ul>
            <?php
                $my_query = new WP_Query('showposts=5');
                while ($my_query->have_posts()) : $my_query->the_post();
            ?>

            <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
            <?php endwhile;?>
        </ul>
    </div><!-- #post_404 -->

</div> <!-- .page_header_404  -->







