<?php
/*
    Template Name: Home Page
*/

get_header(); ?>

<!--Hero-->
<?php get_template_part('content', 'hero');?>

<!--Info-->
<?php get_template_part('content', 'info');?>

<!--Schedule-->
<?php get_template_part('content', 'schedule');?>

<!--Testimonials-->
<?php get_template_part('content', 'testimonials');?>

<?php
get_footer();