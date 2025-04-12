@extends('dashboard')

@section('content')
    <main class="login-form mt-5">
        <div class="container">
            <div class="row justify-content-center align-items-center min-vh-75">
                <div class="col-md-10">
                    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                        <div class="row g-0">
                            {{-- Hình ảnh bên trái --}}
                            <div class="col-md-6 d-none d-md-block bg-dark text-white p-5 text-center">
                                <div class="d-flex flex-column h-100 justify-content-center align-items-center">
                                    <h2 class="mb-4">Welcome Back 👋</h2>
                                    <p class="lead">Please login to access the system.</p>
                                    <img src="https://source.unsplash.com/300x200/?technology" class="img-fluid rounded mt-3" alt="Login illustration">
                                </div>
                            </div>

                            {{-- Form đăng nhập bên phải --}}
                            <div class="col-md-6 bg-white p-5">
                                <h4 class="mb-4 text-center">Login</h4>
                                <form method="POST" action="{{ route('user.authUser') }}">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" placeholder="Email" id="email" class="form-control" name="email"
                                               value="{{ old('email') }}" required autofocus>
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    

                                    <div class="form-group mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                        @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    <div class="form-check mb-4">
                                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                        <label class="form-check-label" for="remember">Remember Me</label>
                                    </div>

                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-dark btn-lg rounded-pill">Sign In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
