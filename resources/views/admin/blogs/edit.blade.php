@extends('admin.layouts.master')

@section('title')
    Edit Blog : {{$blog->en_title}}
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-inner">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title"> Edit Blog : {{$blog->en_title}}</div>
                    </div>
                    <form action="{{route('blogs.update',$blog->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="en_title">English Title</label>
                                        <input type="text" class="form-control @error('en_title') is-invalid @enderror" id="en_title" name="en_title" value="{{$blog->en_title}}" placeholder="English Title">
                                        @error('en_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="en_details">English Details</label>
                                        <textarea rows="5" class="form-control @error('en_details') is-invalid @enderror" id="en_details" name="en_details" placeholder="English Details">
                                            {!! $blog->en_details !!}
                                        </textarea>
                                        @error('en_details')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="ar_title">Arabic Title</label>
                                        <input type="text" class="form-control @error('ar_title') is-invalid @enderror" id="ar_title" name="ar_title" value="{{$blog->ar_title}}" placeholder="Arabic Title">
                                        @error('ar_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="ar_details">Arabic Details</label>
                                        <textarea rows="5"  class="form-control @error('ar_details') is-invalid @enderror" id="ar_details" name="ar_details" placeholder="Arabic Details">{{$blog->ar_details}}</textarea>
                                        @error('ar_details')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Old Blog Image</label>
                                        <p><img src="{{asset('storage/upload/blogs/'.$blog->image)}}" width="500px;"></p>
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Upload New Blog Image</label>
                                        <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror" value="{{asset('images/blogs/'.$blog->image)}}">
                                        @error('image')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="{{route('blogs.index')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
