@extends('layouts.app')

@section('content')
<div class="container">
   <h3>{{$status->status_heading}}</h3>
   <p>{{$status->status_description}}</p>
</div>
@endsection