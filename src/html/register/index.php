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
  <h3>Login details</h3>
  <label for='usernameInput'>Username:</label><input type='text' id='usernameInput'></input>
  <label for='passwordInput'>Password:</label><input type='password' id='passwordInput'></input>
  <h3>Person details</h3>
  <label for='firstNameInput'>First Name:</label><input type='text' id='firstNameInput'></input>
  <label for='lastNameInput'>Last Name:</label><input type='text' id='lastNameInput'></input>
  <h3>Interests</h3>
  <p>Check all the below that you are interested in:</p>
  <input type='checkbox' name='likesDancing' id='likesDancingCheckBox'>Dancing</input>
  <input type='checkbox' name='likesDrinking' id='likesDrinkingCheckBox'>Drinking</input>
  <input type='checkbox' name='likesMusicals' id='likesMusicalsCheckBox'>Musicals</input>
  
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
          'lastName':$('#lastNameInput').val(),
          'likesDancing':$('#likesDancingCheckBox').is(':checked'),
          'likesDrinking':$('#likesDrinkingCheckBox').is(':checked'),
          'likesMusicals':$('#likesMusicalsCheckBox').is(':checked')
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
