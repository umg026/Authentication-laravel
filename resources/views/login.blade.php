@extends('layout.app')

@section('content')
<div class="container mt-3">
  @if (count($errors))
    <div class="alert alert-danger">
    <strong>please fix this following issues</strong>
    <ul>
      @foreach ($errors->all() as $error)
      <li> {{$error}}</li>
    @endforeach
    </ul>
    </div>
  @endif
  <form action="{{ route('login') }}" method="post">
    @csrf
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection