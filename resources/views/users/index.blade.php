@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-4 col-xs-12">
            <h3>Add a User</h3>

            @include('users.partials.form')

            <br/>
            @include('layouts.partials.donation-features')
            <br/>

        </div>

        <div class="col-sm-6 col-md-8 col-xs-12">
            <h3>Users in the system</h3>

            <div class="list" style="height: 80vh; overflow-y: auto; overflow-x: hidden; max-width: 100%;">
                <div class="row">
                    @forelse($users as $user)
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <p>{{ $loop->iteration }}. {{ $user->name }} <br/><small class="text-muted">{{ $user->email }}</small></p>
                        </div>
                    @empty
                        <p class="text-warning">No users found</p>
                    @endforelse
                </div>
            </div>
            
        </div>
        
    </div>
@stop
