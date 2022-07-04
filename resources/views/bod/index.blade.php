@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="text-center">
                <h1 class="font-weight-bold">View Status</h1>
            </div>
            <div class="text-right mr-3 mb-2">
                <a class="btn btn-primary" href="{{route('bod.create')}}"> Add BODs <i class="fa-solid fa-circle-plus"></i></a>
            </div>
            <div class="table-responsive-md">
                <table class="table table-bordered" id="status">
                    <thead class="thead-dark">
                        <tr>
                            <th>S.N.</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Description</th>
                            <th>Photo</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=1;
                        @endphp
                        @foreach($bods as $bod)
                        <tr>
                            <td> {{$i++ }}</td>
                            <td> {{$bod->name}}</td>
                            <td> {{$bod->role}}</td>
                            <td class="justify"> {{$bod->description}}</td>
                            
                            <td class="text-center"> <img src="{{asset('uploads/bod/'. $bod->picture)}}" alt="" width='100' height='100'> </td>
                            
                            <td>
                                <a type="button" class="btn btn-danger mt-1" href="{{route('bod.delete',$bod->id)}}">Delete</a>
                                <a type="button" class="btn btn-primary mt-1" href="{{route('bod.edit',$bod->id)}}">Edit</a>
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


