<?php
$offers = $block->offers()->toStructure();
$resultLabel = t('offer.result', 'Ergebnis');
$defaultButton = t('offer.button', 'Interessiert? Jetzt anfragen');
?>
<section class="packages">
  <div class="row">
    <?php foreach ($offers as $offer): ?>
      <div class="col-xs-12 col-md-4">
        <div class="package-card">
          <div class="package-card-content">
            <h3><?= $offer->title()->html() ?></h3>
            <div class="package-card-target">
              <p class="target"><?= $offer->target()->html() ?></p>
            </div>
            <div class="package-card-features">
              <?php
                $featuresRaw = $offer->features()->value();
                $features = $offer->features()->yaml();
                if (is_array($features) && count($features) > 1) {
                  $featuresList = $features;
                } else {
                  preg_match_all('/<li>(.*?)<\/li>/is', $featuresRaw, $matches);
                  $featuresList = $matches[1] ?? [];
                }
              ?>
              <ul>
                <?php foreach ($featuresList as $feature): ?>
                  <li><?= str_replace('&amp;', '&', esc(strip_tags($feature))) ?></li>
                <?php endforeach ?>
              </ul>
            </div>
          </div>
          <?php if ($offer->result()->isNotEmpty()): ?>
            <p class="result"><?= $resultLabel ?>: <?= $offer->result()->html() ?></p>
          <?php endif ?>
          <?php if ($offer->price()->isNotEmpty()): ?>
            <p class="price"><?= $offer->price()->html() ?></p>
          <?php endif ?>
          <?php
            $buttonPage = $offer->buttonurl()->toPage();
            $buttonHref = $buttonPage ? $buttonPage->url() : null;
          ?>
          <?php if ($buttonHref): ?>
            <a href="<?= $buttonHref ?>" class="btn"><?= $offer->buttontext()->or($defaultButton)->html() ?></a>
          <?php endif ?>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</section> 