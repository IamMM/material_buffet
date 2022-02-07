<?php
/*
This file is included into functions.php
Use this file to add custom PHP code to functions.php
*/

?>

<?php function gallery_loop($field_name) {
  $images = get_field($field_name);
  if( $images ): ?>
      <?php foreach( $images as $image ): ?>
        <div class="swiper-slide">
          <img src=" <?php echo esc_url($image['url']); ?>" class="h-full mx-auto"/>
        </div>
      <?php endforeach; ?>
  <?php endif;
}; ?>
