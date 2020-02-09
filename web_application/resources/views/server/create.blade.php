@extends('master')

@section('content')

<h2>Create a server</h2>

<form action="{{ route('server.store') }}" method="post">

    <div class="form-group">
      <label for="ip">Server IP</label>
      <input type="text" name="ip" id="ip" class="form-control" aria-describedby="helpId">
    </div>

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

    @csrf
</form>

@endsection