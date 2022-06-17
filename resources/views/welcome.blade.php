@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <a class="card" style="width: 18rem;" href="{{route('ViewPhoto')}}">
                <img class="card-img-top" src="{{asset('uploads/photos/'. $photo->photo_location)}}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">{{$photo->photo_heading}}</p>
                </div>
            </a>
        </div>
        <div class="col-6">

            @foreach ($status as $stat)
            <a class="card text-white bg-info mb-3" href="{{route('statusView',$stat->id)}}">

                <div class="card-body">
                    <h4 class="card-title">{{$stat->status_heading}}</h4>
                    @php
                    $text = explode('.', $stat->status_description);
                    $brief=$text[0];
                    @endphp
                    <p class="card-text">{{$brief}}</p>
                </div>
            </a>
            @endforeach
            <a href="{{route('viewAll')}}">View All Status</a>
        </div>
    </div>
</div>
@endsection