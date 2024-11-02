@extends('admin.layouts.master')

@section('title')
    Show Comment Details
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-inner">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title"> Show Comment Details</div>
                    </div>
                    <form>

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">

                                    <div class="form-group">
                                        <label for="name">User Name</label>
                                        <p>{{$comment->name}}</p>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">User Email</label>
                                        <p>{{$comment->email}}</p>
                                    </div>

                                </div>

                                <div class="col-md-6 col-lg-6">

                                    <div class="form-group">
                                        <label for="name">Blog Title</label>
                                        <p>{{ $comment->blog->en_title }}</p>
                                    </div>

                                    <div class="form-group">
                                        <label for="status">Status</label>

                                        @if($comment->status == 'waiting')
                                            <div class="badge badge-warning">Waiting</div>
                                        @elseif($comment->status == 'accepted')
                                            <div class="badge badge-success">Accepted</div>
                                        @else
                                            <div class="badge badge-danger">Rejected</div>
                                        @endif
                                    </div>


                                    <div class="form-group">
                                        <label for="status">Comment</label>
                                        <p>{!! $comment->comment !!}</p>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="card-action">
                            <a href="{{route('comments.index')}}" class="btn btn-danger">Back To All Comments</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
