@extends('layouts.master')

@section('content')
    @include('messenger.partials.flash')

    <div class="col-md-6 col-sm-6 col-xs-12">
        <h1>{{ $thread->subject }}</h1>
        <div id="thread_{{ $thread->id }}">
            @each('messenger.partials.messages', $thread->messages, 'message')
        </div>

        @include('messenger.partials.form-message')
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">

        <div style="overflow-y: auto; height: 50vh">
            @include('messenger.partials.thread-participants', ['participants' => $thread->participants])
        </div>

        <br/>
        @include('layouts.partials.donation-features')
        <br/>

    </div>
@stop
