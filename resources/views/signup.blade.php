@extends('layout.app')

@section('content')
<div class="container mt-3">
  
  <form action="{{ route('register') }}" method="POST">
    @csrf
  <div class="mb-3 mt-3">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
    <div class="mb-3">
      <label for="pwd">Confirm Password:</label>
      <input type="password" class="form-control" placeholder="Enter confrim password" name="password_confirmation">
    </div>
    <div class="mb-3">
      <a href="{{ route('login') }}">already user ? login here</a>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection