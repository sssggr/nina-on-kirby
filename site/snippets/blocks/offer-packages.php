<?php
$offers = $block->offers()->toStructure();
$moreDetails = t('offer.moreDetails', 'Mehr Details');
$resultLabel = t('offer.result', 'Ergebnis');
$defaultButton = t('offer.button', 'Interessiert? Jetzt anfragen');
?>
<section class="packages">
  <?php foreach ($offers as $offer): ?>
    <div class="package-card">
      <h3><?= $offer->title()->html() ?></h3>
      <p class="target"><?= $offer->target()->html() ?></p>
      <?php
        $featuresRaw = $offer->features()->value();
        $features = $offer->features()->yaml();
        // Wenn $features ein Array mit mehreren Einträgen ist, nutze es direkt
        if (is_array($features) && count($features) > 1) {
          $featuresList = $features;
        } else {
          // Fallback: Extrahiere <li>…</li> aus HTML-String
          preg_match_all('/<li>(.*?)<\/li>/is', $featuresRaw, $matches);
          $featuresList = $matches[1] ?? [];
        }
      ?>
      <ul>
        <?php foreach ($featuresList as $feature): ?>
          <li><?= str_replace('&amp;', '&', esc(strip_tags($feature))) ?></li>
        <?php endforeach ?>
      </ul>
      <?php if ($offer->details()->isNotEmpty()): ?>
        <div class="accordion">
          <button class="accordion-button" type="button"><?= $moreDetails ?></button>
          <div class="accordion-content"><?= $offer->details()->kirbytextinline() ?></div>
        </div>
      <?php endif ?>
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
        <a href="<?= $buttonHref ?>" class="package-btn"><?= $offer->buttontext()->or($defaultButton)->html() ?></a>
      <?php endif ?>
    </div>
  <?php endforeach ?>
</section>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.accordion-button').forEach(button => {
      button.addEventListener('click', () => {
        const content = button.nextElementSibling;
        content.classList.toggle('active');
      });
    });
  });
</script> 