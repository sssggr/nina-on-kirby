<div class="header-container wrap container-fluid">
  <nav 
    class="header navbar"
    role="navigation"
    aria-label="Hauptnavigation"
  >
    <a
      class="navbar-item logo-container"
      href="<?= $site->url() ?>">
      <div class="logo">
        <div class="forename">Nina</div>
        <div class="surname-container">
          <div class="surname">
            <span>Siessegger</span>
          </div>
          <div class="svg-container">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 254 58" fill="none">
              <path stroke-width="46"
                d="M2.095 34.601c49.889-4.544 77.594-9.218 100.442-4.84 6.602 1.265 22.442-1.614 30.973-1.583 5.552.02 37.377-8.735 58.793-2.674 18.497 5.235 41.096 1.184 57.689 4.027" />
            </svg>
          </div>
        </div>
      </div>
    </a>
  <?php
    // nested menu
    $items = $pages->listed();
    // only show the menu if items are available
    if($items->isNotEmpty()):
  ?>
      <div
        id="menuToggle"
        class="nav-links"
        >
          <a
            role="button"
            id="btn-burger"
            class="hamburger"
            data-target="menu"
            aria-label="menu"
            aria-expanded="false"
          >
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
          <ul
            id="menu"
            class="menu"
          >
            <?php foreach($items as $item): ?>
              <li>
                <?php if($item->uuid()=="page://PMtMqGQeGePtEvT5"): ?>
                  <a
                    id="showdropdown"
                    href="#"
                  >
                    <?= $item->title()->html() ?>
                  </a>
                  <?php snippet('svgs/icon-chevron') ?>
                <?php else: ?>
                  <a
                    <?php e($item->isOpen(), ' class="active"') ?>
                    href="<?= $item->url() ?>"
                  >
                    <?= $item->title()->html() ?>
                  </a>
                <?php endif ?>
              <?php $children = $item->children()->listed(); ?>
              <?php if($children->isNotEmpty() && $item->title()=="Mein Angebot"): ?>
                <ul
                  id="dropdown"
                  class="dropdown"
                > 
                <?php foreach($children as $child): ?>
                  <li>
                    <a
                      <?php e($child->isOpen  (), ' class="active"') ?>
                      href="<?= $child->url() ?>"
                    >
                      <?= $child->title()->html() ?>
                    </a>
                  </li>
                <?php endforeach ?>
              </ul>
            <?php endif ?>
    
          </li>
        <?php endforeach ?>
        <?php $languageindex = 1 ?>
        <?php foreach($kirby->languages() as $language): ?>
          <li
            <?php e($kirby->language() == $language, ' class="active language-item"') ?>
            class="language-item"
          >
            <a
              href="<?= $page->url($language->code()) ?>"
              hreflang="<?php echo $language->code() ?>"
            >
              <?= html($language->code()) ?>
            </a>
          </li>
          <?php if($languageindex < $kirby->languages()->count()): ?>
            <li class="separate-language-items">|</li>
            <?php $languageindex++ ?>
          <?php endif ?>
        <?php endforeach ?>
      </ul>
    </div>
    <?php endif ?>
  </nav>
</div>