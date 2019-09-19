<div class="media">
    <a class="pull-{{ $message->user_id == Auth::id() ? 'left' : 'left' }}" href="#">
        <img src="https://loremflickr.com/100/100/dog" alt="Avatar" class="img-circle">
    </a>
    <div class="media-body">
        <h5 class="media-heading">{{ $message->user->name }}</h5>
        <p>{{ $message->body }}</p>
        <div class="text-muted">
            <small>Posted {{ $message->created_at->diffForHumans() }}</small>
        </div>
    </div>
</div>