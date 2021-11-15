@extends('layout.main')

@section('content')

<h2>Create</h2>

<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name">
    <br>
    <label for="mobile">Mobile Number</label>
    <input type="text" name="mobile">
    <br>
    <label for="email">Email</label>
    <input type="text" name="email">
    <br>
    <label for="city">City</label>
    <input type="text" name="city">
    <br>
    <label for="state">State</label>
    <input type="text" name="state">
    <br>
    <button type="submit">Submit</button>
</form>

@endsection