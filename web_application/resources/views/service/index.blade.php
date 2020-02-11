@extends('master')

@section('content')

@if (count($services) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Server</th>
                <th scope="col">Port</th>
                <th scope="col">Path</th>
                <th scope="col">Username</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td><a href="{{ route('service.show', $service->id) }}">{{ $service->name }}</a></td>
                    <td><a href="{{ route('server.show', $service->server->id) }}">{{ $service->server->ip }}</a></td>
                    <td>{{ $service->port }}</td>
                    <td>{{ $service->path }}</td>
                    <td>{{ $service->username }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>There's still no service registered in the system. You can <a href="{{ route('service.create') }}">create one</a>.</p>
@endif

@endsection