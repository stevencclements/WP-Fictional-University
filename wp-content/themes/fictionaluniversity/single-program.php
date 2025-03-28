<?php

get_header();

/**
 * WordPress loop
 */
while (have_posts()) {
    the_post(); ?>

    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>)"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php the_title(); ?></h1>
            <div class="page-banner__intro">
                <p>DON'T FORGET TO REPLACE ME LATER</p>
            </div>
        </div>
    </div>

    <div class="container container--narrow page-section">
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p>
                <a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('program'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to Programs</a> <span class="metabox__main"><?php the_title(); ?></span>
            </p>
        </div>

        <div class="generic-content">
            <?php echo the_content(); ?>
        </div>

        <?php $relatedProfessors = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'professor',
                'order_by' => 'title',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'related_programs',
                        'compare' => 'LIKE',
                        'value' => '"' . get_the_ID() . '"'
                    )
                )
            )); 
            
            if ($relatedProfessors->have_posts()) : ?>

                <hr class="section-break" />

                <h2 class="headline headline--medium"><?php echo get_the_title() ?> Professors</h2>

                <ul class="professor-cards">
                    <?php while ($relatedProfessors->have_posts()) {
                    $relatedProfessors->the_post(); ?>

                    <li>
                        <a class="professor-card" href="<?php the_permalink(); ?>">
                            <img class="professor-card__image" src="<?php the_post_thumbnail_url(); ?>" />
                            <span class="professor-card__name"><?php the_title(); ?></span>
                        </a>
                    </li>
                </ul>

                <?php }

            endif;

            wp_reset_postdata();

            $today = date('Ymd');

            $landingEvents = new WP_Query(array(
                'posts_per_page' => 2,
                'post_type' => 'event',
                'order_by' => 'meta_value_num',
                'meta_key' => 'event_date',
                'order' => 'DEC',
                'meta_query' => array(
                    array(
                        'key' => 'event_date',
                        'compare' => '>=',
                        'value' => $today,
                        'type' => 'numeric'
                    ),
                    array(
                        'key' => 'related_programs',
                        'compare' => 'LIKE',
                        'value' => '"' . get_the_ID() . '"'
                    )
                )
            )); ?>

            <?php if ($landingEvents->have_posts()) : ?>

                <hr class="section-break" />

                <h2 class="headline headline--medium">Upcoming <?php echo get_the_title() ?> Events</h2>

                <?php while ($landingEvents->have_posts()) {
                $landingEvents->the_post(); ?>

                <div class="event-summary">
                    <a class="event-summary__date t-center" href="<?php the_permalink(); ?>">
                        <span class="event-summary__month"><?php
                            $eventDate = new DateTime(get_field('event_date'));
                            echo $eventDate->format('M');
                        ?></span>
                        <span class="event-summary__day"><?php
                            $eventDate = new DateTime(get_field('event_date'));
                            echo $eventDate->format('d');
                        ?></span>
                    </a>
                    <div class="event-summary__content">
                        <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <p><?php echo wp_trim_words(get_the_content(), 18) ?> <a href="<?php the_permalink(); ?>" class="nu gray"> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
                    </div>
                </div>

            <?php }

            endif; ?>
        
    </div>
<?php }

get_footer();
