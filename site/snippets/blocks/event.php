<div class="row">
  <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-9">
    <?php snippet('event', [
      'image' => $block->image()->toFile(),
      'date' => $block->date(),
      'title' => $block->title(),
      'description' => $block->description()->kt()
    ]) ?>
  </div>
</div> 