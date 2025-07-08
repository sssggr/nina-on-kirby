<section class="contact-highlight">
  <p><?= $block->headline()->kirbytextinline() ?></p>
  <?php if($block->buttonlink()->toPage()): ?>
    <a href="<?= $block->buttonlink()->toPage()->url() ?>">
      <?= $block->buttontext()->html() ?>
    </a>
  <?php endif ?>
</section> 