@extends('layout.header');
    <div class="container">
        <div class="row">
            <h2>Registration Form</h2>
            <form action="{{route('register-user')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Your name" value="{{old('name')}}">
                    <span class="text-danger">@error('name'){{$message}} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Your mail" value="{{old('email')}}">
                    <span class="text-danger">@error('email'){{$message}} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Enter Your password" value="">
                    <span class="text-danger">@error('password'){{$message}} @enderror</span>
                </div><br>
                <div class="form-group">
                <button type="submit"  class="submit">Registration</button>
                </div>
                <a href="login">Already Your Account Here</a>
            </form>
        </div>
    </div>
