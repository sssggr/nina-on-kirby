<?php
$portrait = $block->portrait()->toFiles()->first();
$text = $block->text();
?>
<div class="row">
  <div class="col-xs-12 col-md-offset-1 col-lg-offset-2 col-lg-9 col-md-10">
    <section class="portrait-text-block">
      <?php if ($portrait): ?>
        <div class="portrait-image-container">
          <img
            alt="<?= $portrait->alt()->or('Portrait') ?>"
            class="portrait-image"
            src="<?= $portrait->url() ?>"
            srcset="<?= $portrait->srcset([
                    '1x' => ['width' => 320, 'height' => 320, 'crop' => 'true', 'quality' => 90], '2x' => ['width' => 640, 'height' => 640, 'crop' => 'true', 'quality' => 90]]) ?>"
            loading="lazy"
          />
        </div>
      <?php endif; ?>
      <div class="row">
        <div class="portrait-text-content">
          <?= kirbytext($text) ?>
        </div>
      </div>
    </section>
  </div>
</div> 