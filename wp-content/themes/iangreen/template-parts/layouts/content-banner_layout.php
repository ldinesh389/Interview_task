<?php
global $layout, $layout_id;

$content_data=$layout[$layout['layout_type']];
$banner_layout=$layout['banner_layout'];

?>

<div class="owl-carousel owl-theme home-banner-slider">
            <?php foreach($banner_layout as $banner_layout_items) {  ?>
              <div class="slide slide-1" style="background-image: url('<?= $banner_layout_items['background_image']['url']; ?>');">
            <div class="slide-content">
                <h1><?= $banner_layout_items['title']; ?></h1>
                <p><?= $banner_layout_items['description']; ?></p>
                <a href="<?= $banner_layout_items['first_button_link']; ?>"><button class="btn btn-custom"><?= $banner_layout_items['first_button_label']; ?></button></a>  <a href="<?= $banner_layout_items['second_button_link']; ?>"><button class="btn btn-primary-outline"><?= $banner_layout_items['second_button_label']; ?></button></a>
            </div>
            <div class="slide-menu">
              <p>  <?= $banner_layout_items['bottom_text']; ?> <a href="<?= $banner_layout_items['bottom_label_link']; ?>"  class="slidersecline"><?= $banner_layout_items['bottom_label']; ?></a></p>
            </div>
        </div>
        <?php } ?>
    </div>  