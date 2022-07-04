@extends('layouts.app')

@section('content')
<div class="container-fluid" id="StockImg" >
    <img class="img-fluid" src="{{asset('image/stock.jpg')}}" width="100%">
    <div class="text-block">
        <div class="center">
            <h2>Market Pundit Capital & Merchant Banking Limited</h2>
            <p id="line">________________________________________________________________________________________</p>
            <h6 id="text">Journey Towards Prosperity</h6>
            <a href="#" class="btn btn-light mt-2">Contact Us</a>
        </div>
    </div>
</div>

<div class="container-fluid mt-5" id="news">
    <h2 class="ms-2">News and Events</h2>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-6">
                <div class="card w-100 h-100 border-0">
                    @isset($photo)
                    <a style="width: 18rem;" href="{{route('viewPhoto')}}">
                        <img class="card-img" src="{{asset('uploads/photos/'. $photo->photo_location)}}" alt="Article Picture" style="width: 250%; height: auto;">
                    </a>
                    @endisset
                </div>
            </div>
            <div class="col-6">

                @foreach ($status as $stat)
                <div class="row">
                    <a class="card text-black border-0 mb-2" id="article" href="{{route('statusView',$stat->id)}}">
                        <div class="card-body mb-5">
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
                <div class="text-end">
                    <a class="btn btn-primary" href="{{route('viewAll')}}">View All Status</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-5">
    <h2 class="ms-2">Benefits Offered</h2>
</div>
<div class="container-fluid mt-3" id="benefits">
    <img class="img-fluid" src="{{asset('image/benefits.png')}}" width="100%">
</div>


@endsection