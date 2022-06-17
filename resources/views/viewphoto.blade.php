@extends('layouts.app')

@section('content')
@foreach ($photos as $photo)
<div class="card">
    <img class="card-img-top" src="{{asset('uploads/photos/'. $photo->photo_location)}}" alt="Card image cap">
    <div class="card-body">
        <p class="card-text">{{$photo->photo_heading}}</p>
    </div>
</div>

@endforeach
@endsection