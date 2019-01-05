<h3>Participants</h3>

<ol class="list-group">
    @forelse($participants as $participant)
        <li class="list-group-item">
            {{ $loop->iteration }}.
            {{ $participant->user->name }}

            <a href="{{ route('thread.remove-participant', [$thread->id, $participant->user_id]) }}" class="btn btn-xs btn-warning pull-right">
                Remove from thread
            </a>
        </li>
    @empty
        <p class="text-warning">No participants found</p>
    @endforelse
</ol>

<h3>Add a Participant to Thread</h3>

@php $n=0; @endphp
<ol class="list-group">
    @foreach($users as $us)
        @if(! in_array($us->id, $participants->pluck('user_id')->toArray()))
            <li class="list-group-item">
                {{ $n+=1 }}.
                {{ $us->name }}

                <a href="{{ route('thread.add-participant', [$thread->id, $us->id]) }}" class="btn btn-xs btn-primary pull-right">
                    Add to thread
                </a>
            </li>
        @endif
    @endforeach
</ol>