<div id="header">
<div id="leftOfHeader"><span id="datenightInHeader">Datenight</span></div>
<div id="rightOfHeader">
<?php
if(!isset($_COOKIE['sessionId'])) {
  echo "<a href='/register'>Sign up</a>";
  echo "Sign In";
} else {
  echo "sessionId is " . $_COOKIE['sessionId'];
}
?>
</div>
</div>
