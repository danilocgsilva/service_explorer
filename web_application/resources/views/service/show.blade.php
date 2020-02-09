@extends('master')

@section('content')

<h2>{{ $service->name }}</h2>
<p>Hosted in <a href="{{ route('server.show', $service->server->id) }}">{{ $service->server->ip }}</a></p>
<p>Port: {{ $service->port }}</p>
<a class="btn btn-primary" href="{{ route('service.edit', $service->id) }}">Edit</a>
@endsection