<link href="{{ asset("style/app.css") }}" rel="stylesheet">
 <div>
<ul class="menu">
        <li><a href="/">Main</a></li>
    @guest()
        <li class="auth"><a href="/login">Login</a></li>
        <li class="auth"><a href="/register">Register</a></li>
        @csrf
            @endguest
            @auth()
            <form method="POST" action="{{ route('logout') }}" name="logout">
                @csrf
            <li class="auth"><a href="#" onclick="document.logout.submit();">Logout</a></li>
        </form>
            @endauth
</ul>
 </div>

@yield("content")
