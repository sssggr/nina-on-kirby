<footer class="footer">
  <hr>
  <div class="row">
    <div class="col-xs-12 col-md-4 footer-section">
      <h4><?= $site->footersection1headline()->html() ?></h4>
      <div class="footer-links-list">
        <?php foreach ($site->footersection1links()->toStructure() as $item): ?>
          <?php if ($page = $item->page()->toPage()): ?>
            <a class="footer-link" href="<?= $page->url() ?>"><?= $item->text()->html() ?></a>
          <?php endif ?>
        <?php endforeach ?>
      </div>
    </div>
    <div class="col-xs-12 col-md-4 footer-section">
      <h4><?= $site->footersection2headline()->html() ?></h4>
      <div class="footer-links-list">
        <?php foreach ($site->footersection2links()->toStructure() as $item): ?>
          <?php if ($page = $item->page()->toPage()): ?>
            <a class="footer-link" href="<?= $page->url() ?>"><?= $item->text()->html() ?></a>
          <?php endif ?>
        <?php endforeach ?>
      </div>
    </div>
    <div class="col-xs-12 col-md-4 footer-section social">
      <h4><?= $site->footersection3headline()->html() ?></h4>
      <a href="https://www.linkedin.com" target="_blank" aria-label="LinkedIn">
        <svg class="social-icon" viewBox="0 0 24 24" fill="currentColor">
          <path d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM0 8.98h5v15H0V8.98zm7.5 0h4.8v2.13h.07c.67-1.26 2.3-2.6 4.74-2.6 5.07 0 6 3.33 6 7.66v8.81h-5v-7.8c0-1.86-.03-4.25-2.6-4.25-2.6 0-3 2.03-3 4.12v7.93h-5V8.98z" />
        </svg>
      </a>
    </div>
  </div>
  <div class="footer-bottom">
    <a href="/impressum"><?= $site->footerimpressumtext()->html() ?></a> · <a href="/datenschutz"><?= $site->footerdatenschutztext()->html() ?></a>
  </div>
</footer>