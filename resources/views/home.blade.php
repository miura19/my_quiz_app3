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

                    {{ Auth::user()->name.'がログインしました！' }}
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Quiz Magic Associationへようこそ</h1>
                    <div class="btn_group btns">
                        <a href="/quiz" class="btn btn-primary">NEW GAME</a>
                        <a href="/new" class="btn btn-primary">CREATE GAME</a>
                        <a href="/list" class="btn btn-primary">QUIZ LIST</a>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</div>
@endsection
