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
    <form method="POST" action="{{ route('logout') }}" name="logout">
        @csrf
        <a href="#" onclick="document.logout.submit();">Logout</a>
    </form>
@endauth
<div>
<a href="secure">Secure page.</a>
</div>
