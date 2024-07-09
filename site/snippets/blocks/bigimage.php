<?php
  $image = $block->bigimage()->toFile();
  $styleSelector = $block->styleselect();
?>

<div class="row">
  <?php if($styleSelector == "flex"): ?>
  <div class="col-lg-offset-1 col-lg-10 col-md-12">
    <figure class="bodytext">
      <img
        alt="<?= $image->alt() ?><?php if(V::minLength($image->photo(), 1)): ?><?php echo (' '), t('global-von'), (' ') ?><?= $image->photo() ?><?php endif ?>"
        class="responsive-img"
        src="<?= $image->url() ?>"
        srcset="<?= $image->srcset([
          '360w'  => ['width' => 360, 'quality' => 90],
          '720w' => ['width' => 720, 'quality' => 90],
          '1376w' => ['width' => 1440, 'quality' => 90],
          '2880w' => ['width' => 2880, 'quality' => 90]
        ])?>"
      >
    </figure>
  </div>
  <?php else: ?>
  <div class="col-xs-12">
    <figure>
      <img
        alt="<?= $image->alt() ?><?php if(V::minLength($image->photo(), 1)): ?><?php echo (' '), t('global-von'), (' ') ?><?= $image->photo() ?><?php endif ?>"
        class="responsive-img"
        src="<?= $image->url() ?>"
        srcset="<?= $image->srcset([
          '360w'  => ['width' => 360, 'height' => 240, 'crop' =>'true', 'quality' => 90],
          '720w' => ['width' => 720, 'height' => 480, 'crop' =>'true', 'quality' => 90],
          '1376w' => ['width' => 1440, 'height' => 720, 'crop'=> 'true', 'quality' => 90],
          '2880w' => ['width' => 2880, 'height' => 1440, 'crop'=> 'true', 'quality' => 90]
        ])?>"   
      >
    </figure>
  </div>
  <?php endif ?>   
</div>