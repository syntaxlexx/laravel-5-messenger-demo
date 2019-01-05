@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-4 col-xs-12">
            <h3>Users in the system</h3>

            <ol>
                @forelse($users as $user)
                    <li>{{ $user->name }} <br/><small class="text-muted">{{ $user->email }}</small></li>
                @empty
                    <p class="text-warning">No users found</p>
                @endforelse
            </ol>
        </div>
        <div class="col-sm-6 col-md-4 col-xs-12">
            <h3>Add a User</h3>

            @include('users.partials.form')

        </div>
    </div>
@stop
