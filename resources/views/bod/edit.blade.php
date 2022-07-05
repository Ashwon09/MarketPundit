@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        <div class=col-1></div>
        <div class="col-10">
            <div class="card border-secondary mt-4">
                <div class="card-header text-center text-white bg-dark ">
                    <h2>Edit BOD's Information</h2>
                </div>
                <div class="p-3">
                    <form action="{{route('bod.update', $bod->id)}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
                        <div class="form-group">
                            <label for="name">Enter Name:</label>
                            <input type="text" class="form-control" id="status_heading" value="{{$bod->name}}" placeholder="Enter Name" name="name">
                            <span style="color:red"> @error ('name'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="name">Enter Position:</label>
                            <input type="text" class="form-control" id="position" value="{{$bod->role}}" placeholder="Enter Position" name="position">
                            <span style="color:red"> @error ('position'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group mt-3">
                            <label for="name">Status Description:</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Enter Description" rows="8">{{$bod->description}}</textarea>
                            <span style="color:red"> @error ('description'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="image">Photo:</label>
                            <input type="file" name="picture" class="form-control" id="image_input">
                            <div class="image-holder text-center">
                                <img class="border border-primary mt-3" src="{{asset('uploads/bod/'. $bod->picture)}}" alt="" width='15%' height='auto'>

                            </div>
                            <span style="color:red"> @error ('picture'){{$message}}@enderror</span>
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


@push('scripts')
<script>
    $(function() {
        $('#image_input').on('change', function() {
            let image_path = $(this)[0].value;
            var image_holder = $('.image-holder');
            var extension = image_path.substring(image_path.lastIndexOf('.') + 1).toLowerCase();

            if (extension == 'jpeg' || extension == 'jpg' || extension == 'png') {
                if (typeof(FileReader) != 'undefined') {
                    image_holder.empty();
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('<img/>', {
                            'src': e.target.result,
                            'class': 'img-fluid border border-primary mt-3',
                            'style': 'max-width:20%;margin-bottom:10px;'
                        }).appendTo(image_holder);
                        
                    }
                    image_holder.show();
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    $(image_holder).html('This browser does not support fileReader');
                }

            } else {
                $(image_holder).empty();
            }
        });
    });
</script>
@endpush