@extends('layout.main')

@section('content')

<h2>Details</h2>

<br>Id : {{ $user->id }}
<br>Name : {{ $user->Name }}
<br>Mobile Number : {{ $user->Mobile }}
<br>Email : {{ $user->Email }}
<br>City : {{ $user->City }}
<br>State : {{ $user->State }}


@endsection