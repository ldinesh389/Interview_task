<?php
global $layout, $layout_id;
$content_data=$layout[$layout['layout_type']];
$testimonial_layout_item=$layout['testimonial'];
$testimonial_list = $testimonial_layout_item['testimonial_list'];
?>
<!-- Testimonial Slider -->
<section class="testimonial">
      <img src="<?php echo get_template_directory_uri() ?>/assets/icons/Small/243.svg" class="testimonial-icon">
      <h2><?= $testimonial_layout_item['title']; ?></h2>
      <div class="owl-carousel testimonial-slider">
      <?php foreach($testimonial_list as $testimonial_list_item) {  ?>
        <div class="item testimonial-item">
          <h5><?= $testimonial_list_item['feedback']; ?> </h5>
          <p><?= $testimonial_list_item['name']; ?>  <span><?= $testimonial_list_item['company_name']; ?></span></p>
          <a href="<?= $testimonial_layout_item['view_all_link']; ?>">VIEW ALL</a>
        </div>
        <?php } ?>
       
      </div>
    </section>
