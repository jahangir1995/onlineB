<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="{{asset('online/css/login.css')}}">
</head>
<body>

  <p>
    <?php
    $message = Session::get('message');
    if($message){
      echo "<div class='bg-primary'>$message</div> ";
      Session::put('message',NULL);
    }
    ?>
  </p>
  <form action="{{URL('/admin-login')}}" method="post">@csrf
   <div class="login">
    <div class="loginHeader">
      Admin Login
    </div>
    <div class="LoginContainer">
      <table>
        <tr>
          <td>Email</td>
          <td>:</td>
          <td><input type="text" name="admin_email"></td>
        </tr>

        <tr>
          <td>Password</td>
          <td>:</td>
          <td><input type="password" name="admin_password"></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><button type="login" name="login" class="addBtn">Login</button></td>
        </tr>
      </table>
    </div>
  </div>
</form>

</body>
</html>


