@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card text-center">

        <div class="card-body">
            <h3>{{$status->status_heading}}</h3>
            <p class="justify">{{$status->status_description}}</p>

        </div>
        <div class="card-footer text-muted">
         {{$status->created_at}}
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .justify {
        text-align: justify;
    }
</style>
@endpush