@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <table class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                    @foreach($user->roles as $role)
                                        <a href="{{ route('user.role', ['id' => $role->id]) }}">
                                            {{ $role->name . '-' }}
                                        </a>
                                    @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ route('user.readUser', ['id' => $user->id]) }}" class="btn btn-sm btn-primary">View</a> |
                                        <a href="{{ route('user.updateUser', ['id' => $user->id]) }}" class="btn btn-sm btn-warning">Edit</a> |
                                        <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $users->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        </div>
    </main>
@endsection
