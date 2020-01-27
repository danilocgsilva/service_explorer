@extends('master')

@section('content')

<h1>Login</h1>

<form action="{{ route('login') }}" method="post">

    <div class="form-group">
        <label for="email">E-mail</label>
        <input
            type="text" 
            class="form-control @error('email') is-invalid @enderror" 
            name="email" 
            id="email" 
            aria-describedby="email">
        @error('email')
            <small id="emailHelp" class="form-text text-danger">
                {{ $message }}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input 
            type="password" 
            class="form-control @error('password') is-invalid @enderror" 
            name="password" 
            id="password" 
            aria-describedby="helpId" 
            placeholder="">
        @error('password')
            <small id="emailHelp" class="form-text text-danger" style="color: #f00">
                {{ $message }}</small>
        @enderror
    </div>

    @csrf

    <button type="submit" class="btn btn-primary">Submit</button>

</form>


@endsection
