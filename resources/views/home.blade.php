@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('hihe') }}</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2> Username : {{ Auth::user()->name }} </h2>
                    <h2> Email : {{ Auth::user()->email }} </h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
