@extends('layouts.app')

@section('content')
<div class="container mt-5">
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
                    <div class="text-center">
                        <h5>{{ __('You are logged in!') }}</h5>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6 mt-3">
                            <a class="btn btn-success" href="{{route('status.index')}}">
                                View Status
                            </a>
                        </div>
                        <div class="col-md-6 mt-3">
                            <a class="btn btn-success" href="{{route('photo.index')}}">
                                View Pictures
                            </a>
                        </div>
                        <div class="col-md-6 mt-3">
                            <a class="btn btn-success" href="{{route('bod.index')}}">
                                View Board of Directors
                            </a>
                        </div>
                        <div class="col-md-6 mt-3">
                            <a class="btn btn-success" href="{{route('service.index')}}">
                                View Services
                            </a>
                        </div>
                        <div class="col-md-6 mt-3">
                            <a class="btn btn-success" href="{{route('contact.index')}}">
                                View Contacts
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection