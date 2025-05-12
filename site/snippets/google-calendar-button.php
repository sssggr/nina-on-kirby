<?php
// Default values
$calendarUrl = $calendarUrl ?? 'https://calendar.google.com/';
$buttonText = $buttonText ?? t('calendar.button.text', 'Open Google Calendar');
$buttonClass = $buttonClass ?? 'btn btn-calendar';
$popupWidth = $popupWidth ?? 800;
$popupHeight = $popupHeight ?? 600;
$popupId = uniqid('calendar_popup_');
?>
<a href="<?= $calendarUrl ?>"
   class="<?= $buttonClass ?>"
   id="<?= $popupId ?>"
   rel="noopener">
  <?= $buttonText ?>
</a>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var btn = document.getElementById('<?= $popupId ?>');
    if(btn) {
      btn.addEventListener('click', function(e) {
        e.preventDefault();
        window.open(
          '<?= $calendarUrl ?>',
          'calendarPopup',
          'width=<?= $popupWidth ?>,height=<?= $popupHeight ?>,resizable=yes,scrollbars=yes'
        );
      });
    }
  });
</script> 