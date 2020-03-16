@extends('index')
@section('content')
<div class="container">
    
        <div class="profilebody">
            <h3 id="title">
                Your Information
            </h3>
           
          @if(Session('id'))
           <?php 
            $data = Session::get('name');
           ?>
        
        @endif
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="col-md-8" disabled="" value="{{$data}}" name="">
                        
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="col-md-8" disabled="" name="">
                        
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" disabled="" class="col-md-8" name=""> 
                    </div>
                </div>
                <div class="col-md-6">
                	<div class="form-group">
                        <label>Email Address</label>
                        <input type="text" disabled="" name="">
                        
                    </div>
                </div>
            </div>
        </div>
    
</div>
@endsection
