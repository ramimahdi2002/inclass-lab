@extends('layouts.master')

@section('customcss')



@endsection


@section('content')
<form method="POST" action="{{ route('register.user') }}">
    @csrf
    <label for="firstname">First Name:</label>
    <input type="text" id="firstname" name="firstname">

    <label for="lastname">Last Name:</label>
    <input type="text" id="lastname" name="lastname">
    @error('lastname')
        <div class="alert alert-danger">{{ $message }}</div>
     @enderror
 

    <label for="email">Email:</label>
    <input type="input" id="email" name="email">

    <label for="password">Password:</label>
    <input type="password" id="password" name="password">

    <label for="password">Confirm Password:</label>
    <input type="password" id="password" name="confirmPassword">

    <label for="gender">Gender:</label>
    <select id="gender" name="gender" required>
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>

        
        <form><button>register</button></form>

</form>

@endsection