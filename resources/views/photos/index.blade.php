@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="text-center">
                <h1 class="font-weight-bold">View Status</h1>
            </div>
            <div class="text-right mr-3 mb-2">
                <a class="btn btn-primary" href="{{route('status.create')}}"> Add Status <i class="fa-solid fa-circle-plus"></i></a>
            </div>
            <div class="table-responsive-md">
                <table class="table table-bordered" id="status">
                    <thead class="thead-dark">
                        <tr>
                            <th>S.N.</th>
                            <th>Heading</th>
                            <th>Details</th>
                            <th>Date published</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=1;
                        @endphp
                        @foreach($photos as $photo)
                        <tr>
                            <td> {{$i++ }}</td>
                            <td> {{$status->status_heading}}</td>
                            <td>
                                <a type="button" class="btn btn-danger" href="{{route('status.delete',$status->id)}}">Delete</a>
                                <a type="button" class="btn btn-primary" href="{{route('status.edit',$status->id)}}">Edit</a>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#status').DataTable();
    });
</script>
@endpush


