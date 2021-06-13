<?php
global $layout, $layout_id;
$content_data=$layout[$layout['layout_type']];
$find_out_more_layout_item=$layout['find_out_more'];
?>
<!-- Find Out More Section --> 
<section class="find-more">
    <div class="row justify-content-center">
      <h2 class="findmore-title"><?= $find_out_more_layout_item['title']; ?></h2>
      <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12">
      <?= $find_out_more_layout_item['description']; ?>
        <a href="<?= $find_out_more_layout_item['button_link']; ?>">
        <button class="btn btn-findmore"><?= $find_out_more_layout_item['button_label']; ?></button>
</a>
      </div>
    </div>
  </section>
<!-- Find Property  Section --> 
<section class="find-property">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <img src="<?= $find_out_more_layout_item['find_out_property']['image']['url']; ?>" class="find-property-img img-responsive">
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 right-col">
        <div class="right-content">
          <h4>
          <?= $find_out_more_layout_item['find_out_property']['title']; ?>
          </h4>
          <p> <?= $find_out_more_layout_item['find_out_property']['description']; ?></p>
          <div class="links"> 
            <a href="<?= $find_out_more_layout_item['find_out_property']['first_label_link']; ?>"> <?= $find_out_more_layout_item['find_out_property']['first_label']; ?> <img src="<?php echo get_template_directory_uri() ?>/assets/icons/Small/Arrow-forward.svg" class="more-btn"></a> <br> <br>
          <a href="<?= $find_out_more_layout_item['find_out_property']['second_label_link']; ?>"> <?= $find_out_more_layout_item['find_out_property']['second_label']; ?> <img src="<?php echo get_template_directory_uri() ?>/assets/icons/Small/Arrow-forward.svg" class="more-btn"></a>
        </div>
        </div>
      </div>
    </div>
  </section>