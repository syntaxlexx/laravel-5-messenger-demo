@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session()->has('success') || session()->has('error'))
    <div class="alert alert-{{ session()->has('success') ? 'success' : 'danger' }}">
        {{ session()->get('success') ?? session()->get('error') }}
    </div>
@endif


<form action="{{ route('users.store') }}" method="post" class="form">
    @csrf

    <div class="form-group">
        <label for="name" class="control-label">Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="email" class="control-label">Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="password" class="control-label">Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="password_confirmation" class="control-label">Password Confirmation</label>
        <input type="password" name="password_confirmation" class="form-control" required>
    </div>
    <div class="form-group">
        <button class="btn btn-primary">Save</button>
    </div>
</form>