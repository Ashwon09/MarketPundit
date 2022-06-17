@extends('layouts.app')

@section('content')
@foreach ($statuses as $status)
<a class="card text-white bg-info mb-3" href="{{route('statusView',$status->id)}}">

    <div class="card-body">
        <h4 class="card-title">{{$status->status_heading}}</h4>
        @php
        $text = explode('.', $status->status_description);
        $brief=$text[0];
        @endphp
        <p class="card-text">{{$brief}}</p>
    </div>
</a>
@endforeach
@endsection