<?php
$testimonials = isset($block) ? $block->testimonials()->toStructure() : $testimonials;
$carouselId = 'carousel-' . uniqid();
?>

<div id="<?= $carouselId ?>" class="testimonial-carousel">
  <?php foreach ($testimonials as $testimonial): ?>
    <div class="carousel-cell">
      <div class="row">
        <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
          <div class="testimonial-content">
            <?php if ($testimonial->headline()->isNotEmpty()): ?>
              <div class="testimonial-headline">
                <h3><?= $testimonial->headline()->html() ?></h3>
              </div>
            <?php endif ?>
            <div class="testimonial-quote">
              <blockquote>
                <span class="firstcharacter">»</span>
                <?= $testimonial->testimonial_text()->kirbytext() ?>
              </blockquote>
            </div>
            <?php if ($testimonial->author_info()->isNotEmpty()): ?>
                <div class="testimonial-author">
                  <p><?= $testimonial->author_info()->html() ?></p>
                </div>
            <?php endif ?>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach ?>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elem = document.getElementById('<?= $carouselId ?>');
    var flkty = new Flickity(elem, {
      adaptiveHeight: true,
      cellAlign: 'center',
      wrapAround: true,
      autoPlay: 8000,
      pageDots: false
    });
  });
</script>