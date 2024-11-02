@extends('admin.layouts.master')

@section('title')
    All Blogs
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-inner">

        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Blogs</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Blog Image</th>
                                    <th>Blog Title (English)</th>
                                    <th>Blog Details (English)</th>
                                    {{--                                    <th>Blog Title (Arabic)</th>--}}
                                    {{--                                    <th>Blog Details (Arabic)</th>--}}
                                    <th>Posted date</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td><img width="100px" src="{{asset('upload/blogs/'.$blog->image)}}"></td>
                                        <td>{{$blog->en_title}}</td>
                                        <td>{{Str::limit($blog->en_details, 100)}}</td>
                                        {{--                                        <td>{{$blog->ar_title}}</td>--}}
                                        {{--                                        <td>{{$blog->ar_details}}</td>--}}
                                        <td>{{$blog->created_at}}</td>
                                        <td>
                                            <div class="form-button-action">
                                                <a href="{{route('blogs.edit',$blog->id)}}">
                                                    <button type="button" data-toggle="tooltip" title=""
                                                            class="btn btn-link btn-primary btn-lg"
                                                            data-original-title="Edit Task">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                </a>

                                                <form action="{{ route('blogs.destroy', $blog->id) }}"
                                                      method="POST" class="delete-confirm" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" data-toggle="tooltip" title="Delete blog"
                                                            class="btn btn-link btn-danger btn-lg"
                                                            data-original-title="Delete blog"
                                                            onclick="return confirm('Are you sure you want to delete this blog?')">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>

                                            </div>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <!-- Datatables -->
    <script src="{{asset('admin/assets/js/plugin/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/plugin/datatables/data-table.js')}}"></script>
@endsection
