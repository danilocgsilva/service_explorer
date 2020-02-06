@extends('master')

@section('content')

@if (count($servers) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Server IP</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servers as $server)
                <tr>
                    <td><a href="{{ route('server.show', $server->id) }}">{{ $server->ip }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>Still there's no Server registered in the database.</p>
@endif

@endsection