@extends('layouts.app')

@section('content')
<div class="container">
   <h3>{{$status->status_heading}}</h3>
   <p class="justify">{{$status->status_description}}</p>
</div>
@endsection

@push('styles')
<style>
    .justify {
        text-align: justify;
    }
</style>
@endpush