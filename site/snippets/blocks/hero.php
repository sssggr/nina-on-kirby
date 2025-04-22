<?php
  $image = $block->heroimage()->toFile();
?>

<div class="row">
      <div class="col-lg-offset-1 col-lg-10 col-md-12">
        <div class="row hero">
          <div class="col-xs-12 col-md-6 col-sm-6 hero-item1">
            <div class="hero-text-center-vertical">
              <h3>
                <?= $block->herotext() ?>
              </h3>
            </div>
          </div>
          <div class="col-xs-12 col-md-6 col-sm-6 portrait-container hero-item2">
          <figure>
      <img
        alt="<?= $image->alt() ?><?php if($image->photo()->isValid('minLength', 1)): ?><?php echo (' '), t('global-von'), (' ') ?><?= $image->photo() ?><?php endif ?>"
        class="responsive-img"
        src="<?= $image->url() ?>"
        srcset="<?= $image->srcset([
                '1x' => ['width' => 600, 'height' => 400, 'crop' => 'true', 'quality' => 90],
                '2x' => ['width' => 1200, 'height' => 800, 'crop' => 'true', 'quality' => 90]
            ])?>"        
      >
    </figure>
          </div>
        </div>
      </div>
    </div>