@extends('dashboard')

@section('content')
<main class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">User List</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Like</th>
                                <th>Github</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->like }}</td>
                                    <td>{{ $user->github }}</td>
                                    <td>
                                        <a href="{{ route('user.readUser', ['id' => $user->id]) }}" class="btn btn-info btn-sm">View</a>
                                        <a href="{{ route('user.updateUser', ['id' => $user->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
