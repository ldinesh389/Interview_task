<?php
global $layout, $layout_id;
$content_data=$layout[$layout['layout_type']];
$about_layout_item=$layout['about'];
?>
<!-- About Section --> 
<section class="about">
    <h2><?= $about_layout_item['title']; ?></h2>
    <div class="row justify-content-center">
    <div class="col-lg-3 col-md-12 col-sm-12 about-left-content">
        <h3><?= $about_layout_item['sub_title']; ?></h3>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12 right-content">
        <p><?= $about_layout_item['description']; ?></p>
        <a href="<?= $about_layout_item['button_link']; ?>"><?= $about_layout_item['button_label']; ?> <img src="<?php echo get_template_directory_uri() ?>/assets/icons/Small/Arrow-forward.svg" class="more-btn"></a>
    </div>
    </div>
</section>