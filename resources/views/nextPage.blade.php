@extends('layouts.master')

@section('content')

    <div>

        <a href="{{route('register.user')}}">Click here to add a new user</a>

        <table>
            <tr>
                <th>firstName</th>
                <th>lastName</th>
                <th>Email</th>
                <th>Gender</th>
            </tr>

            @foreach($data as $user)
                <tr>
                    <td>{{$user->firstname}}</td>
                    <td>{{$user->lastname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->gender}}</td>
                    <td>
                        <a href="{{route('delete-user',['id'=>$user->id])}}" >delete</a>
                        <a href="{{route('edit-user',['id'=>$user->id])}}" >edit</a>
                    </td>
                        
                </tr>
            @endforeach


        </table>


    </div>

@endsection