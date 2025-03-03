<!doctype html>
<html lang="<?= $site->lang() ?>" class="no-js">
<?php snippet('head') ?>

<body>
  <?php snippet('header') ?>
  <div class="wrap container-fluid">
    <main class="<?php echo'template-' ?><?= $page->template()?>">
      <?php if($image = $page->headerimage()->toFile()): ?>
        <div class="row">
          <div class="col-xs-12">
            <figure>
              <img
                alt="<?= $image->alt() ?><?php if(V::minLength($image->photo      (), 1)): ?><?php echo (' '), t('global-von'), (' ') ?><?=       $image->photo() ?><?php endif ?>"
                class="responsive-img"
                src="<?= $image->url() ?>"
                srcset="<?= $image->srcset([
                  '360w'  => ['width' => 360, 'height' => 240,  'crop'       =>'true', 'quality' => 90],
                  '720w' => ['width' => 720, 'height' => 480,   'crop'      =>'true', 'quality' => 90],
                  '1376w' => ['width' => 1440, 'height' => 720,   'crop'=>      'true', 'quality' => 90],
                  '2880w' => ['width' => 2880, 'height' => 1440,  'crop'=>       'true', 'quality' => 90]
                ])?>"   
              >
            </figure>
          </div>
        </div>
        <?php endif ?>
      <div class="row">
      <div class="col-xs-12 text-align-center">
          <p class="blog-article-date">
            <?= $page->date()->toDate(t('date.format')) ?>
          </p>
        </div>
        <div class="col-xs-12 col-md-offset-1 col-lg-offset-2 col-lg-9 col-md-10">
          <h1>
            <?= $page->headline() ?>
          </h1>
        </div>
      </div>
      <?php foreach ($page->modules()->toBlocks() as $block): ?>
        <div id="<?= $block->id() ?>" class="block block-type-<?= $block->type() ?>">
          <?= $block ?>
        </div>
      <?php endforeach ?>
    </main>

  <?php snippet('footer') ?>
  </div>

  <!-- End of .page -->
  <?php snippet('js-links') ?>
</body>

</html>