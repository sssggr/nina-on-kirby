<?php if ($steps = $page->processHomeSteps()->toStructure()): ?>
  <div class="process-grid">
    <?php foreach ($steps as $step): ?>
      <div class="process-card">
        <div class="process-title"><?= html($step->title()) ?></div>
        <div class="process-description"><?= html($step->text()) ?></div>
      </div>
    <?php endforeach ?>
  </div>
<?php endif ?> 