@extends('master')

@section('content')
<h1>Service explorer</h1>
<ul>
    <li><a href="{{ route('server.index') }}">List servers</a></li>
    <li><a href="{{ route('server.create') }}">Create a server</a></li>
    <li><a href="{{ route('service.index') }}">List services</a></li>
    <li><a href="{{ route('service.create') }}">Create a service</a></li>
</ul>
@endsection
