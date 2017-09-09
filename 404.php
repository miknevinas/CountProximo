<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Count_Proximo
 */

get_header(); ?>
<section class="feature-image feature-image-default" data-type="background" data-speed="2">
    <h2 class="page-title">Page not found!</h2>
</section>

<div class="container">
    <div id="primary" class="row">
        <main id="content" class="col-sm-8">
            <div class="error-404 not-found">
                <div class="page-content">

                    <h3>Categories</h3>
                    <div class="widget widget-categories">
                        <h4 class="widget-title">Most Used Categories</h4>
                        <ul>
                            <?php wp_list_categories(array(
    'orderby' => 'count',
    'order' => 'DESC',
    'show_count' => 1,
    'title_li' => '',
    'number' => 10
)); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
        <aside class="col-sm-4">
            <?php get_sidebar(); ?>
        </aside>
    </div>
</div>

<?php
get_footer();
