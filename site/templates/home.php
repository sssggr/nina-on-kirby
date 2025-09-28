<!doctype html>
<html lang="<?= $site->lang() ?>" class="no-js">
<?php snippet('head') ?>

<body>
  <?php snippet('header') ?>
  <div class="wrap container-fluid">
    <main class="<?php echo 'template-' ?><?= $page->template() ?>">
      <div class="row">
        <div class="col-xs-12 col-md-offset-1 col-md-10">
          <div class="hero">
            <div class="row">
              <div class="col-xs-12 col-md-6 col-sm-6 hero-item1">
                <div class="hero-text-container">
                  <div class="hero-text">
                    <h1>
                      <?= $page->herotext() ?>
                    </h1>
                    <?php if ($page->herosubheadline()->isNotEmpty()): ?>
                      <p class="hero-subheadline">
                        <?= $page->herosubheadline()->kirbytextinline() ?>
                      </p>
                    <?php endif ?>
                  </div>
                  <div class="hero-button-container">
                    <a
                      class="btn"
                      href="<?= $page->herolink()->toPage()->url() ?>">
                      <?= $page->herobutton() ?>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-md-6 col-sm-6 hero-image-container hero-item2">
                <?php $heroimage = $page->heroimage()->toFile(); ?>
                <img
                  alt="<?= $heroimage->alt() ?>
                  <?php if ($heroimage && $heroimage->photo()->isNotEmpty()): ?><?php echo (' '), t('global-von'), (' ') ?><?= $heroimage->photo() ?><?php endif ?>"
                  class="responsive-img"
                  src="<?= $heroimage->url() ?>"
                  srcset="<?= $heroimage->srcset([
                            '1x' => ['width' => 600, 'height' => 480, 'crop' => 'true', 'quality' => 90],
                            '2x' => ['width' => 1200, 'height' => 960, 'crop' => 'true', 'quality' => 90]
                          ]) ?>"
                >
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="teaser">
        <h2>
          <?= $page->offersheadline() ?>
        </h2>
        <?php if ($page->offers()): ?>
          <?php
          $offers = $page->offers()->toStructure();
          $offersArray = $offers->values();
          ?>

          <?php if ($page->offersgroupintro()->isNotEmpty()): ?>
            <div class="row">
              <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10 col-sm-12">
                <div class="offers-group-intro">
                  <?= $page->offersgroupintro()->kirbytext() ?>
                </div>
              </div>
            </div>
          <?php endif; ?>

          <?php if (count($offersArray) >= 1): ?>
            <div class="row">
              <?php for ($i = 0; $i < min(2, count($offersArray)); $i++): $offer = $offersArray[$i]; ?>
                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5<?= $i === 0 ? ' col-md-offset-1 col-lg-offset-1' : '' ?>">
                  <div class="teaser-container">
                    <img
                      alt="<?= $offer->offerimage()->toFile()->alt() ?><?php if ($offer->offerimage()->toFile()->photo()->isNotEmpty()): ?><?php echo (' '), t('global-von'), (' ') ?><?= $offer->offerimage()->toFile()->photo() ?><?php endif ?>"
                      class="responsive-img"
                      src="<?= $offer->offerimage()->toFile()->url() ?>"
                      srcset="<?= $offer->offerimage()->toFile()->srcset([
                                '1x' => ['width' => 640, 'height' => 432, 'crop' => 'true', 'quality' => 90],
                                '2x' => ['width' => 1280, 'height' => 864, 'crop' => 'true', 'quality' => 90]
                              ]) ?>">
                    <div class="teaser-text-container">
                      <div class="teaser-texts">
                        <h3><?= $offer->offerheadline() ?></h3>
                        <?= $offer->offertext()->kirbytext() ?>
                      </div>
                      <div class="teaser-text-container-button">
                        <a class="btn" href="<?= $offer->offerlink()->toPage()->url() ?>"><?= $offer->offerbutton() ?></a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endfor; ?>
            </div>
          <?php endif; ?>

          <?php if ($page->singleofferintro()->isNotEmpty()): ?>
            <div class="row">
              <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10 col-sm-12">
                <div class="single-offer-intro">
                  <?= $page->singleofferintro()->kirbytext() ?>
                </div>
              </div>
            </div>
          <?php endif; ?>

          <?php if (count($offersArray) >= 3): $offer = $offersArray[2]; ?>
            <div class="row">
              <div class="col-xs-12 col-md-offset-1 col-md-10">
                <div class="offers-single">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6">
                      <div class="offers-single-imagecontainer">
                        <img
                          alt="<?= $offer->offerimage()->toFile()->alt() ?><?php if ($offer->offerimage()->toFile()->photo()->isNotEmpty()): ?><?php echo (' '), t('global-von'), (' ') ?><?= $offer->offerimage()->toFile()->photo() ?><?php endif ?>"
                          class="responsive-img"
                          src="<?= $offer->offerimage()->toFile()->url() ?>"
                          srcset="<?= $offer->offerimage()->toFile()->srcset([
                                    '1x' => ['width' => 640, 'height' => 432, 'crop' => 'true', 'quality' => 90],
                                    '2x' => ['width' => 1280, 'height' => 864, 'crop' => 'true', 'quality' => 90]
                                  ]) ?>"
                        >
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                      <div class="offers-single-textcontainer">
                        <h3><?= $offer->offerheadline() ?></h3>
                        <?= $offer->offertext()->kirbytext() ?>
                        <div class="button-container">
                          <a class="btn" href="<?= $offer->offerlink()->toPage()->url() ?>"><?= $offer->offerbutton() ?></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endif ?>
      </section>
      <section class="about-me-section">
        <h2>
          <?= $page->aboutmeheadline() ?>
        </h2>
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-md-offset-1 col-md-6 col-lg-7 portrait-item1">
            <div class="portrait-text-container">
              <div class="portrait-text-content">
                <?= $page->aboutmetext()->kirbytext() ?>
                <a href="<?= $page->aboutmelink()->toPage()->url() ?>" class="btn"><?= $page->aboutmebutton() ?></a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3 portrait-item2">
            <div class="portrait-image-container">
              <?php if ($aboutmeimage = $page->aboutmeimage()->toFile()): ?>
                <img
                  alt="<?= $aboutmeimage->alt() ?>" class="responsive-img"
                  loading="lazy"
                  src="<?= $aboutmeimage->url() ?>"
                  srcset="<?= $aboutmeimage->srcset([
                    '1x' => ['width' => 320, 'height' => 320, 'crop' => 'true', 'quality' => 90], '2x' => ['width' => 640, 'height' => 640, 'crop' => 'true', 'quality' => 90]]) ?>"
                />
              <?php endif; ?>
            </div>
          </div>
        </div>
      </section>
      <section class="testimonials">
        <h2>
          <?= $page->testimonialsheadline() ?>
        </h2>
        <div class="row">
          <div class="col-xs-12">
            <?php snippet('carousel', [
              'testimonials' => $page->testimonials()->toStructure(),
            ]); ?>
          </div>
        </div>
      </section>
      <section class="process-section-home">
        <h2><?= html($page->processHomeHeadline()) ?></h2>
        <div class="row">
          <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10 col-sm-12">
            <?php if ($page->processHomeTeaser()->isNotEmpty()): ?>
              <div class="process-home-teaser">
                <?= $page->processHomeTeaser()->kt() ?>
              </div>
            <?php endif ?>
            <?php snippet('process-home') ?>
          </div>
        </div>
      </section>

      <section class="latest-blog-posts">
        <h2><?= t('latest-blog-posts-headline') ?></h2>
        <div class="row">
          <div class="col-xs-12 col-md-offset-1 col-md-10 col-sm-12">
            <?php
            $blogPage = $site->children()->filterBy('template', 'blog')->first();
            $latestPosts = $blogPage ? $blogPage->children()->listed()->sortBy('date', 'desc')->limit(3) : null;
            ?>
            <?php if ($latestPosts && $latestPosts->count() > 0): ?>
              <div class="row">
                <?php foreach ($latestPosts as $post): ?>
                  <div class="col-xs-12 col-sm-4 col-lg-4">
                    <div class="singleblogpost-container">
                      <div class="image-and-headline">
                        <?php if ($image = $post->headerimage()->toFile()): ?>
                          <img
                            alt="<?= $post->title() ?>" class="responsive-img"
                            src="<?= $image->url() ?>"
                            srcset="<?= $image->srcset([
                              '1x' => ['width' => 400, 'height' => 320, 'crop' => 'true', 'quality' => 90],
                              '2x' => ['width' => 800, 'height' => 640, 'crop' => 'true', 'quality' => 90]
                            ]) ?>"
                          />
                        <?php endif ?>
                        <h3><?= $post->title() ?></h3>
                      </div>
                      <div>
                        <a href="<?= $post->url() ?>">
                          <?= t('blog-readmore') ?>
                        </a>
                      </div>
                    </div>
                  </div>
                <?php endforeach ?>
              </div>
            <?php endif ?>
          </div>
        </div>
      </section>

      <section class="contact-highlight">
        <div class="row">
          <div class="col-xs-12 col-md-offset-1 col-md-10 col-sm-12">
            <div class="contact-highlight-wrapper">
              <p>
                <?= $page->kontaktsectionheadline()->kirbytextinline() ?>
              </p>
              <?php if ($page->kontaktsectionbuttonlink()->toPage()): ?>
                <a href="<?= $page->kontaktsectionbuttonlink()->toPage()->url() ?>">
                  <?= $page->kontaktsectionbuttontext()->html() ?>
                </a>
              <?php endif ?>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?php snippet('footer') ?>
  </div>

  <!-- End of .page -->
  <?php snippet('js-links') ?>
</body>

</html>