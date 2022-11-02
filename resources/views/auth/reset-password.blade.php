@extends('layouts.app')

@section('main')
    <div class="mt-5 mx-auto" style="width: 380px">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('password.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="mb-3">
                        <label for="" class="form-label">Email </label>
                        <input name="email" type="email" class="form-control"
                            value="{{ old('email', $request->email) }}">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password </label>
                        <input name="password" type="password" class="form-control"
                            value="{{ old('password', $request->password) }}">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label"> Password Confirmation </label>
                        <input name="password_confirmation" type="password" class="form-control"
                            value="{{ old('password') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Reset password</button>
                </form>
            </div>
        </div>
    </div>
@endsection
