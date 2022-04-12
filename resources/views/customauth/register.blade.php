@extends('layouts.layout')
  
@section('content')
<div class="register-form">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Register</div>
                  <div class="card-body">
  
                      <form action="{{ route('register.post') }}" method="POST" enctype='multipart/form-data'>
                          @csrf
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="name" value="{{old('name')}}" class="form-control" name="name" required />
                                  @if ($errors->has('name'))
                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">Email Address</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" value="{{old('email')}}" class="form-control" name="email" required />
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">age</label>
                              <div class="col-md-6">
                                  <input type="number" id="age" value="{{old('age')}}" class="form-control" name="age" required />
                                  @if ($errors->has('age'))
                                      <span class="text-danger">{{ $errors->first('age') }}</span>
                                  @endif
                              </div>
                          </div>
                           <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">dob</label>
                              <div class="col-md-6">
                                  <input type="date" id="dob" value="{{old('dob')}}" class="form-control" name="dob" required />
                                  @if ($errors->has('dob'))
                                      <span class="text-danger">{{ $errors->first('dob') }}</span>
                                  @endif
                              </div>
                          </div>
                           <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">address</label>
                              <div class="col-md-6">
                                  <input type="text" id="address" value="{{old('address')}}" class="form-control" name="address" required />
                                  @if ($errors->has('address'))
                                      <span class="text-danger">{{ $errors->first('address') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">role</label>
                              <div class="col-md-6">
                                  <select class="form-control" name="role" id="role" value="{{old('role')}}">
                                      <option value="A">Admin</option>
                                      <option value="U">User</option>
                                  </select>
                                  @if ($errors->has('role'))
                                      <span class="text-danger">{{ $errors->first('role') }}</span>
                                  @endif
                              </div>
                          </div>
                          
                         
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">image</label>
                              <div class="col-md-6">
                                  <input type="file" id="image" class="form-control" name="image" required />
                                  @if ($errors->has('image'))
                                      <span class="text-danger">{{ $errors->first('image') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" required />
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember"> Remember Me
                                      </label>
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Register
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection