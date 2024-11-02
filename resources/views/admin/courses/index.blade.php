@extends('admin.layouts.master')

@section('title')
    All Courses
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Courses</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Course Title (English)</th>
                                    <th>Date</th>
                                    <th>Certificate Image</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($courses as $course)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$course->en_title}}</td>
                                        <td>{{$course->year}}</td>
                                        <td><img width="70px" src="{{asset('storage/upload/courses/'.$course->image)}}"></td>
                                        <td>
                                            <div class="form-button-action">
                                                <a href="{{route('courses.edit',$course->id)}}">
                                                    <button type="button" data-toggle="tooltip" title=""
                                                            class="btn btn-link btn-primary btn-lg"
                                                            data-original-title="Edit Task">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                </a>

                                                <form action="{{ route('courses.destroy', $course->id) }}"
                                                      method="POST" class="delete-confirm" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" data-toggle="tooltip" title="Delete course"
                                                            class="btn btn-link btn-danger btn-lg"
                                                            data-original-title="Delete course"
                                                            onclick="return confirm('Are you sure you want to delete this course?')">
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
