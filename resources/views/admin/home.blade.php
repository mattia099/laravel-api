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

                    <ul>
                        <li><h3><a href="{{ route('admin.posts.index') }}">Posts</a></h3></li>
                        <li><h3><a href="{{ route('admin.users.index') }}">Utenti registrati</a></h3></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
