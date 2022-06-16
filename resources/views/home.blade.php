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
                    <div>
                        {{ __('You are logged in!') }}
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a class="card" href="{{route('status.index')}}" style="width: 18rem;">
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">View Status</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a class="card" href="{{route('photo.index')}}" style="width: 18rem;">
                                <img class="card-img-top" src="..." alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">View Pictures</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection