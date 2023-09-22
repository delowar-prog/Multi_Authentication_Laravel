@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div>
                    @if(auth::user()->role=='admin')
                    <h1>You are a Admin User</h1>
                    @elseif (auth::user()->role=='student')
                    <h1>You are a Student</h1>
                    @elseif (auth::user()->role=='manager')
                    <h1>You are a Manager</h1>
                    @else
                    <h1>You are a Normal User</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
