<?php
$offers = $block->offers()->toStructure();
$defaultButton = t('offer.button');
?>
<section class="packages">
  <div class="row">
    <div class="col-xs-12 col-md-offset-1 col-lg-offset-2 col-lg-9 col-md-10">
      <?php foreach ($offers as $offer): ?>
        <div class="package-card">
      <div class="row">
        <div class="col-xs-12">
          <h3 class="package-title"><?= $offer->title()->html() ?></h3>
        </div>
      </div>
      
      <div class="row">
        <div class="col-xs-12 col-md-6">
          <div class="package-section target-section">
            <h4><?= t('offer.whom') ?> <span class="target"><?= $offer->target()->html() ?></span></h4>
          </div>
        </div>
        
        <div class="col-xs-12 col-md-6">
          <div class="package-section features-section">
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
      </div>
      
      <div class="row">
        <div class="col-xs-12 <?= $offer->price()->isNotEmpty() ? 'col-md-8' : 'col-md-12' ?>">
          <div class="package-section result-section">
            <h4><?= t('offer.result') ?> <span class="result"><?= $offer->result()->html() ?></span></h4>
          </div>
        </div>
        
        <?php if ($offer->price()->isNotEmpty()): ?>
          <div class="col-xs-12 col-md-4">
            <div class="package-section price-section">
              <p class="price"><?= $offer->price()->html() ?></p>
            </div>
          </div>
        <?php endif ?>
      </div>
      
      <div class="row">
        <div class="col-xs-12">
          <div class="package-section button-section">
            <?php if ($buttonPage = $offer->buttonurl()->toPage()): ?>
              <a href="<?= $buttonPage->url() ?>" class="btn"><?= $offer->buttontext()->or($defaultButton)->html() ?></a>
            <?php endif ?>
          </div>
        </div>
      </div>
    </div>
      <?php endforeach ?>
    </div>
  </div>
</section> 