@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        <div class=col-1></div>
        <div class="col-10">
            <div class="card border-secondary mt-4">
                <div class="card-header text-center text-white bg-dark ">
                    <h2>Edit Service</h2>
                </div>
                <div class="p-3">
                    <form action="{{route('service.update', $service->id)}}" method="post">
                    <input type="hidden" name="_method" value="PUT">
                        @csrf
                        <div class="form-group">
                            <label for="name">Service Heading:</label>
                            <input type="text" class="form-control" id="service_heading" value="{{$service->service_heading}}" placeholder="Enter Service Heading" name="service_heading">
                            <span style="color:red"> @error ('service_heading'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Service Description:</label>
                            <textarea class="form-control" id="service_description" name="service_description" placeholder="Enter Service's Description" rows="8">{{$service->service_description}}</textarea>
                            <span style="color:red"> @error ('service_description'){{$message}}@enderror</span>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-1"></div>

    </div>
</div>
@endsection