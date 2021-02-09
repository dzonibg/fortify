@extends("layout.main")
@section("content")
    <div class="container">
@guest()
    You are a guest.
@endguest

@auth()
    <div class="card">
    <p>You are logged in as {{ auth()->user()->name }} </p>
    </div>
@endauth
<div>
<a href="secure">Secure page.</a>
</div>
    </div>
@endsection

