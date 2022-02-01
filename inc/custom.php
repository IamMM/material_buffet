<?php
/*
This file is included into functions.php
Use this file to add custom PHP code to functions.php
*/

?>

<?php function logo_loop() {
  $images = get_field('logo_gallery');
  console.log($images);
  $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
  if( $images ): ?>
      <?php foreach( $images as $image ): ?>
        <div class="swiper-slide">
          <img src=" <?php echo esc_url($image['url']); ?>" class="h-16 mx-auto"/>
        </div>
      <?php endforeach; ?>
  <?php endif;
}; ?>
