<div class="row">
  <div class="col-xs-offset-1 col-xs-10 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-7">
    <blockquote>
      <p>
      <span class="firstcharacter">»</span><?= $block->quotetext() ?>
      </p>
    </blockquote>
    <?php if ($block->citation()->isNotEmpty()): ?>
    <p>
      <?= $block->citation() ?>
    </p>
    <?php endif ?>
  </div>
</div>