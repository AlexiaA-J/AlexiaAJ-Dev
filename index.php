    <?php
    get_header();
    ?>
    <div class="mainContent">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
        the_content();
        endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
        <div class="gallery">
        <?php
                $gallery = array(
                    'post_type' => 'project',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_status' => 'publish',

                );

                $query = new WP_Query($gallery);

                if ($query->have_posts()){
                    while ($query->have_posts()) : $query->the_post();
                        get_template_part('assets/template-parts/project');
                    endwhile;
                }
            ?>
        </div>
    </div>
    <?php
    get_footer();
    ?>