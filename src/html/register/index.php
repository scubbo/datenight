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
  <label for='usernameInput'>Username:</label><input type='text' id='usernameInput'></input>
  <label for='passwordInput'>Password:</label><input type='password' id='passwordInput'></input>
  <label for='firstNameInput'>First Name:</label><input type='text' id='firstNameInput'></input>
  <label for='lastNameInput'>Last Name:</label><input type='text' id='lastNameInput'></input>
  <input type='button' id='submitButton' value='Register'></input>
</form>

<script type='text/javascript'>
  $(document).ready(function() {
    $('#submitButton').click(function() {
      $.post(
        '/cgi-bin/register.py',
        {
          'username':$('#usernameInput').val(),
          'password':$('#passwordInput').val(),
          'firstName':$('#firstNameInput').val(),
          'lastName':$('#lastNameInput').val()
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
