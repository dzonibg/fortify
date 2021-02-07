Login.
<form method="POST" action="login">
    <input type="text" name="email" placeholder="email">
    <br>
    <input type="text" name="password" placeholder="password">
    <button type="submit">Login</button>
    @csrf
</form>
<ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
