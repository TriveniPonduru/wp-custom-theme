<?php get_header(); ?>

<main>

    <!-- Default Posts -->
    <section>
        <h2>Latest Posts</h2>

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
            <article>
                <h3><?php the_title(); ?></h3>
                <div><?php the_content(); ?></div>
            </article>
        <?php
            endwhile;
        else :
            echo '<p>No posts found</p>';
        endif;
        ?>
    </section>

    <!-- Custom Post Type: Projects -->
    <section>
        <h2>Latest Projects</h2>

        <?php
        $args = array('post_type' => 'project');
        $project_query = new WP_Query($args);

        if ($project_query->have_posts()) :
            while ($project_query->have_posts()) :
                $project_query->the_post();
        ?>
            <article>
                <h3><?php the_title(); ?></h3>
                <div><?php the_content(); ?></div>
            </article>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No projects found</p>';
        endif;
        ?>
    </section>

</main>

<?php get_footer(); ?>
