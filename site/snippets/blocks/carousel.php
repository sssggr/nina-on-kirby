<div class="row">
  <div class="col-xs-12 col-md-offset-1 col-md-9 col-lg-offset-2 col-lg-8">
    <?php
    // Generiere eine eindeutige ID für dieses Carousel
    $carouselId = 'carousel-' . $block->id();
    ?>
    <div id="<?= $carouselId ?>" class="testimonial-carousel">
      <?php foreach ($block->testimonials()->toStructure() as $testimonial): ?>
        <div class="carousel-cell">
          <div class="testimonial-content col-md-10 col-md-offset-1 col-xs-8 col-xs-offset-2">
            <div class="testimonial-headline">
              <h3> <?= $testimonial->headline()->html() ?></h3>
            </div>
            <div class="testimonial-quote">
              <blockquote>
                <span class="firstcharacter">»</span>
                <p><?= $testimonial->testimonial_text()->kirbytext() ?></p>
              </blockquote>
              <?php if ($testimonial->author_info()->isNotEmpty()): ?>
                <div class="testimonial-author">
                  <p><?= $testimonial->author_info()->html() ?></p>
                </div>
              <?php endif ?>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var elem = document.getElementById('<?= $carouselId ?>');
    var flkty = new Flickity(elem, {
      cellAlign: 'center',
      wrapAround: true,
      autoPlay: 8000,
      pageDots: false
    });
  });
</script>