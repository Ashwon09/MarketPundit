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
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Message</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=1;
                        @endphp
                        @foreach($contacts as $contact)
                        <tr>
                            <td> {{$i++ }}</td>
                            <td> {{$contact->name}}</td>
                            <td> {{$contact->email}}</td>
                            <td> {{$contact->number}}</td>
                            <td class="justify"> {{$contact->message}}</td>
                           
                            
                            <td>
                                <a type="button" class="btn btn-danger mt-1" href="{{route('contact.delete',$contact->id)}}">Delete</a>
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


