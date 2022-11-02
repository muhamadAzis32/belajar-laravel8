@extends('layouts.app')

@section('main')
    <div class="mt-5 mx-auto" style="width: 380px">
        <div class="card">
            <div class="card-body">
                <form action="{{ url('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Name </label>
                        <input name="name" type="text" class="form-control" value="{{ old('name') }}">
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email </label>
                        <input name="email" type="email" class="form-control" value="{{ old('email') }}">
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password </label>
                        <input name="password" type="password" class="form-control" value="{{ old('password') }}">
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
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
@endsection
