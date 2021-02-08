@extends("layout.main")
@section("content")
<div>
    <a href="/login">Login</a>
    <br>
    <a href="/register">Register</a>
</div>
@guest()
    You are a guest.
@endguest

@auth()
    You are logged in as {{ auth()->user()->name }}
    <br>
    <a href="/update">Update user info</a>
    <form method="POST" action="{{ route('logout') }}" name="logout">
        @csrf
        <a href="#" onclick="document.logout.submit();">Logout</a>
    </form>
@endauth
<div>
<a href="secure">Secure page.</a>
</div>

    <div>
        <li><a href="#home">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#contact">Contact</a></li>
    </div>


@endsection

