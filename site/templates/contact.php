<!doctype html>
<html lang="<?= $site->lang() ?>" class="no-js">
<?php snippet('head') ?>

<body>
  <?php snippet('header') ?>
  <div class="wrap container-fluid">
    <main class="template-contact">
      <div class="row">
        <div class="col-xs-12 col-md-offset-1 col-lg-offset-2 col-lg-9 col-md-10">
          <h1><?= $page->headline() ?></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-8 col-lg-6 col-md-offset-1 col-lg-offset-2">
          <?= $page->text()->kirbytext() ?>
          <?php if ($page->calendarurl()->isNotEmpty()): ?>
            <?php snippet('google-calendar-button', [
              'calendarUrl' => $page->calendarurl()->value(),
              'buttonText' => $page->buttontext()->or(t('calendar.button.text'))
            ]); ?>
          <?php endif; ?>
        </div>
        <div class="col-xs-12 col-md-2 col-lg-3">
          <?php if($image = $page->image()): ?>
            <figure class="contact-portrait">
              <img src="<?= $image->url() ?>" alt="<?= $image->alt()->or($image->caption()) ?>">
              <?php if($image->caption()->isNotEmpty()): ?>
                <figcaption><?= $image->caption() ?></figcaption>
              <?php endif ?>
            </figure>
          <?php endif ?>
        </div>
      </div>
    </main>

    <?php snippet('footer') ?>
  </div>

  <!-- End of .page -->
  <?php snippet('js-links') ?>
</body>
</html> 