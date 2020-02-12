@extends('master')

@section('content')

<a href="{{ route('service.index') }}">Go to index</a>
<h2>{{ $service->name }}</h2>
<p>Hosted in <a href="{{ route('server.show', $service->server->id) }}">{{ $service->server->ip }}</a></p>
<p>Port: {{ $service->port }}</p>
<p>Username: {{ $service->username }}</p>
<p>Path: {{ $service->path }}</p>
<p>Username: {{ $service->username }}</p>
<p>Password: {{ $service->password }}</p>
<a class="btn btn-primary" href="{{ route('service.edit', $service->id) }}">Edit</a>
@endsection