@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @foreach ($photos as $photo)
        <div class="col-4">
            <div class="card mt-5 ms-3 me-3">
                <img class="card-img-top" src="{{asset('uploads/photos/'. $photo->photo_location)}}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">{{$photo->photo_heading}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

@push('styles')
<style>
    .card-img-top{
        width: 100%;
        height: 17rem;
    }
</style>
@endpush