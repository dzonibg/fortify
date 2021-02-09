@extends("layout.main")
@section("content")
    <div class="container">
@guest()
    You are a guest.
@endguest

@auth()
    <p>You are logged in as {{ auth()->user()->name }} </p>
@endauth
<div>
<a href="secure">Secure page.</a>
</div>
    </div>
@endsection

