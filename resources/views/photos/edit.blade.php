@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        <div class=col-1></div>
        <div class="col-10">
            <div class="card border-secondary mt-4">
                <div class="card-header text-center text-white bg-dark ">
                    <h2>Post a Picture</h2>
                </div>
                <div class="p-3">
                    <form action="{{route('photo.update', $photo->id)}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                        @csrf
                        <div class="form-group">
                            <label for="name">Photo Heading:</label>
                            <input type="text" class="form-control" id="photo_heading" value="{{$photo->photo_heading}}" placeholder="Enter Status Heading" name="photo_heading">
                            <span style="color:red"> @error ('photo_heading'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="image">Photo:</label>
                            <input type="file" name="photo_location" class="form-control" id="image_input">
                            <span style="color:red"> @error ('photo_location'){{$message}}@enderror</span>
                        </div>
                        <div class="image-holder ml-3">
                        <img src="{{asset('uploads/photos/'. $photo->photo_location)}}" style="max-width:100px;margin-bottom:10px;">
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
                            'class': 'img-fluid',
                            'style': 'max-width:100px;margin-bottom:10px;'
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