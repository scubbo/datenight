<html>
<head>
<?php
  include '../../php/headImport.php';
?>
<link rel='stylesheet' type='text/css' href='/assets/letsGetStarted.css' />
</head>

<body>

<div id="main">
<div id="body">
<div id="aboutDateNightDiv">
  <p>
  Date Night is a unique experience where we plan a date for you and your partner that is a complete surprise for you both until the night. Tell us about yourselves and we base it around things we think you'll love. You will then be sent a dress code a few days before when we will also let you know either when your taxi will arrive at your door to take you to the first secret location or where to meet at your chosen time. Let us do the organising while you get ready, let the excitement build and plan for the unknown...
  </p>
</div>

<form id="infoForm">
<div id="infoDiv">
  <div id="dateDiv">
    <h2>When would you like to go?</h2>
    <input type="date" name="date" />
  </div>

  <div id="howLongDiv">
    <h2>How long for?</h2>
    <label for="startTime">Choose start time</label><input name="startTime" type="time"></input><br/>
    <label for="endTime">Choose end time</label><input name="endTime" type="time"></input>
  </div>

  <div id="budgetDiv">
    <h2>What is your budget for both of you? (Not including DateNight fee)</h2>
    <input name="budget"></input>
    <input type="button" value="Next" id="next"></input>
  </div>
</div>
</form>

<script type="text/javascript">
  $(document).ready(function() {
    $('#next').click(function() {
      $.post('/cgi-bin/createUser.py',
        {
          'data': $('#infoForm').serialize()
        },
        function(data) {
          window.location.assign('/interests');
        }
      )
    });
  });
</script>

</div>
</div>
</body>
</html>
