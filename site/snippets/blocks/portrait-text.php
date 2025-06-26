<?php
$portrait = $block->portrait()->toFiles()->first();
$text = $block->text();
?>
<div class="row">
  <div class="col-xs-12 col-md-offset-1 col-lg-offset-2 col-lg-9 col-md-10">
    <section class="portrait-text-block">
      <?php if ($portrait): ?>
        <div class="portrait-image-container">
          <img src="<?= $portrait->url() ?>" alt="<?= $portrait->alt()->or('Portrait') ?>" class="portrait-image" loading="lazy" />
        </div>
      <?php endif; ?>
      <div class="portrait-text-content">
        <?= kirbytext($text) ?>
      </div>
    </section>
  </div>
</div> 