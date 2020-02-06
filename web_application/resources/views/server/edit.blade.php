@extends('master')

@section('content')

<h2>Edit server {{ $server->ip }}</h2>

<form action="{{ route('server.update', $server->id) }}" method="post">

    <div class="form-group">
        <label for="ip">Server ip</label>
        <input type="text" name="ip" id="ip" class="form-control" placeholder="{{ $server->ip }}">
    </div>

    <div class="form-group">
        <label for="name">Server name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="{{ $server->name }}">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>

    @csrf
</form>

@endsection