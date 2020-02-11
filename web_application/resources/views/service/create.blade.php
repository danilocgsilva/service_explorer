@extends('master')

@section('content')

Register any resource reachable by web.

<br>
<br>

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

    <div class="form-group">
      <label for="path">Path (optional)</label>
      <input type="text" name="path" id="path" class="form-control">
    </div>

    <div class="form-group">
      <label for="username">Username (optional)</label>
      <input type="text" name="username" id="username" class="form-control">
    </div>

    <div class="form-group">
      <label for="password">Password (optional)</label>
      <input type="text" name="password" id="password" class="form-control">
    </div>

    @csrf

    <button type="submit" class="btn btn-primary">Save</button>

</form>

@endsection