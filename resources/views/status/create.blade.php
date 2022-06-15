@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class=col-1></div>
        <div class="col-10">
            <div class="card border-secondary mt-4">
                <div class="card-header text-center text-white bg-dark ">
                    <h2>Post a New Status</h2>
                </div>
                <div class="p-3">
                    <form action="{{route('status.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Status Heading:</label>
                            <input type="text" class="form-control" id="status_heading" value="{{old('status_heading')}}" placeholder="Enter Status Heading" name="status_heading">
                            <span style="color:red"> @error ('status_heading'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Status Description:</label>
                            <textarea class="form-control" id="status_description" name="status_description" placeholder="Enter Status's Description" rows="8">{{old('status_description')}}</textarea>
                            <span style="color:red"> @error ('status_description'){{$message}}@enderror</span>
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