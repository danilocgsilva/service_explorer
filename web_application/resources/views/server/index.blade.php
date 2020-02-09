@extends('master')

@section('content')

@if (count($servers) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">IP</th>
                <th scope="col">Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servers as $server)
                <tr>
                        <td>{{ $server->ip }}</td>
                        <td>{{ $server->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>Still there's no Server registered in the database.</p>
@endif

@endsection