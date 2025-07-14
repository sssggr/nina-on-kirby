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
      <a href="https://www.linkedin.com/in/nina-siessegger/" target="_blank" aria-label="LinkedIn">
      <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34" width="34" height="34">
  <rect width="34" height="34" rx="4" fill="#0077B5"/>
  <path d="M8 12h4v12H8V12zm2-6c1.33 0 2 1.04 2 2.04 0 1.01-.67 2.04-2 2.04s-2-1.03-2-2.04C8 7.04 8.67 6 10 6zM14 12h3.84v1.62h.06c.53-1 1.83-2.06 3.77-2.06 4.01 0 4.75 2.63 4.75 6.06V24h-4v-5.73c0-1.36-.02-3.1-1.9-3.1-1.9 0-2.2 1.49-2.2 3v5.83H14V12z" fill="#FFFFFF"/>
</svg>

      </a>
      <h4><?= $site->footersection3secondheadline()->html() ?></h4>
      <div class="fo  oter-section3-text">
        <?= $site->footersection3text()->kirbytext() ?>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <a href="/impressum"><?= $site->footerimpressumtext()->html() ?></a> · <a href="/datenschutz"><?= $site->footerdatenschutztext()->html() ?></a>
  </div>
</footer>