<html>
<head>
<?php
  include '../php/headImport.php';
?>
<link rel='stylesheet' type='text/css' href='/assets/landingPage.css' />
</head>

<body>
<a href='letsgetstarted/'><span id='mainDatenightText' class='neonGlow'>DateNight</span></a>
<a href='letsgetstarted/'><span id='subheadingText' class='neonGlow'>Plan for the Unknown...</span></a>

<script type='text/javascript'>
  $(document).ready(function() {
    setTimeout(function() {$('#mainDatenightText').fadeIn(1000);}, 100);
    setTimeout(function() {$('#subheadingText').fadeIn(1000);}, 1500);
  });
</script>

</body>
</html>
