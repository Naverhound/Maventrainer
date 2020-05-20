

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
                  <div class="row img-adjusment" style="background-image: url('{{asset('img/logForms.png')}}');">
                  <div class="col-lg-6 d-none d-lg-block "></div> 
                    <div class="col-lg-6 bg-white">
                      <div class="p-5">
                        <div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">{{__('Welcome Back')}}!</h1>
                        </div>
                        <form class="user">
                            <div class="input-group mb-4">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="{{__('Enter Email Address or Nickname')}}">
                                <div class="input-group-append">
                                  <span class="input-group-text bg-info" id="basic-addon2"><i class="fa fa-user" aria-hidden="true"></i></span>
                                </div>
                              </div>
                              <div class="input-group mb-4">
                                <input type="password" class="form-control form-control-user id="exampleInputPassword" placeholder="{{__('Password')}}">
                                <div class="input-group-append">
                                  <span class="input-group-text bg-info" id="basic-addon2"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="custom-control custom-checkbox small ">
                                  <input type="checkbox" class="custom-control-input" id="customCheck">
                                  <label class="custom-control-label" for="customCheck">{{__('Remember Me')}}</label>
                                </div>
                              </div>
                              <div class="row">
                                <button  class="btn btn-primary btn-user btn-block">{{__('Login')}}</button>
                              </div>
                              <hr>
                              <a href="index.html" class="btn btn-google btn-user btn-block">
                                  <i class="fa fa-google" aria-hidden="true"></i> {{__('Login with')}} Google
                              </a>
                              <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                  <i class="fa fa-facebook" aria-hidden="true"></i> {{__('Login with')}} Facebook
                              </a>
                        </form>
                        <hr>
                        <div class="text-center">
                          <a class="small" href="forgot-password.html">{{__('Forgot Your Password?')}}</a>
                        </div>
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
@endsection
