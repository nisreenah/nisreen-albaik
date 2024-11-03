@extends('admin.layouts.master')

@section('title')
    Create Portfolio
@endsection

@section('styles')
    <style rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"></style>
@endsection

@section('content')
    <div class="page-inner">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Portfolio Form</div>
                    </div>
                    <form action="{{route('portfolio.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">

                                    <div class="form-group">
                                        <label for="en_name">English Project Name</label>
                                        <input type="text" class="form-control @error('en_name') is-invalid @enderror"
                                               id="en_name" name="en_name" placeholder="English Project Name">
                                        @error('en_name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="en_client">English Client Name</label>
                                        <input type="text" class="form-control @error('en_client') is-invalid @enderror"
                                               id="en_client" name="en_client" placeholder="English Client Name">
                                        @error('en_client')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="en_role">English Role</label>
                                        <input type="text" class="form-control @error('en_role') is-invalid @enderror"
                                               id="en_role" name="en_role" placeholder="English Role">
                                        @error('en_role')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="en_details">English Details</label>
                                        <textarea rows="5"
                                                  class="form-control @error('en_details') is-invalid @enderror"
                                                  id="en_details" name="en_details"
                                                  placeholder="English Details"></textarea>

                                        @error('en_details')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Main Image</label>
                                        <input type="file"
                                               class="form-control dropify @error('image') is-invalid @enderror"
                                               id="image" name="image">

                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="album">Album</label>
                                        <input type="file" class="form-control dropify" id="album" name="album[]"
                                               multiple>
                                    </div>


                                </div>
                                <div class="col-md-6 col-lg-6">

                                    <div class="form-group">
                                        <label for="ar_name">Arabic Project Name</label>
                                        <input type="text" class="form-control @error('ar_name') is-invalid @enderror"
                                               id="ar_name" name="ar_name" placeholder="Arabic Project Name">
                                        @error('ar_name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="ar_client">Arabic Client Name</label>
                                        <input type="text" class="form-control @error('ar_client') is-invalid @enderror"
                                               id="ar_client" name="ar_client" placeholder="Arabic Client Name">

                                        @error('en_title')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="ar_role">Arabic Role</label>
                                        <input type="text" class="form-control @error('ar_role') is-invalid @enderror"
                                               id="ar_role" name="ar_role" placeholder="Arabic Role">
                                        @error('ar_role')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="ar_details">Arabic Details</label>
                                        <textarea rows="5"
                                                  class="form-control @error('ar_details') is-invalid @enderror"
                                                  id="ar_details" name="ar_details"
                                                  placeholder="Arabic Details"></textarea>
                                        @error('ar_details')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="completion">Completion Date</label>
                                        <input type="date"
                                               class="form-control @error('completion') is-invalid @enderror"
                                               id="completion" name="completion">
                                        @error('completion')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="category_id">Category Name</label>
                                        <select class="form-control" id="category_id" name="category_id">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{route('portfolio.index')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {{--    <script src="{{ asset('assets/js/plugin/dropify/dropify.js') }}"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>


    <!--tinymce js-->
    <script src="{{ asset('admin/assets/js/plugin/tinymce/tinymce.min.js') }}"></script>
    <script>
        // Initialize TinyMCE for all textareas
        tinymce.init({
            selector: 'textarea', // Target all textarea elements
            plugins: 'link image code',
            toolbar: 'undo redo | styleselect | bold italic | link image | code',
            height: 300,
        });

    </script>
@endsection
