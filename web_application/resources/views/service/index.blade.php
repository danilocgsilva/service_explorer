@extends('master')

@section('content')

@if (count($services) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Port</th>
                <th scope="col">Server</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->port }}</td>
                    <td><a href="{{ route('server.show', $service->server->id) }}">{{ $service->server->ip }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>There's still no service registered in the system.</p>
@endif

@endsection