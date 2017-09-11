<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Count_Proximo
 */

?>

<?php wp_footer(); ?>

<!--Action-->
<section id="action">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h3>Have I suckered you into following me?</h3>
                <h3>Check out my streams, tweets and writings for a thorough gaming brainwash.</h3>
                <div class="action-icons">
                    <div class="col-xs-4">
                        <a href="https://www.twitch.tv/countproximo"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/twitch-circle.png" alt="Twitch"></a>
                    </div>
                    <div class="col-xs-4">
                        <a href="https://twitter.com/CountProximo"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/twitter-circle.png" alt="Twitter"></a>
                    </div>
                    <div class="col-xs-4">
                        <a href=""><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/blog-circle.png" alt="Blog"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <div class="col-sm-3">
            <p><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/Logo.png" alt="Count Proximo" class="logo"></a></p>
        </div>
        <div class="col-sm-9">
            <?php 
            wp_nav_menu(array(
                'menu_location' => 'footer',
                'container' => 'nav',
                'menu_class' => 'list-unstyled list-inline'
            ));
            ?>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/main.js"></script>


</body>
</html>
