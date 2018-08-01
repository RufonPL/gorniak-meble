<?php
$counter_image = get_field('counter_image')['sizes']['img_1920x350'];
?>

<div class="container-fluid counters-container" style="background-image: url(<?= $counter_image ?>)">
    <div class="container">
        <div class="row align-items-center">
            <?php if (have_rows('repeater_counter')):
                while (have_rows('repeater_counter')) : the_row();
                    $counter_value = get_sub_field('counter_value');
                    $counter_title = get_sub_field('counter_title');
                    ?>
                    <div class="col-12 col-md-3 counters-item">
                        <p class="counters-item-number"><?= $counter_value ?></p>
                        <p class="counters-item-title"><?= $counter_title ?></p>
                    </div>
                <?php endwhile;
            endif; ?>
        </div>
    </div>
</div>