@extends('layouts.app')

@section('content')
<div class="row mt-5">
    @foreach ($photos as $photo)
    <div class="col-3">
        <div class="card">
            <img class="card-img-top" src="{{asset('uploads/photos/'. $photo->photo_location)}}" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">{{$photo->photo_heading}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection