@extends('layouts.master')



@section('content')
<form style="display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column; " method="post" action="{{route('registerForm')}}">
   @csrf
    <label for="firstname">First Name:</label>
    <input type="text" id="firstname" name="firstname">

    @error('firstname')
        <div class="alert alert-danger">{{ $message }}</div>
     @enderror

    <label for="lastname">Last Name:</label>
    <input type="text" id="lastname" name="lastname">


    @error('lastname')
        <div class="alert alert-danger">{{ $message }}</div>
     @enderror

 

    <label for="email">Email:</label>
    <input type="input" id="email" name="email">

    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
     @enderror

    <label for="password">Password:</label>
    <input type="password" id="password" name="password">

    @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
     @enderror

    <label for="password">Confirm Password:</label>
    <input type="password" id="password" name="confirmPassword">

    @error('confirmPassword')
        <div class="alert alert-danger">{{ $message }}</div>
     @enderror

    <label for="gender">Gender:</label>
    <select id="gender" name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>

    @error('gender')
        <div class="alert alert-danger">{{ $message }}</div>
     @enderror

    <label for="role">Role:</label>
    <select id="role" name="role" required>
        <option value="Admin">Admin</option>
        <option value="User">User</option>
    </select>

    @error('role')
        <div class="alert alert-danger">{{ $message }}</div>
     @enderror

        
        <form><button>register</button></form>

</form>




@endsection




@section('customcss')

@endsection


