@extends('layouts.master')


@section('content')
    <div class="signup-container">
        <form action="{{ route('update-user', ['id'=>$object->id]) }}" method="post">
            @csrf
             <form class="signup-form">
            <h2>Edit User</h2>
            <input type="text" placeholder="Name" value="{{ $object->firstname }}" name="firstname" readonly>
            <textarea name="email">{{ $object->email }}</textarea>

            <button type="submit">Save</button>
        </form>
    </div>
@endsection


