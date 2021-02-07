<h1>Welcome.</h1>
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
    <form method="POST" action="{{route('logout')}}">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endauth
