@extends('master')

@section('content')

<form action="{{ route('service.store') }}" method="post">

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" class="form-control">
    </div>

    <div class="form-group">
      <label for="server_ip">Server IP</label>
      <input type="text" name="server_ip" id="server_ip" class="form-control">
    </div>

    <div class="form-group">
      <label for="port">Port</label>
      <input type="number" name="port" id="port" class="form-control" max="65536" min="0">
    </div>

    @csrf

    <button type="submit" class="btn btn-primary">Save</button>

</form>

@endsection