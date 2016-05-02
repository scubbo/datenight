<html>
<head>
<?php
  include '../php/headImport.php';
?>
</head>

<body>
<div id="main">
<?php
  include '../php/header.php';
?>
<div id='body'>
<?php
if(isset($_COOKIE['sessionId'])) {
echo <<< EOT
<script type='text/javascript'>
$.post(
  '/cgi-bin/getUserData.py',
  {
    'sessionId': '{$_COOKIE['sessionId']}'
  },
  function(data) {
    $('#firstNameSpan').text(data.firstName);
  }
);
</script>
EOT;
echo "<p>Hello <span id='firstNameSpan'></span>, you are logged in!</p>";
} else {
echo <<< EOT
<p>This is the front page of Datenight!</p>
<q>Wow, Datenight is, like, totally the best!</q> - A satisfied customer
<q>Datenight rocks my socks</q> - Another satisfied customer
EOT;
}
?>
</div>
</div>


</body>
</html>
