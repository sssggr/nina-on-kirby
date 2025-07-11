<?php if(!empty($headline)): ?>
<section class="contact-highlight">
  <p>
    <?= $headline ?>
  </p>
  <?php if(!empty($buttonlink)): ?>
    <a href="<?= $buttonlink ?>">
      <?= $buttontext ?>
    </a>
  <?php endif ?>
</section>
<?php endif; ?> 