@extends('layouts.app')

@section('main')
    <div class="mt-5 mx-auto" style="width: 380px">
        <div class="card">
            <div class="card-body">

                @if (session('status'))
                    <div class="alert alert-success">
                        A fresh verification link has been send to your email
                    </div>
                @endif

                Before proceeding, please check your email for verification.
                Or

                <form action="{{ route('verification.send') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">{{ _('click here to request another') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
