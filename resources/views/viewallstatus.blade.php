@extends('layouts.app')

@section('content')
<div class="container mt-5">
    @foreach ($statuses as $status)


    <a class="card mt-3" id="link" href="{{route('statusView',$status->id)}}">

        <div class="card-body">
            <h4>{{$status->status_heading}}</h4>
            @php
            $text = explode('.', $status->status_description);
            $brief=$text[0];
            @endphp
            <p class="justify">{{$brief}}</p>

        </div>
        <div class="card-footer text-muted">
            Uploaded Date: {{$status->created_at}}
        </div>

    </a>

    @endforeach
</div>
@endsection