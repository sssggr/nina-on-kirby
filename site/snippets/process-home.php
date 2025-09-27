<?php if ($steps = $page->processHomeSteps()->toStructure()): ?>
  <div class="row">
    <?php foreach ($steps as $step): ?>
      <div class="col-xs-12 col-md-4">
        <div class="process-card-container">
          <div class="process-card-color">
            <div class="process-card">
              <h3 class="process-title">
                <?= html($step->title()) ?>
              </h3>
              <div class="process-description">
                <?= html($step->text()) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
<?php endif ?> 