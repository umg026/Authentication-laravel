@extends("layout.app")

@section('content')

<div class="p-2 mt-4">
    <h1>Welcome {{Auth::user()->name}}</h1>
    <!-- <div class="mt-2 mb-3 p-2">
        {{Auth::user()}}
    </div> -->
    <button type="submit" class="btn btn-primary">
        <a href="{{route("logout")}}">logout</a></button>

</div>


@endsection