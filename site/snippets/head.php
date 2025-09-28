<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <?php snippet('seo/head'); ?>
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
  <link rel="manifest" href="site.webmanifest">
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#EDEDED">
  <meta name="theme-color" content="#EDEDED">
  <script>
    (function(H) {
      H.className = H.className.replace(/\bno-js\b/, 'js')
    })(document.documentElement)
  </script>
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <?= css([
    'assets/css/vendor/flexboxgrid.min.css',
    'assets/css/base.css',
    '@auto'
  ]) ?>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</head>