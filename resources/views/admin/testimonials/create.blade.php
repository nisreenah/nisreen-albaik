@extends('admin.layouts.master')

@section('title')
    Add New Testimonial
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-inner">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Add New Testimonial Form</div>
                    </div>
                    <form action="{{route('testimonials.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">

                                    <div class="form-group">
                                        <label for="image">Client Image</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"  id="image" name="image">
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="en_name">Client Name (English)</label>
                                        <input type="text" class="form-control @error('en_name') is-invalid @enderror"  id="en_name" name="en_name" placeholder="Client Name (English)">
                                        @error('en_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="en_comment">Client Comment (English)</label>
                                        <textarea class="form-control @error('en_comment') is-invalid @enderror"  id="en_comment" name="en_comment"
                                                  rows="5" placeholder="English Service Details">
                                        </textarea>
                                        @error('en_comment')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="en_position">Client Position (English)</label>
                                        <input type="text" class="form-control @error('en_position') is-invalid @enderror"  id="en_position" name="en_position" placeholder="Client Position (English)">
                                        @error('en_position')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6 col-lg-6">

                                    <div class="form-group">
                                        <label for="ar_name">Client Name (Arabic)</label>
                                        <input type="text" class="form-control" id="ar_name" name="ar_name"
                                               placeholder="Client Name (Arabic)">
                                    </div>
                                    <div class="form-group">
                                        <label for="ar_comment">Client Comment (Arabic)</label>
                                        <textarea class="form-control" id="ar_comment" name="ar_comment"
                                                  rows="5" placeholder="Client Comment (Arabic)">
                                        </textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="ar_position">Client Position (Arabic)</label>
                                        <input type="text" class="form-control" id="ar_position" name="ar_position"
                                               placeholder="Client Position (Arabic)">
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{route('testimonials.index')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
