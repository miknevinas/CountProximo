<?php
/* Template Name: About */
?>
<?php get_header(); 

$thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
$about_section_text = get_field('about_section_text');

?>

<?php if(has_post_thumbnail()) { ?>
<section class="feature-image" style="background:url('<?php echo $thumbnail_url;?>')" data-type="background" data-speed="2">
    <div class="container clearfix">
        <div class="row">
            <div class="text-center">
                <h1 class="page-title"><?php the_title();?></h1>
            </div>
        </div>
    </div>
</section>
    
<?php } else { ?>
<section class="feature-image feature-image-default" data-type="background" data-speed="2">
    <div class="container clearfix">
        <div class="row">
            <div class="text-center">
                <h1 class="page-title"><?php the_title();?></h1>
            </div>
        </div>
    </div>
</section>
    
<?php } ?>


<div class="container">
    <div class="row" id="primary">
        <div id="content" class="col-sm-12">
            <section class='main-content'>
                <p class="small-lead">
                <?php echo $about_section_text;?>
                </p>
                
                <?php $looper = new WP_Query(array('post_type' => 'panel', 'orderby' => 'post_id', 'order' => 'ASC')); ?>
                
                <div class="about-row clearfix">
                   <?php while( $looper->have_posts()) : $looper->the_post(); 
                    
                    $panel_image = get_field('panel_image');
                    $panel_url = get_field('panel_url');
                    $button_text = get_field('button_text');
                    ?>
                   
                    <div class="about col-sm-4">
                        <a class="<?php echo $panel_url;?>"><img src="<?php echo $panel_image['url']; ?>" alt="<?php echo $panel_image['alt']; ?>"></a><br><br>
                        <?php the_content(); ?>
                        <?php if (!empty($button_text)) : ?>
                            <a href="<?php echo $panel_url;?>" class="btn btn-success"><?php echo $button_text;?></a>
                        <?php endif; ?>
                    </div>
                    
                   <?php endwhile; ?>

                </div>
            </section>
        </div>
    </div>
</div>


<?php get_footer();?>