@extends('admin.layouts.master')

@section('title')
    Add New Experience
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-inner">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Add New Experience Form</div>
                    </div>
                    <form action="{{route('experiences.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="en_position">English Position Title</label>
                                        <input type="text" class="form-control @error('en_position') is-invalid @enderror" id="en_position" name="en_position" placeholder="English Position Title">
                                        @error('en_position')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="en_company">English Company Name</label>
                                        <input type="text" class="form-control @error('en_company') is-invalid @enderror" id="en_company" name="en_company" placeholder="English Company Name">
                                        @error('en_company')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="en_details">English Details</label>
                                        <textarea rows="5" class="form-control @error('en_details') is-invalid @enderror" id="en_details" name="en_details" placeholder="English Details"></textarea>
                                        @error('en_details')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="start_date">Start Date</label>
                                        <input type="date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" name="start_date">
                                        @error('start_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="end_date">End Date</label>
                                        <input type="date" class="form-control @error('end_date') is-invalid @enderror" id="end_date" name="end_date">
                                        @error('end_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="ar_position">Arabic Position Title</label>
                                        <input type="text" class="form-control" id="ar_position" name="ar_position" placeholder="Arabic Position Title">
                                    </div>

                                    <div class="form-group">
                                        <label for="ar_company">Arabic Company Name</label>
                                        <input type="text" class="form-control" id="ar_company" name="ar_company"
                                               placeholder="Arabic Company Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="ar_details">Arabic Details</label>
                                        <textarea rows="5" class="form-control" id="ar_details" name="ar_details"
                                                  placeholder="Arabic Details"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{route('experiences.index')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
