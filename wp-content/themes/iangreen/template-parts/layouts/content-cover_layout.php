<?php
global $layout, $layout_id;
$content_data=$layout[$layout['layout_type']];
$cover_layout_item=$layout['cover_slider'];
$cover_layout_sliders = $cover_layout_item['sliders'];

?>
<!-- Cover Section --> 
<section class="cover">
      <h2><?= $cover_layout_item['cover_title']; ?></h2>
      <p><?= $cover_layout_item['description']; ?></p>
      <div class="owl-carousel cover-slider">
      <?php foreach($cover_layout_sliders as $cover_layout_sliders_item) {  ?>
        <div class="item">
          <a href="<?= $cover_layout_item['link']; ?>">
          <img src="<?= $cover_layout_sliders_item['image']['url']; ?>" alt="" />
          <div class="inner">
          <a href="#myModal" class="video-popup"  data-toggle="modal" data-src="<?= $cover_layout_sliders_item['link']; ?>" data-target="#myModal"><svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" viewBox="0 0 24 24">
              <path fill="#ffffff" fill-rule="evenodd" d="M10,0 C15.52,0 20,4.48 20,10 C20,15.52 15.52,20 10,20 C4.48,20 -5.32907052e-15,15.52 -5.32907052e-15,10 C-5.32907052e-15,4.48 4.48,0 10,0 Z M12.9333333,9.2 L9.6,6.7 C9.1581722,6.36862915 8.53137085,6.4581722 8.2,6.9 C8.07017787,7.07309617 8,7.28362979 8,7.5 L8,12.5 C8,13.0522847 8.44771525,13.5 9,13.5 C9.21637021,13.5 9.42690383,13.4298221 9.6,13.3 L12.9333333,10.8 C13.3751611,10.4686292 13.4647042,9.8418278 13.1333333,9.4 C13.0764791,9.32419433 13.009139,9.25685425 12.9333333,9.2 Z" transform="translate(2 2)"/>
            </svg>
            </a>
          </div>
          </a>
      </div>
      <?php } ?>
    </div>
    </section>
   
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
         </button>
        <!-- 16:9 aspect ratio -->
                 <div class="embed-responsive embed-responsive-16by9">
                 <iframe class="embed-responsive-item" src="" id="video"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             </div>

         </div>

        </div>
    </div>
</div>
  