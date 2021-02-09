@extends("layout.main")
@section("content")
    <div class="container" style="text-align: center">
<form method="POST" action="/register">
    <input type="text" name="name" placeholder="name" required>
    <br>
    <input type="text" name="email" placeholder="email" required>
    <br>
    <input type="text" name="password" placeholder="password" required>
    <br>
    <input type="text" name="password_confirmation" placeholder="password again">
    <br>
    <button type="submit" class="btn">Register</button>
    @csrf
</form>
<ul>
@foreach($errors->all() as $error)
    <li>{{$error}}</li>
@endforeach
</ul>
    </div>
@endsection
