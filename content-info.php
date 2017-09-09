<?php
$info_top_image = get_field('info_top_image');
$info_section_lead = get_field('info_section_lead');
$info_image_1 = get_field('info_image_1');
$info_description_1 = get_field('info_description_1');
$info_image_2 = get_field('info_image_2');
$info_description_2 = get_field('info_description_2');
$info_image_3 = get_field('info_image_3');
$info_description_3 = get_field('info_description_3');
?>
     
<section id="info">
    <div class="container">
        <div class="section-header">
            <img src="<?php echo $info_top_image['url'] ;?>" alt="<?php echo $info_top_image['alt'] ;?>">
            <h2><?php echo $info_section_lead ;?></h2>
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?php echo $info_image_1['url'] ; ?>" alt="<?php echo $info_image_1['alt'] ; ?>">
                    <p><?php echo $info_description_1 ;?> </p>
                </div>
                <div class="col-sm-4">
                    <img src="<?php echo $info_image_2['url'] ; ?>" alt="<?php echo $info_image_2['alt'] ; ?>">
                    <p><?php echo $info_description_2 ;?></p>
                </div>
                <div class="col-sm-4">
                    <img src="<?php echo $info_image_3['url'] ; ?>" alt="<?php echo $info_image_3['alt'] ; ?>">
                    <p><?php echo $info_description_3 ;?></p>
                </div>
            </div>
        </div>
    </div>
</section>