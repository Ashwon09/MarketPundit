@extends('layouts.app')

@section('content')
<div class="container-fluid" id="StockImg">
    <img class="img-fluid" src="{{asset('image/stock.jpg')}}">
    <div class="text-block">
        <div class="center">
            <h2>Market Pundit Capital & Merchant Banking Limited</h2>
            <h4>_____________________________________________</h4>
            <h6>Journey Towards Prosperity</h6>
            <a href="#" class="btn btn-light mt-2">Contact Us</a>
        </div>
    </div>
</div>

<div class="container-fluid mt-5" id="news">
    <h3>News and Events</h3>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-6">
                <a class="card" style="width: 18rem;" href="{{route('viewPhoto')}}">
                    <img class="card-img" src="{{asset('uploads/photos/'. $photo->photo_location)}}" alt="Article Picture">
                </a>
            </div>
            <div class="col-6">

                @foreach ($status as $stat)
                <div class="row">
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
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-5">
    <h3>Benefits Offered</h3>
</div>
<div class="container-fluid" style="background: lightblue; padding-top:1vh; padding-bottom:1vh; padding-left:4vh; padding-right:4vh;">
    <div class="row hidden-md-up mt-4">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img" src="{{asset('image/test-img.jpg')}}" alt="Article Picture">
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img" src="{{asset('image/test-img.jpg')}}" alt="Article Picture">
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img" src="{{asset('image/test-img.jpg')}}" alt="Article Picture">
            </div>
        </div>
    </div><br>

    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img" src="{{asset('image/test-img.jpg')}}" alt="Article Picture">
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img" src="{{asset('image/test-img.jpg')}}" alt="Article Picture">
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img" src="{{asset('image/test-img.jpg')}}" alt="Article Picture">
            </div>
        </div>
    </div>
</div>


@endsection