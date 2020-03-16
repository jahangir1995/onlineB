@extends('index')

<link rel="stylesheet" href="{{asset('online/css/user.css')}}">

@section('content')
<div class="wrapper">
    <div class="form">
 
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    @if(session()->has('message'))
    <div class="alert alert-{{session('type')}}">
      {{session('message')}}
    </div>
    @endif

    <form action="{{route('register')}}" method="post">@csrf

      
        <div class="title">User Registation Form</div>
        <div class="form-group">
          <div class="inputField">
            <input type="text" name="first_name" id="first_name" class="col-md-6 input-text" placeholder="First Name" >
          </div>
          <div class="inputField">
            <input type="text" name="last_name" id="last_name" class="col-md-6 input-text" placeholder="Last Name" >
          </div>
        </div>

        <div class="inputField">
          <input type="text" name="phone_number" id="phone_number" class="col-md-6 input-text" placeholder="Phone Number" >
        </div>

        <div class="inputField">
          <input type="text" name="email" id="your_email" class="col-md-6 input-text"  pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Your Email">
        </div>

        
        <div class="inputField">
          <select name="gender" class="col-md-4">
            <option>Gender</option>
            <option value="Male">Male</option>
            <option value="Femail">Female</option>
          </select>
        </div>

        <div class="inputField">
          <input type="password" name="password" id="password" class="col-md-6 input-text" placeholder="password">
        </div>

        <div class="inputField">
          <input type="password" name="password_confirmation" id="confirm_password" class="col-md-6 input-text" placeholder="confirm password">
        </div>
      


        <h4>Contact Details</h4>

        <div class="inputField">
          <select name="division" class="col-md-4">
            <option >Division</option>
            <option value="1">Dhaka</option>
            <option value="2">Khulna</option>
            <option value="3">Rajshahi</option>
          </select>
        </div>
        

        <div class="inputField">
          <select name="district" class="col-md-4">
            <option>District</option>
            <option value="1">Dhaka</option>
            <option value="2">Kishoreganj</option>
            <option value="3">Khulna</option>
          </select>

        </div>
        
        <div class="inputField">
          <select name="thana" class="col-md-4">
            <option>Thana</option>
            <option value="1">Pakunida</option>
            <option value="2">Koremganj</option>
            <option value="3">Hosanpur</option>
          </select>

        </div>
        
        <div class="inputField">
          <input type="text" name="postoffice" id="address" class="col-md-6 input-text" placeholder="Post Office">
        </div>
        
        <div class="inputField">
          <input type="text" name="village" id="address" class="col-md-6 input-text" placeholder="Village">
        </div>
        
        <div class="form-row-last">
          <input type="submit" value="Register" class="btn btn-default">
        </div>
        <div class="form-checkbox">
          <label class="container"><p>Have you an Account? <a href="{{route('user-login')}}" class="text">Login</a></p>
            
          </label>
        </div>

    </form>
  </div>
</div>


@endsection()