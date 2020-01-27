@extends('master')

@section('content')

@if (count($servers) > 0)
    <p>Exists</p>
@else
    <p>Still there's no Server registered in the database.</p>
@endif

@endsection