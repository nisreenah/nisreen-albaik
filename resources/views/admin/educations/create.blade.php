@extends('admin.layouts.master')

@section('title')
    Add New Education
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-inner">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Add New Education Form</div>
                    </div>
                    <form action="{{route('educations.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="en_major">English Major Name</label>
                                        <input type="text" class="form-control" id="en_major" name="en_major"
                                               placeholder="English Major Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="en_university">English University Name</label>
                                        <input type="text" class="form-control" id="en_university" name="en_university"
                                               placeholder="English University Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="start_date">Start Date</label>
                                        <input type="date" class="form-control" id="start_date" name="start_date">
                                    </div>
                                    <div class="form-group">
                                        <label for="end_date">End Date</label>
                                        <input type="date" class="form-control" id="end_date" name="end_date">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="ar_major">Arabic Major Name</label>
                                        <input type="text" class="form-control" id="ar_major" name="ar_major"
                                               placeholder="Arabic Major Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="ar_university">Arabic University Name</label>
                                        <input type="text" class="form-control" id="ar_university" name="ar_university"
                                               placeholder="Arabic University Name">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{route('educations.index')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
