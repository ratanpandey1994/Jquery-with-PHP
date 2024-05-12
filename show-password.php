<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Login</h2>
  <form id="login-form">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <button type="button" id="show_password">Hide</button>
  </form>
</div>
<script>
  $(document).ready(function(){
    $("#show_password").on('click', function(){
      var passwordField = $('#pwd');
      var passwordFiledType = passwordField.attr('type');
    })
    if( passwordFiledType == 'password'){
      passwordField.attr('type', 'text');
      $(this).text('Hide');
    }else {
      passwordField.attr('type', 'password');
      $(this).text('Show');
    }
  });
</script>
</body>
</html>
