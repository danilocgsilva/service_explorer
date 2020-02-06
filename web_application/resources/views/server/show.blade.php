@extends('master')

@section('content')

    <a href="{{ route('server.index') }}">Go to server index</a>
    <br>
    <br>

    <h2>Server IP: {{ $server->ip }}</h2>

    @if ($server->services->count() > 0)
        <p>Services hosted in this server:</p>
        <ul>
        @foreach ($server->services as $service)
            <li>{{ $service->name }}</li>
        @endforeach
        </ul>
    @else
        No services registered in this server.
    @endif

@endsection