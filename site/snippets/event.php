<section class="event-block">
  <div class="event-image-container">
    <?php if (isset($image) && $image): ?>
      <img class="event-image" src="<?= $image->url() ?>" alt="<?= $image->alt() ?? '' ?>">
    <?php endif; ?>
  </div>
  <div class="event-content">
    <?php if (isset($date) && $date): ?>
      <div class="event-date"><?= $date ?></div>
    <?php endif; ?>
    <?php if (isset($title) && $title): ?>
      <h3 class="event-title"><?= $title ?></h3>
    <?php endif; ?>
    <?php if (isset($description) && $description): ?>
      <p class="event-description"><?= $description ?></p>
    <?php endif; ?>
  </div>
</section> 