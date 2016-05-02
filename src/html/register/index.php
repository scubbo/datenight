<html>
<head>
<?php
  include '../../php/headImport.php';
?>
</head>

<body>
<div id="main">
<?php
  if(isset($_COOKIE['sessionId'])) {
    echo "<script type='text/javascript'>$(document).ready(function(){window.location='/';});</script>"; // i.e. - redirect back to main page!
  } else {
    echo <<< EOT
<form>
  <input type='text' id='usernameInput'></input>
  <input type='password' id='passwordInput'></input>
  <input type='button' id='submitButton' value='Register'></input>
</form>

<script type='text/javascript'>
  $(document).ready(function() {
    $('#submitButton').click(function() {
      $.post(
        '/cgi-bin/register.py',
        {
          'username':$('#usernameInput').val(),
          'password':$('#passwordInput').val()
        },
        function(data) {
          if (data.status == 'SUCCESS') {
            window.location='/';
          } else {
            if (data.failure_code == 'DUPLICATE_USERNAME') {
              alert('That username has already been taken. Try another one');
            } else {
              alert('An unknown error occurred');
            }
          }
        }
      )
    });
  });
</script>
EOT;
  }
?>
</div>
</html>
