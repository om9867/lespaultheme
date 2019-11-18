<?php if (have_posts()) : the_post(); ?>



    <?php the_content() ?>

    <!-- CASE STUDY SECTION STARTS-->
    <div class="container">
        <div class="row">
        <?php
        global $post;
        $args = array('numberposts' => 50,
            'category' => 82,
            'order' => 'DESC',
        );
        $myposts = get_posts($args);
        foreach ($myposts as $post) : setup_postdata($post); ?>
            <div class="col-sm-6 casestudy_1">
                <div class="casestudy_image">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                </div>
                <div class="casestudy_desc">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo str_ireplace('The client:','',wp_trim_words(get_the_excerpt(), 20)); ?></p>
                    <a href="<?php the_permalink(); ?>">Read More</a>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
    <!-- CASE STUDY SECTION ENDS-->



    <?php wp_reset_query();
endif; ?>



<?php comments_template(null, true); ?>