@extends('dashboard')

@section('content')
<main class="signup-form">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    <h3 class="card-header text-center bg-primary text-white py-4">Update User</h3>
                    <div class="card-body p-4">
                        <form action="{{ route('user.postUpdateUser') }}" method="POST">
                            @csrf
                            <input name="id" type="hidden" value="{{$user->id}}">
                            
                            {{-- Name Input --}}
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control form-control-lg" name="name"
                                       value="{{ $user->name }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            
                            {{-- Email Input --}}
                            <div class="form-group mb-3">
                                <input type="email" placeholder="Email" id="email_address" class="form-control form-control-lg"
                                       value="{{ $user->email }}" name="email" required>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            {{-- phone Input --}}
                            <div class="form-group mb-3">
                                <input type="phone" placeholder="phone" id="phone_address" class="form-control form-control-lg"
                                       value="{{ $user->phone }}" name="phone" required>
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>

                            {{-- address Input --}}
                            <div class="form-group mb-3">
                                <input type="address" placeholder="address" id="address_address" class="form-control form-control-lg"
                                       value="{{ $user->address }}" name="address" required>
                                @if ($errors->has('address'))
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                @endif
                            </div>
                            {{-- Password Input --}}
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control form-control-lg"
                                       name="password">
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            {{-- Submit Button --}}
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-primary btn-lg rounded-pill shadow-sm">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
