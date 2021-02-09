<link href="{{ asset("style/app.css") }}" rel="stylesheet">
 <div>

<ul class="menu">
    <li><a href="/login">Login</a></li>
    <li><a href="/register">Register</a></li>
    <form method="POST" action="{{ route('logout') }}" name="logout">
        @csrf
        <li><a href="#" onclick="document.logout.submit();">Logout</a></li>
    </form>
</ul>

 </div>

@yield("content")
