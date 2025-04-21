<!doctype html>
<html lang="<?= $site->lang() ?>" class="no-js">
<?php snippet('head') ?>

<body>
  <?php snippet('header') ?>
  <div class="wrap container-fluid">
    <main class="<?php echo'template-' ?><?= $page->template()?>">
      <div class="row">
        <div class="col-xs-12 col-lg-offset-1 col-lg-10 col-md-12">
          <div class="row hero">
            <div class="col-xs-12 col-md-6 col-sm-6 hero-item1">
              <h1>
              <?= $page->herotext() ?>
              </h1>
              <div class="button-container">
                <a
                  class="btn"
                  href="<?= $page->herolink()->toPage()->url() ?>"
                >
                  <?= $page->herobutton() ?>
                </a>
              </div>
            </div>
            <div class="col-xs-12 col-md-6 col-sm-6 portrait-container hero-item2">
            <?php $heroimage = $page->heroimage()->toFile(); ?>
              <img 
                alt="<?= $heroimage->alt() ?><?php if(V::minLength($heroimage->photo(), 1)): ?><?php echo (' '), t('global-von'), (' ') ?><?= $heroimage->photo() ?><?php endif ?>"
                class="responsive-img"
                src="<?= $heroimage->url() ?>"
                srcset="<?= $heroimage->srcset([
                '1x' => ['width' => 600, 'height' => 480, 'crop' => 'true', 'quality' => 90],
                '2x' => ['width' => 1200, 'height' => 960, 'crop' => 'true', 'quality' => 90]
                ])?>"
              >
            </div>
          </div>
        </div>
      </div>
      <section class="teaser">
    <h2>
      <?= $page->offersheadline() ?>
    </h2>
    <?php if($page->offers()): ?>
      <?php
        $offers = $page->offers()->toStructure();
        foreach ($offers as $offer): ?>
          <div class="row teaser-container">
            <div class="col-xs-12 col-md-5 col-sm-5 col-lg-offset-1 teaser-image-container">
            <?php $offerimage = $offer->offerimage()->toFile(); ?>
              <img 
                alt="<?= $offerimage->alt() ?><?php if(V::minLength($offerimage->photo(), 1)): ?><?php echo (' '), t('global-von'), (' ') ?><?= $offerimage->photo() ?><?php endif ?>"
                class="responsive-img"
                src="<?= $offerimage->url() ?>"
                srcset="<?= $offerimage->srcset([
                '1x' => ['width' => 640, 'height' => 432, 'crop' => 'true', 'quality' => 90],
                '2x' => ['width' => 1280, 'height' => 864, 'crop' => 'true', 'quality' => 90]
                ])?>"
              >
            </div>
            <div class="col-xs-12 col-md-7 col-sm-7 col-lg-5 teaser-text-container">
              <h3>
                <?= $offer->offerheadline() ?>
              </h3>
              <?= $offer->offertext()->kirbytext() ?>
              <a
                class="btn"
                href="<?= $offer->offerlink()->toPage()->url() ?>"
              >
                <?= $offer->offerbutton() ?>
              </a>
            </div>
          </div>
      <?php endforeach ?>
    <?php endif ?>  
  </section>
  <section class="themen">
    <h2>
      <?= $page->topicsheadline() ?>
    </h2>
    <div class="row">
      <div class="col-xs-12 col-md-offset-1 col-md-10 col-sm-12">
        <?= $page->topics() ?>
      </div>
    </div>
  </section>
  <section>
    <h2>
    <?= $page->inqaheadline() ?>
    </h2>
    <div class="row">
      <div class="col-lg-offset-1 col-lg-10 col-md-12">
        <div class="row hero">
          <div class="col-xs-12 col-md-7 col-sm-6 hero-item1">
            <h3>
              <?= $page->inqatextheadline() ?>
            </h3>
            <?= $page->inqatext()->kirbytext() ?>
            <div class="button-container">
              <a
                class="btn"
                href="<?= $page->inqalink()->toPage()->url() ?>"
              >
                <?= $page->inqabutton() ?>
              </a>
            </div>
          </div>
          <div class="col-xs-12 col-md-5 col-sm-6 hero-item2">
            <?php $inqaimage = $page->inqaimage()->toFile(); ?>
              <img 
                alt="<?= $inqaimage->alt() ?><?php if(V::minLength($inqaimage->photo(), 1)): ?><?php echo (' '), t('global-von'), (' ') ?><?= $inqaimage->photo() ?><?php endif ?>"
                class="responsive-img"
                src="<?= $inqaimage->url() ?>"
                srcset="<?= $inqaimage->srcset([
                '1x' => ['width' => 600, 'height' => 480, 'crop' => 'true', 'quality' => 90],
                '2x' => ['width' => 1200, 'height' => 960, 'crop' => 'true', 'quality' => 90]
                ])?>"
              >
          </div>
        </div>
      </div>
    </div>
  </section>
      <div class="row">
          <div class="col-xs-12 col-md-offset-1 col-lg-offset-2 col-lg-9  col-md-10">
            <?= $page->text()->kirbytext() ?>
          </div>
      </div>
    </main>

  <?php snippet('footer') ?>
  </div>

  <!-- End of .page -->
  <?php snippet('js-links') ?>
</body>

</html>