@extends('app')
@section('content')

<div class="card text-black bg-dark mb-3">
    <div class="card-header text-white">User</div>
</div>

<div class="card text-black bg-dark mb-3">
    <div class="card-body bg-light">
        <form action="{{ route('users.store') }}" method="post">
        @csrf
            <div class="row">
                <div class="col-md-4">
                    <label for="name"><strong>Name*</strong></label>
                    <input
                        type="text"
                        class="form-control form-control-sm"
                        id="name"
                        name="name"
                        required
                    >
                </div>
                <div class="col-md-3">
                    <label for="email"><strong>Email*</strong></label>
                    <input
                        type="email"
                        class="form-control form-control-sm"
                        id="email"
                        name="email"
                        required
                    >
                </div>
                <div class="col-md-3">
                    <label for="password"><strong>Password*</strong></label>
                    <input
                        type="password"
                        class="form-control form-control-sm"
                        id="password"
                        name="password"
                        required
                    >
                </div>
                <div class="col-md-2 text-center">
                    <br />
                    <button
                        type="submit"
                        class="btn btn-primary btn-sm"
                    >
                        Create
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card text-black bg-dark mb-3">
    <div class="card-body bg-light">
        <div class="row">
            <div class="col-md-4">
                <label><strong>Name*</strong></label>
            </div>
            <div class="col-md-3">
                <label><strong>Email*</strong></label>
            </div>
            <div class="col-md-3">
                <label><strong>Password*</strong></label>
            </div>
            <div class="col-md-2 text-center">
            </div>
        </div>
        @foreach ($users as $user)
            <form action="{{ route('users.update', $user) }}" method="post">
            @method('PATCH')
            @csrf
                <div class="row mt-1">
                    <div class="col-md-4">
                        <input
                            type="text"
                            class="form-control form-control-sm"
                            id="name"
                            name="name"
                            value="{{ $user->name }}"
                            required
                        >
                    </div>
                    <div class="col-md-3">
                        <input
                            type="email"
                            class="form-control form-control-sm"
                            id="email"
                            name="email"
                            value="{{ $user->email }}"
                            required
                        >
                    </div>
                    <div class="col-md-3">
                        <input
                            type="password"
                            class="form-control form-control-sm"
                            id="password"
                            name="password" {{ $user->password }}
                            required
                        >
                    </div>
                    <div class="col-md-2 text-center">
                        <button
                            type="submit"
                            class="btn btn-primary btn-sm"
                        >
                            Update
                        </button>
                        <button
                            type="button"
                            class="btn btn-danger btn-sm"
                            onclick="destroy(`{{ route('users.destroy', $user) }}`)"
                        >
                            Delete
                        </button>
                    </div>
                </div>
            </form>
        @endforeach
    </div>
</div>

<script>
    function destroy(route) {
        if(confirm("Are you sure about this?")){
            let ajax = new XMLHttpRequest();

            ajax.open("DELETE", route);

            ajax.setRequestHeader('X-CSRF-TOKEN', $("input[name=_token]").val());

            ajax.send();

            location.reload()
        } else {
            return false;
        }
    }
</script>

@endsection