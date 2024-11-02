@extends('admin.layouts.master')

@section('title')
    Edit Service : {{$service->en_title}}
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-inner">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit Service : {{$service->en_title}}</div>
                    </div>
                    <form action="{{route('services.update',$service->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="en_title">English Service Title</label>
                                        <input type="text" class="form-control @error('en_title') is-invalid @enderror" id="en_title" name="en_title"
                                               placeholder="English Service Title" value="{{$service->en_title}}">
                                        @error('en_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="en_details">English Service Details</label>
                                        <textarea class="form-control @error('en_details') is-invalid @enderror" id="en_details" name="en_details"
                                                  rows="5" placeholder="English Service Details">
                                            {{$service->en_details}}
                                        </textarea>
                                        @error('en_details')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="icon">Service Icon</label>
                                        <input type="text" class="form-control @error('icon') is-invalid @enderror" id="icon" name="icon"
                                               placeholder="fas fa-allergies" value="{{$service->icon}}">
                                        @error('icon')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="ar_title">Arabic Service Title</label>
                                        <input type="text" class="form-control" id="ar_title" name="ar_title"
                                               placeholder="Arabic Service Title" value="{{$service->ar_title}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="ar_details">Arabic Service Details</label>
                                        <textarea class="form-control" id="ar_details" name="ar_details"
                                                  rows="5" placeholder="Arabic Service Details">
                                            {{$service->ar_details}}
                                        </textarea>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="{{route('services.index')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
