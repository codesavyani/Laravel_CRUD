@extends('layout.main')

@section('content')

<h2>@yield('heading')</h2>


<form action=@yield('route') method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" value={{ empty($user)?'':$user->Name }}>
    <br>
    <label for="mobile">Mobile Number</label>
    <input type="text" name="mobile" value={{ empty($user)?'':$user->Mobile }}>
    <br>
    <label for="email">Email</label>
    <input type="text" name="email" value={{ empty($user)?'':$user->Email }}>
    <br>
    <label for="city">City</label>
    <input type="text" name="city" value={{ empty($user)?'':$user->City }}>
    <br>
    <label for="state">State</label>
    <input type="text" name="state" value={{ empty($user)?'':$user->State }}>
    <br>
    <button type="submit">Submit</button>
    @yield('method')
</form>

@endsection