<?php get_header(); ?>

<main>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <div><?php the_content(); ?></div>
        </article>
    <?php
        endwhile;
    else :
        echo '<p>No posts found</p>';
    endif;
    ?>
</main>
<aside>
    <?php if (is_active_sidebar('main-sidebar')) {
        dynamic_sidebar('main-sidebar');
    } ?>
</aside>

<?php get_footer(); ?>
