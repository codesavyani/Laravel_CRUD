@extends('layout.form')

@section('heading')
Edit
@endsection

@section('route')
{{ route('user.update', $user->id) }}
@endsection

@section('method')
@method('PUT')
@endsection