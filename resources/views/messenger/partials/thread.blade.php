<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>

<div class="media alert {{ $class }}" id="thread_list_{{ $thread->id }}">
    <h4 class="media-heading">
        <a href="{{ route('messages.show', $thread->id) }}">{{ $thread->subject }}</a>
        ({{ $thread->userUnreadMessagesCount(Auth::id()) }} unread)

        @if($thread->is_starred)
            <i class="fa fa-star"></i> 
            
            <a href="{{ route('thread.unstar', $thread->id) }}" class="btn btn-warning btn-sm">
                <i class="fa fa-star-half"></i> Unstar
            </a>
        @else 
            <a href="{{ route('thread.star', $thread->id) }}" class="btn btn-success btn-sm">
                <i class="fa fa-star"></i> Star
            </a>
        @endif
    </h4>

    <p>
        {{ optional($thread->latestMessage)->body }}
    </p>
    <p>
        <small><strong>Creator:</strong> {{ $thread->creator()->name }}</small>
    </p>
    <p>
        <small><strong>Participants:</strong> {{ $thread->participantsString(Auth::id()) }}</small>
    </p>
</div>