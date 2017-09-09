<?php 

$desc_word_1 = get_field('desc_word_1');
$desc_word_2 = get_field('desc_word_2');
$desc_word_3 = get_field('desc_word_3');
$button_text = get_field('button_text');
$hero_question = get_field('hero_question');
$channel_url = get_field('channel_url');

?>

<section id="hero" data-type="background" data-speed="5">
    <article>
        <div class="container clearfix hero-text">
            <div class="row">
                <div class="col-sm-3">
                    <p><strong><?php echo $desc_word_1 ;?></strong></p>
                    <p><strong><?php echo $desc_word_2 ;?></strong></p>
                    <p><strong><?php echo $desc_word_3 ;?></strong></p><br>
                    <span><?php bloginfo('description');?></span>
                </div>
                <div class="col-sm-9">

                </div>
            </div>
            <div class="hero-bottom">
                <div class="row">
                    <div class="col-sm-8">
                        <p><?php echo $hero_question ;?></p>
                    </div>
                    <div class="col-sm-3">
                        <a href="<?php echo $channel_url ;?>"><button class="btn btn-success btn-lg btn-block"><?php echo $button_text ;?></button></a>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>