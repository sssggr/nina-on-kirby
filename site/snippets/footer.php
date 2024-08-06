<footer class="footer">
  <?php if($page->is('kontakt')): ?>
  <?php else: ?>
  <div class="calltoaction">
      <p>
        <strong><?php echo t('footer-question') ?></strong>
        <br>
        <?php echo t('footer-answer') ?>
      </p>
        <a class="btn" href="kontakt"><?php echo t('footer-button-content') ?></a>
    </div>
  <?php endif ?>
  <hr>
  <?php $items = $pages->find('datenschutz', 'impressum'); ?>
  <?php if($items and $items->isNotEmpty()): ?>
    <nav class="footer-links">
    <?php $itemsindex = 1; ?>
    <?php foreach($items->sortBy('num', 'asc') as $item): ?>
      <a
        <?php e($item->isOpen(), "class='active'" ) ?>
        href="<?= $item->url() ?>"
        >
        <?= $item->title()->html() ?>
      </a>
      <?php if($itemsindex < size($items)): ?>
        <?php echo t('global-and') ?>
      <?php endif ?>
      <?php $itemsindex ++ ?>
    <?php endforeach ?>
    </nav>
  <?php endif ?>
</footer>