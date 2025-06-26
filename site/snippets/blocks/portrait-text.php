<?php
$portrait = $block->portrait()->toFiles()->first();
$text = $block->text();
?>
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