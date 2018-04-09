<h3>FEATURED POST</h3>
<?php
  $args = array(
        'posts_per_page' => 3,
        'meta_key' => 'meta-checkbox',
        'meta_value' => 'yes'
    );
    
    $featured = new WP_Query($args);

if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); ?>
    <h3>

        <?php the_category(', '); ?>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h3>
    <p class="details">
        <div class="post_content">
            <?php the_content(); ?>
        </div>
    </p>
    <?php if (has_post_thumbnail()) : ?>

    <figure>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
        </a>
    </figure>
    <p>
        <?php the_excerpt();?>
    </p>
    <?php
endif;
endwhile; else:
endif;
?>
