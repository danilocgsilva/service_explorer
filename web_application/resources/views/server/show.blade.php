@extends('master')

@section('content')

    <a href="{{ route('server.index') }}">Go to server index</a>
    <br>
    <br>

    @if ($server->name)
        <h2>    {{ $server->name }}</h2>
    @endif

    <h3>IP: {{ $server->ip }}</h3>

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

    <br>
    <a class="btn btn-primary" href="{{ route('server.edit', $server->id) }}">Edit</a>

@endsection