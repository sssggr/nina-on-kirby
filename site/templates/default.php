<!doctype html>
<html lang="<?= $site->lang() ?>" class="no-js">
<?php snippet('head') ?>

<body>
  <?php snippet('header') ?>
  <div class="wrap container-fluid">
    <main class="<?php echo'template-' ?><?= $page->template()?>">
      <div class="row">
        <div class="col-xs-12 col-md-offset-1 col-lg-offset-2 col-lg-9  col-md-10">
          <h1>
            <?= $page->headline() ?>
          </h1>
        </div>
      </div>
      <div class="row">
          <div class="col-xs-12 col-md-offset-1 col-lg-offset-2 col-lg-9  col-md-10">
            <?= $page->text()->kirbytext() ?>
            <?php if ($page->calendarurl()->isNotEmpty()): ?>
              <?php snippet('google-calendar-button', [
                'calendarUrl' => $page->calendarurl()->value(),
                'buttonText' => $page->buttontext()->or(t('calendar.button.text'))
              ]); ?>
          <?php endif; ?>
          </div>
      </div>
    </main>

  <?php snippet('footer') ?>
  </div>

  <!-- End of .page -->
  <?php snippet('js-links') ?>
</body>

</html>