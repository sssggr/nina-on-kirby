<div class="row">
  <div class="col-xs-12 col-md-offset-1 col-lg-offset-2 col-lg-9 col-md-10">
    <div class="accordion-container">
      <?php $items = $block->rows()->toStructure(); ?>
      <?php foreach ($items as $item): ?>
        <button class="accordion-title" aria-expanded="false">
          <span class="accordion-headline">
            <?= $item->headline()->html(); ?>
          </span>
          <?php snippet('svgs/icon-chevron') ?> 
        </button>

          <div class="accordion-details-hidden">
            <p>
              <?= $item->answer()->kirbytext(); ?>
            </p>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</div>
