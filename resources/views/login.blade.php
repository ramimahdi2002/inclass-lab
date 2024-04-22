@extends('layouts.master')

@section('content')
<form style="display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;" method="POST" action="{{ route('login.check') }}">
    @csrf  <!-- Ensure CSRF token is included for form security -->

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit">Login</button>
</form>
@endsection

@section('customcss')
@endsection
