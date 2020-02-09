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

    <input type="hidden" name="_method" value="PUT">

    <button type="submit" class="btn btn-primary">Update</button>

    @csrf
</form>

@endsection