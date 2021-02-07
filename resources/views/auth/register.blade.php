Register.
<form method="POST" action="/register">
    <input type="text" name="name" placeholder="name">
    <br>
    <input type="text" name="email" placeholder="email">
    <br>
    <input type="text" name="password" placeholder="password">
    <br>
    <input type="text" name="password_confirmation" placeholder="password again">
    <button type="submit">Register</button>
    @csrf
</form>
<ul>
@foreach($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach
</ul>
