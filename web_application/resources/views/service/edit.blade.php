@extends('master')

@section('content')

<form action="{{ route('service.update', $service->id) }}" method="post">

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" class="form-control" value="{{ $service->name }}">
    </div>

    <div class="form-group">
      <label for="port">Port</label>
      <input type="text" name="port" id="port" class="form-control" value="{{ $service->port }}">
    </div>

    <div class="form-group">
      <label for="path">Path</label>
      <input type="text" name="path" id="path" class="form-control" value="{{ $service->path }}">
    </div>

    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" name="username" id="username" class="form-control" value="{{ $service->username }}">
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="text" name="password" id="password" class="form-control" value="{{ $service->password }}">
    </div>

    <input type="hidden" name="_method" value="PUT">

    <button type="submit" class="btn btn-primary">Update</button>

    @csrf
</form>

@endsection