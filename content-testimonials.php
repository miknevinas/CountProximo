<section id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <h2><strong>Testimonials</strong></h2>

                <?php $looper = new WP_Query(array('post_type' => 'testimonial', 'orderby' => 'post_id', 'order' => 'ASC'));

                while($looper->have_posts()) : $looper->the_post();?>

                <div class="row testimonial">
                    <div class="col-sm-4">
                        <?php   if(has_post_thumbnail()) {
                                //crop uploaded image if too large
                                the_post_thumbnail(array(200,200));
                            }
                        ?>
                    </div>
                    <div class="col-sm-8">
                        <blockquote>
                            <?php the_content(); ?>
                            <cite>&mdash; <?php the_title();?></cite>
                        </blockquote>
                    </div>
                </div>

                <?php endwhile;
                wp_reset_query();
                ?>

            </div>
        </div>
    </div>
</section>