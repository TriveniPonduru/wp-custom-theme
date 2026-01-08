<?php
/*
Template Name: Custom Page
*/
get_header();
?>

<main>
    <h2>Custom Page Template</h2>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>
