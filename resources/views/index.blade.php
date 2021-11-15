@extends('layout.main')

@section('content')

<h2>Index</h2>

<div>
    <a href={{ route('user.create') }}>Create new user</a>
</div>

<table>

    <tr>
        <th>Name</th>
        <th>Mobile Number</th>
        <th>Email</th>
        <th>City</th>
        <th>State</th>
    </tr>


    @foreach ($users as $user)
        <tr>
            <td>{{ $user->Name }}</td>
            <td>{{ $user->Mobile }}</td>
            <td>{{ $user->Email }}</td>
            <td>{{ $user->City }}</td>
            <td>{{ $user->State }}</td>
            <!-- <td><a href={{ route('user.show', $user->id) }}>View Details</a></td> -->
            <td><a href={{ route('user.edit', $user->id) }}>Edit</a></td>
            <td><a href={{ route('user.destroy', $user->id) }}>Delete</a></td>
        </tr>
    @endforeach

</table>


@endsection