@extends('master')

@section('content')

@if (count($services) > 0)
    <p>There are services registered in the system</p>
@else
    <p>There's still no service registered in the system.</p>
@endif

@endsection