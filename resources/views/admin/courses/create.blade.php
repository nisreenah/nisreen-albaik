@extends('admin.layouts.master')

@section('title')
    Add New Course
@endsection

@section('content')
    <div class="page-inner">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Add New Course</div>
                    </div>
                    <form action="{{route('courses.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="en_position">English Course Title</label>
                                        <input type="text" class="form-control @error('en_title') is-invalid @enderror" id="en_title" name="en_title" placeholder="English Course Title">
                                        @error('en_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="en_position">Arabic Course Title</label>
                                        <input type="text" class="form-control @error('ar_title') is-invalid @enderror" id="ar_title" name="ar_title" placeholder="Arabic Course Title">
                                        @error('ar_title')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Course Certificate Image</label>
                                        <input type="file" class="form-control dropify @error('image') is-invalid @enderror" id="image" name="image" >

                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="start_date">Date</label>
{{--                                        <input type="date" class="form-control @error('year') is-invalid @enderror" id="year" name="year">--}}
                                        <input type="text" name="year" id="year" class="form-control"
                                               placeholder="YYYY" maxlength="4" value="{{ old('year') }}" required />

                                        @error('year')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{route('courses.index')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.getElementById('year').addEventListener('input', function (e) {
            let value = e.target.value;
            if (!/^\d{0,4}$/.test(value)) {
                e.target.value = value.slice(0, 4);  // Limit input to 4 digits
            }
        });
    </script>
@endsection
