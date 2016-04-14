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
<p>Hello world!</p>
<form>
  <input type='text' id='usernameInput'></input>
  <input type='password' id='passwordInput'></input>
  <input type='button' id='submitButton' value='Enter'></input>
</form>
</div>

<script type='text/javascript'>
  $('#submitButton').click(function() {
    $.post(
      '/cgi-bin/createUser.py',
      {
        'username':$('#usernameInput').val(),
        'password':$('#passwordInput').val()
      },
      function(data) {
        console.log(data);
      }
    )
  });
</script>

</body>
</html>
