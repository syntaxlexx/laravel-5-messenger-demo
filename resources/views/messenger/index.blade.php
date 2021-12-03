@extends('layouts.master')

@section('content')
    @include('messenger.partials.flash')

    <div>
        <div style="float:right; margin-left: 20px;">
            <br/>
            @include('layouts.partials.donation-features')
            <br/>
        </div>

        @each('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads')
    </div>
@stop
