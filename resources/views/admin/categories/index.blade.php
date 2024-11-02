@extends('admin.layouts.master')

@section('title')
    All Categories
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Categories</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Category Slug Name</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->slug_name}}</td>

                                        <td>
                                            <div class="form-button-action">
                                                <a href="{{route('categories.edit',$category->id)}}">
                                                    <button type="button" data-toggle="tooltip" title=""
                                                            class="btn btn-link btn-primary btn-lg"
                                                            data-original-title="Edit Task">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                </a>

                                                <form action="{{ route('categories.destroy', $category->id) }}"
                                                      method="POST" class="delete-confirm" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" data-toggle="tooltip" title="Delete category"
                                                            class="btn btn-link btn-danger btn-lg"
                                                            data-original-title="Delete category"
                                                            onclick="return confirm('Are you sure you want to delete this category?')">
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
