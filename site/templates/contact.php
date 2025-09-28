<!doctype html>
<html lang="<?= $site->lang() ?>" class="no-js">
<?php snippet('head') ?>

<body>
  <?php snippet('header') ?>
  <div class="wrap container-fluid">
    <main class="template-contact">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-offset-1 col-md-6 col-lg-7">
          <h1><?= $page->headline() ?></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-offset-1 col-md-6 col-lg-7 portrait-item1">
          <?= $page->text()->kirbytext() ?>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3  portrait-item2">
          <?php if($image = $page->image()): ?>
            <figure class="contact-portrait">
              <img
                alt="<?= $image->alt()->or($image->caption()) ?>"
                class="responsive-img"  
                src="<?= $image->url() ?>"
                srcset="<?= $image->srcset([
                    '1x' => ['width' => 320, 'height' => 320, 'crop' => 'true', 'quality' => 90], '2x' => ['width' => 640, 'height' => 640, 'crop' => 'true', 'quality' => 90]]) ?>"
              />
              <?php if($image->caption()->isNotEmpty()): ?>
                <figcaption><?= $image->caption() ?></figcaption>
              <?php endif ?>
            </figure>
          <?php endif ?>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-offset-1 col-md-6 col-lg-7">
          <div class="calendar-container">
            <?php if ($page->calendarurl()->isNotEmpty()): ?>
              <?php snippet('google-calendar-button', [
                'calendarUrl' => $page->calendarurl()->value(),
                'buttonText' => $page->buttontext()->or(t('calendar.button.text'))
              ]); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </main>

    <?php snippet('footer') ?>
  </div>

  <!-- End of .page -->
  <?php snippet('js-links') ?>
</body>
</html> 