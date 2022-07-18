@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <div class="card mt-5">
                <div class="card-body">
                    <h3 class="card-title"> For any queries, fill the form below </h3>
                    <form action="{{route('ContactStore')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                            <span style="color:red"> @error ('name'){{$message}}@enderror</span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="number">Phone Number</label>
                            <input type="number" class="form-control" id="number" name="number" placeholder="Enter Your Number">
                            <span style="color:red"> @error ('number'){{$message}}@enderror</span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                            <span style="color:red"> @error ('email'){{$message}}@enderror</span>
                        </div>

                        <div class="form-group mt-3">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                            <span style="color:red"> @error ('message'){{$message}}@enderror</span>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card mt-5">
           
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.4216037967954!2d85.31226731548159!3d27.673361433590653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19be3cca4587%3A0xd0ce201d7f67acfd!2sMarket%20Pundit%20Capital%20and%20Merchant%20Banking%20Limited!5e0!3m2!1sen!2snp!4v1658057911626!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
               
            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')

@endpush