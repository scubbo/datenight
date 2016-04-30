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
<p>Login</p>
<form>
  <input type='text' id='usernameLoginInput'></input>
  <input type='password' id='passwordLoginInput'></input>
  <input type='button' id='loginButton' value='Login'></input>
</form>
<input type='button' id='logoutButton' value='Logout'></input>
</div>

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
    });
  
    $('#logoutButton').click(function() {
      $.post(
        '/cgi-bin/logout.py',
        {},
        function(data) {
          window.location.pathname = '';
          window.location.reload();
        }
      );
    });
  });
</script>

</body>
</html>
