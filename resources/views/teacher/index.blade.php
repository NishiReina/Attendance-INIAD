@extends('layouts.default')

@section('content')

@foreach($attendances as $attendance)
<div class="attendance">
    <p class="student__name">{{$attendance->user->name}}</p>
    <p class="student__email">{{$attendance->user->email}}</p>
    <p class="day">{{$attendance->created_at}}</p>
</div>

@endforeach

@endsection