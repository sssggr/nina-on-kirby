<section class="process-section">
  <div class="process-grid">
    <?php for ($i = 1; $i <= 5; $i++): ?>
      <div class="process-card">
        <div class="process-number"><?= t("phasen.$i.number") ?></div>
        <div class="process-title"><?= t("phasen.$i.title") ?></div>
        <p class="process-description"><?= t("phasen.$i.text") ?></p>
      </div>
    <?php endfor ?>
  </div>
</section> 