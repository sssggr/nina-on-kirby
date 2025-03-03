<!doctype html>
<html lang="<?= $site->lang() ?>" class="no-js">
<?php snippet('head') ?>

<body>
  <?php snippet('header') ?>
  <div class="wrap container-fluid">
    <main class="<?php echo'template-' ?><?= $page->template()?>">
      <div class="row">
        <div class="col-xs-12 col-md-offset-2 col-lg-9  col-md-10">
          <h1>
            <?= $page->headline() ?>
          </h1>
        </div>
      </div>
      <div class="row">
          <div class="col-xs-12 col-md-offset-2 col-lg-9  col-md-10">
            <?= $page->text()->kirbytext() ?>
          </div>
      </div>
      <?php foreach($page->children()->listed()->flip() as $article): ?>
        <article>
          <div class="row">
            <div class="col-xs-12 col-md-2 text-align-right-md text-align-center-xs">
              <p class="blog-date">
                <?= $article->date()->toDate(t('date.format')) ?>
              </p>
            </div>
            <div class="col-xs-12 col-lg-9 col-md-10">
              <h2><?= $article->title()->html() ?></h2>
              <p>
                <?= $article->teasertext() ?>
                <a href="<?= $article->url() ?>"> <?php echo t('blog-readmore') ?></a>
              </p>
            </div>
          </div>
        </article>
      <?php endforeach ?>
    </main>

  <?php snippet('footer') ?>
  </div>

  <!-- End of .page -->
  <?php snippet('js-links') ?>
</body>

</html>