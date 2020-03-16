<!DOCTYPE html>
<html>
<head>
  <title>
  </title>
  <link href="{{asset('online/css/login.css')}}" rel="stylesheet" type="text/css">
</link>
</head>
<body>
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <p>
    <?php
    $message = Session::get('message');
   
    if($message){
      echo "<div class='bg-primary'>$message</div> ";
      Session::put('message',NULL);
    }
    ?>
  </p>

    <form action="{{route('user-login')}}" method="post">
      @csrf
      <div class="login">
        <div class="loginHeader">
          User Login
        </div>
        <div class="LoginContainer">
          <table>
            <tr>
              <td>
                Email
              </td>
              <td>
                :
              </td>
              <td>
                <input name="user_email" type="text" value="{{ old('user_email') }}"/>
              </td>
            </tr>
            <tr>
              <td>
                Password
              </td>
              <td>
                :
              </td>
              <td>
                <input name="user_password" type="password"/>
              </td>
            </tr>
            <tr>
              <td>
              </td>
              <td>
              </td>
              <td>
                <button class="addBtn" name="login" type="submit">
                  Login
                </button>
                <button class="addBtn">
                  <a href="{{URL::to('/')}}">
                    Back
                  </a>
                </button>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </form>
