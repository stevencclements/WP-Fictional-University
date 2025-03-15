<?php

/**
 * WordPress loop
 */
while (have_posts()) {
    the_post(); ?>

    <h1><?php the_title(); ?></h1>

    <section>
        <?php the_content(); ?>
    </section>

<?php }
