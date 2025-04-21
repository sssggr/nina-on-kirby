<div class="row">
  <div class="col-xs-12 col-md-offset-1 col-md-9 col-lg-offset-2 col-lg-8">
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