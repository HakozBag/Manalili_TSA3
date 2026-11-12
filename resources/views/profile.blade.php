@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <section class="card">
        <h2>My Profile</h2>
        <p class="subtitle">User information</p>

        <dl>
            <dt>Username</dt>
            <dd>{{ $user->username }}</dd>

            <dt>Full Name</dt>
            <dd>{{ $user->full_name }}</dd>

            <dt>Email</dt>
            <dd>{{ $user->email }}</dd>
        </dl>
    </section>
@endsection