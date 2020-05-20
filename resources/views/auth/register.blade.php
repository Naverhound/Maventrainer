@extends('layouts.app', ['meta_title'=>'Register'])

@section('content')     
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">                         
<link rel="stylesheet" href="{{asset('css/custom.css')}}">              
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row img-adjustment" style="background-image: url('{{asset('img/saido.gif')}}');">
              <div class="col-lg-6 d-none d-lg-block "></div> 
              <div class="col-lg-6 bg-white">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">{{__('Join to the family')}}!</h1>
                  </div>
                    <ul class="nav nav-tabs mb-3 row" id="tabs" role="tablist">
                        <li class="nav-item">
                        <a class="nav-link active" id="user-tab" data-toggle="tab" href="#user" role="tab" aria-controls="pills-home" aria-selected="true">{{__('As User')}}</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" id="trainer-tab" data-toggle="tab" href="#trainer" role="tab" aria-controls="pills-profile" aria-selected="false">{{__('As Trainer')}}</a>
                        </li>
                    </ul>
                    <div class="tab-content " id="pills-tabContent">
                        <div class="tab-pane  fade show active " id="user" role="tabpanel" aria-labelledby="user-tab" style="opacity: 1">
                            <form class="user" method="POST" action="/register" >
                                @csrf
                                <div class="row">
                                    <div class="input-group mb-4">
                                        <input name="nick" type="text"  class="@error('nick') is-invalid @enderror form-control form-control-user" id="nick" aria-describedby="nickname" placeholder="{{__('Nickname')}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-info" id="basic-addon2"><i class="fas fa-file-signature"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">                                  
                                    @error('nick')
                                    <span class="invalid-tootip" role="alert">
                                      <strong>{{$message}}</strong>
                                    </span>
                                    @enderror
                                </div>                                
                                <div class="row">
                                    <div class="input-group mb-4 col-md-6">
                                        <input name="password" type="password" class="@error('password') is-invalid @enderror form-control form-control-user id="exampleInputPassword" placeholder="{{__('Password')}}">
                                        <div class="input-group-append">
                                        <span class="input-group-text bg-info" id="basic-addon2"><i class="fa fa-user-secret" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                    <div class="input-group mb-4 col-md-6">
                                        <input name="password_confirmation" type="password" class="@error('password_confirmation') is-invalid @enderror form-control form-control-user id="exampleInputPassword" placeholder="{{__('Repeat Password')}}">
                                        <div class="input-group-append">
                                        <span class="input-group-text bg-info" id="basic-addon2"><i class="fas fa-user-secret    "></i><i class="fas fa-user-secret    "></i></span>
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="row">                                    
                                  @error('password')
                                    <span class="invalid-tootip" role="alert">
                                      <strong>-{{$message}}</strong>
                                    </span>
                                  @enderror
                                  @error('password_confirmation')
                                    <span class="invalid-tootip" role="alert">
                                      <strong>-{{$message}}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="row">
                                    <div class="input-group mb-4 col-md-6">
                                        <input name="name" type="text" class="@error('name') is-invalid @enderror form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="{{__('Names')}}">
                                        <div class="input-group-append">
                                        </div>                                        
                                    </div>
                                    <div class="input-group mb-4 col-md-6">
                                        <input name="lastname" type="text" class="@error('lastname') is-invalid @enderror form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="{{__('Last Names')}}">
                                        <div class="input-group-append">
                                        </div>                                        
                                    </div>
                                </div>
                                <div class="row">
                                  @error('name')
                                    <span class="invalid-tootip" role="alert">
                                      <strong>-{{$message}}</strong>
                                    </span>
                                  @enderror
                                  @error('lastname')
                                    <span class="invalid-tootip" role="alert">
                                      <strong>-{{$message}}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="row">
                                    <div class="input-group mb-4">
                                        <input name="email" type="email" class="@error('email') is-invalid @enderror form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="{{__('Email')}}">
                                        <div class="input-group-append">
                                          <span class="input-group-text bg-info" id="basic-addon2"><i class="fa fa-user" aria-hidden="true"></i></span>
                                        </div>                                        
                                    </div>
                                </div> 
                                <div class="row">
                                  @error('email')
                                    <span class="invalid-tootip" role="alert">
                                      <strong>{{$message}}</strong>
                                    </span>
                                  @enderror
                                </div>     
                                <div class="row">
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                          <input name="imgp" type="file" class="@error('imgp') is-invalid @enderror custom-file-input custom-file-label" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                          <label class="custom-file-label" for="inputGroupFile01">{{__('Choose Profile Pick')}}</label>
                                        </div>
                                      </div>    
                                </div>
                                <div class="row">
                                  @error('imgp')
                                        <span class="invalid-tootip" role="alert">
                                          <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                </div>
                                <div class="row">
                                    <button class="btn btn-primary btn-user btn-block">{{__('Register')}}</button>
                                </div>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fa fa-google" aria-hidden="true"></i> {{__('Login with')}} Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fa fa-facebook" aria-hidden="true"></i> {{__('Login with')}} Facebook
                                </a>
                            </form>
                        </div>
                        <div class="tab-pane fade " id="trainer" role="tabpanel" aria-labelledby="trainer-tab" style="opacity: 1">
                            <form class="trainer" method="POST" action="/register" >
                                @csrf
                                <input type="hidden" name="trainer">
                                <div class="row">
                                    <div class="input-group mb-4">
                                        <input name="nick" type="text"  class="@error('nick') is-invalid @enderror form-control form-control-user" id="nick" aria-describedby="nickname" placeholder="{{__('Nickname')}}">
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-info" id="basic-addon2"><i class="fas fa-file-signature"></i></span>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="row">                                  
                                  @error('nick')
                                    <span class="invalid-tootip" role="alert">
                                      <strong>{{$message}}</strong>
                                    </span>
                                  @enderror
                                </div> 
                                <div class="row">
                                    <div class="input-group mb-4 col-md-6">
                                        <input name="password" type="password" class="@error('password') is-invalid @enderror form-control form-control-user id="exampleInputPassword" placeholder="{{__('Password')}}">
                                        <div class="input-group-append">
                                        <span class="input-group-text bg-info" id="basic-addon2"><i class="fa fa-user-secret" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                    <div class="input-group mb-4 col-md-6">
                                        <input name="password_confirmation" type="password" class="@error('password_confirmation') is-invalid @enderror form-control form-control-user id="exampleInputPassword" placeholder="{{__('Repeat Password')}}">
                                        <div class="input-group-append">
                                        <span class="input-group-text bg-info" id="basic-addon2"><i class="fas fa-user-secret"></i><i class="fas fa-user-secret    "></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">                                  
                                  @error('password')
                                    <span class="invalid-tootip" role="alert">
                                      <strong>{{$message}}</strong>
                                    </span>
                                  @enderror
                                  @error('password_confirmation')
                                    <span class="invalid-tootip" role="alert">
                                      <strong>{{$message}}</strong>
                                    </span>
                                  @enderror
                              </div> 
                                <div class="row">
                                    <div class="input-group mb-4 col-md-6">
                                        <input name="name" type="text" class="@error('name') is-invalid @enderror form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="{{__('Names')}}">
                                        <div class="input-group-append">
                                        </div>
                                    </div>
                                    <div class="input-group mb-4 col-md-6">
                                        <input name="lastname" type="text" class="@error('lastname') is-invalid @enderror form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="{{__('Last Names')}}">
                                        <div class="input-group-append">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                  @error('name')
                                    <span class="invalid-tootip" role="alert">
                                      <strong>{{$message}}</strong>
                                    </span>
                                  @enderror
                                  @error('lastname')
                                    <span class="invalid-tootip" role="alert">
                                      <strong>{{$message}}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="row">
                                    <div class="input-group mb-4 col-md-6">
                                        <input name="state" type="text" class="@error('state') is-invalid @enderror form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="{{__('State')}}">
                                        <div class="input-group-append">
                                        </div>
                                    </div>
                                    <div class="input-group mb-4 col-md-6">
                                        <input name="city" type="text" class="@error('city') is-invalid @enderror form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="{{__('City/Municipality')}}">
                                        <div class="input-group-append">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                  @error('state')
                                    <span class="invalid-tootip" role="alert">
                                      <strong>{{$message}}</strong>
                                    </span>
                                  @enderror
                                  @error('city')
                                    <span class="invalid-tootip" role="alert">
                                      <strong>{{$message}}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="row">
                                    <div class="input-group mb-4">
                                        <input name="email" type="email" class="@error('email') is-invalid @enderror form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="{{__('Email')}}">
                                        <div class="input-group-append">
                                          <span class="input-group-text bg-info" id="basic-addon2"><i class="fa fa-user" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </div> 
                                <div class="row">
                                  @error('email')
                                    <span class="invalid-tootip" role="alert">
                                      <strong>{{$message}}</strong>
                                    </span>
                                  @enderror
                                </div>
                                <div class="row">
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                          <input name="imgp" type="file" class="@error('imgp') is-invalid @enderror custom-file-input custom-file-label" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                          <label class="custom-file-label" for="inputGroupFile01">{{__('Choose Profile Pick')}}</label>
                                        </div>
                                      </div>    
                                </div>
                                <div class="row">
                                  @error('imgp')
                                    <span class="invalid-tootip" role="alert">
                                      <strong>{{$message}}</strong>
                                    </span>
                                  @enderror
                                </div> 
                                <div class="row">
                                  <div class="input-group mb-3">
                                      <div id="dropzone" class="dropzone needsclick dz-clickable">
                                          <div class="dz-message needsclick download-custom">
                                                <i class="fa fa-cloud-download" aria-hidden="true"></i>
                                                <h2>{{__('Drop files here or click to upload')}}</h2>
                                                <input name="certificates" type="file" multiple>
                                                <p><span class="note needsclick">({!!__('This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.')!!})</span>
                                                </p>
                                            </div>
                                      </div>
                                    </div>    
                                </div>                               
                                <div class="row">
                                    <button type="submit" class="btn btn-primary btn-user btn-block"> {{__('Register')}}</button>
                                </div>                            
                            </form>
                        </div>
                    </div>                    
                  <hr>                                    
                  <div class="text-center">
                    @include('auth.authlinks')
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</div>
<script src="https://kit.fontawesome.com/72055bc791.js" crossorigin="anonymous"></script>
@endsection
