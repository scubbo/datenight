<div id="header">
<div id="leftOfHeader"><span id="datenightInHeader">Datenight</span></div>
<div id="rightOfHeader">
<?php
if(!isset($_COOKIE['sessionId'])) {
  echo <<< EOT
<a href='/register'>Sign up</a>
<form>
  <input type='text' id='usernameLoginInput'></input>
  <input type='password' id='passwordLoginInput'></input>
  <input type='button' id='loginButton' value='Login'></input>
</form>
<script type='text/javascript'>
  $(document).ready(function() {
  
    $('#loginButton').click(function() {
      $.post(
        '/cgi-bin/login.py',
        {
          'username':$('#usernameLoginInput').val(),
          'password':$('#passwordLoginInput').val()
        },
        function(data) {
          if (data['status'] == 'SUCCESS') {
            window.location.pathname = '';
            window.location.reload();
          } else {
            window.alert('Your username or password was wrong');
          }
        }
      );
    })
  });
</script>
EOT;
} else {
  echo <<< EOT
<input type='button' id='logoutButton' value='Logout'></input>
<script type='text/javascript'>
  $(document).ready(function() {
    $('#logoutButton').click(function() {
      $.post(
        '/cgi-bin/logout.py',
        function(data) {
          window.location.reload(true);
        },
        'text'
      );
    });
  });
</script>
EOT;
  echo "sessionId is " . $_COOKIE['sessionId'];
}
?>
</div>
</div>
