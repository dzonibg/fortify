@extends("layout.main")
@section("content")
<div class="container">
    <form method="POST" action="{{ route("user-profile-information.update") }}">
        @method("PUT")

        @csrf
        <label for="email">E-mail </label>
        <input type="text" name="email" value="{{ auth()->user()->email }}">
        <br><br>
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ auth()->user()->name }}">
        <br><br>
        <button type="submit">Update info</button>
    </form>


<ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
</div>
@endsection
