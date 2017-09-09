<?php 

$schedule_section_title = get_field('schedule_section_title');

$sunday_time = get_field('sunday_time');
$sunday_period = get_field('sunday_period');
$sunday_timezone = get_field('sunday_timezone');
$monday_time = get_field('monday_time');
$monday_period = get_field('monday_period');
$monday_timezone = get_field('monday_timezone');
$tuesday_time = get_field('tuesday_time');
$tuesday_period = get_field('tuesday_period');
$tuesday_timezone = get_field('tuesday_timezone');
$wednesday_time = get_field('wednesday_time');
$wednesday_period = get_field('wednesday_period');
$wednesday_timezone = get_field('wednesday_timezone');
$thursday_time = get_field('thursday_time');
$thursday_period = get_field('thursday_period');
$thursday_timezone = get_field('thursday_timezone');
$friday_time = get_field('friday_time');
$friday_period = get_field('friday_period');
$friday_timezone = get_field('friday_timezone');
$saturday_time = get_field('saturday_time');
$saturday_period = get_field('saturday_period');
$saturday_timezone = get_field('saturday_timezone');

$content_frequency = get_field('content_frequency');
$schedule_section_addendum = get_field('schedule_section_addendum');

?>
   
<section id="schedule">
    <div class="container">
        <div class="section-header">
            <h2><strong><?php echo $schedule_section_title;?></strong></h2>
            <div class="row">
                <div class="col-sm-12">
                    <?php if (!empty($sunday_time)) { ?>
                    <p>Sunday: <span><?php echo $sunday_time;?></span> <?php echo $sunday_period;?> <?php echo $sunday_timezone;?></p>
                    <?php } ?>
                    <?php if (!empty($monday_time)) { ?>
                    <p>Monday: <span><?php echo $monday_time;?></span> <?php echo $monday_period;?> <?php echo $monday_timezone;?></p>
                    <?php } ?>
                    <?php if (!empty($tuesday_time)) { ?>
                    <p>Tuesday: <span><?php echo $tuesday_time;?></span> <?php echo $tuesday_period;?> <?php echo $tuesday_timezone;?></p>
                    <?php } ?>
                    <?php if (!empty($wednesday_time)) { ?>
                    <p>Wednesday: <span><?php echo $wednesday_time;?></span> <?php echo $wednesday_period;?> <?php echo $wednesday_timezone;?></p>
                    <?php } ?>
                    <?php if (!empty($thursday_time)) { ?>
                    <p>Thursday: <span><?php echo $thursday_time;?></span> <?php echo $thursday_period;?> <?php echo $thursday_timezone;?></p>
                    <?php } ?>
                    <?php if (!empty($friday_time)) { ?>
                    <p>Friday: <span><?php echo $friday_time;?></span> <?php echo $friday_period;?> <?php echo $friday_timezone;?></p>
                    <?php } ?>
                    <?php if (!empty($saturday_time)) { ?>
                    <p>Saturday: <span><?php echo $saturday_time;?></span> <?php echo $saturday_period;?> <?php echo $saturday_timezone;?></p>
                    <?php } ?>
                    <p>Online Content: <span><?php echo $content_frequency;?></span></p>
                    <div class="col-sm-6 col-sm-offset-3">
                        <h5><?php echo $schedule_section_addendum;?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>