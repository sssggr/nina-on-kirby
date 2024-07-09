<?php
  $styleSelector = $block->styleselect()
?>

<div class="row">
  <div class="col-xs-12 col-md-offset-1 col-lg-offset-2 col-lg-9 col-md-10">
    <div
      <?php if($styleSelector == "offer"): ?>
        class="offer"
      <?php endif ?>
    >
      <?= $block->list(); ?>
    </div>
  </div>
</div>
