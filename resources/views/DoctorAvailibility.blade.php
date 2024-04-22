<!-- @extends('layouts.master')



@section('content')
<form style="display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column; " method="post" action="{{route('addSchedule')}}">
    @csrf

    @foreach($dr as $dr)
        <select name="doctor" id="doctor">
            <option value="doctor">{{$dr->name}}</option>
        </select>
    @endforeach

    <input type="datetime-local" name="startdate" placeholder="Start Date">
    <input type="datetime-local" name="enddate" placeholder="End Date">

    <form><button>register</button></form>

</form>




@endsection




@section('customcss')

@endsection -->