<section class="event-block">
  <div class="row">
    <div class="col-xs-8 col-sm-3">
      <div class="event-image-container">
        <?php if (isset($image) && $image): ?>
          <img
            alt="<?= $image->alt() ?? '' ?>"
            class="responsive-img"
            src="<?= $image->url() ?>"
            srcset="<?= $image->srcset([
              '1x' => ['width' => 240, 'height' => 240, 'crop' => 'true', 'quality' => 90], '2x' => ['width' => 480, 'height' => 480, 'crop' => 'true', 'quality' => 90]]) ?>"
          >
        <?php endif; ?>
      </div>
    </div>
    <div class="col-xs-12 col-sm-9">
      <div class="event-content">
        <?php if (isset($date) && $date): ?>
          <div class="event-date"><?= $date ?></div>
        <?php endif; ?>
        <?php if (isset($title) && $title): ?>
          <h3 class="event-title"><?= $title ?></h3>
        <?php endif; ?>
        <?php if (isset($description) && $description): ?>
          <?= $description ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section> 