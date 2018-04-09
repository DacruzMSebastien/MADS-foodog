            <?php get_header(); ?>
            <!-- ouvrir header,php -->
            <div id="content-archive">
                <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>

                <!-- Article complet= .post + .postmetadata + .post_content -->
                <div id="article">
                    <div class="post" id="post-<?php the_ID(); ?>">
                        <h3 class="category">
                            <?php the_category(', ') ?>
                        </h3>

                            <p class="postmetadata">
                                <?php // the_time('j F Y') ?> <!--par -->
                                <!-- <?php // the_author() ?> | Cat&eacute;gorie: -->
                                <?php // comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?>
                                <?php // edit_post_link('Editer', ' &#124; ', ''); ?>
                            </p>

                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></a>

                        <div id="archive_picture">
                         <?php
                          add_theme_support( 'post-thumbnails', array( 'post' ) );
                          // Ajouter les images à la une sur les articles uniquement
                           the_post_thumbnail();
                            // affiche la miniature par défaut
                            // ?>
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



        <?php get_footer(); ?>
    </body>
</html>
