@extends('admin.layouts.master')

@section('title')
    All Portfolio
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-inner">

        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Portfolio</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Project Name</th>
                                    <th>Project Image</th>
                                    <th>Client Name (English)</th>
                                    <th>Completion Date</th>
                                    <th>Details (English)</th>
                                    <th>Category Name</th>
                                    <th>Gallery</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($portfolios as $portfolio)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$portfolio->en_name}}</td>
                                        <td><img width="100px" src="{{asset('upload/portfolios/'.$portfolio->image)}}">
                                        </td>
                                        <td>{{$portfolio->en_client}}</td>
                                        <td>{{$portfolio->completion}}</td>
                                        <td>{{ Str::limit($portfolio->en_details , 30)  }}</td>
                                        <td>{{$portfolio->category->name}}</td>
                                        <td><a href="{{route('gallery.show',$portfolio->id)}}">Go to the Gallery</a>
                                        </td>
                                        <td>
                                            <div class="form-button-action">
                                                <a href="{{route('portfolio.edit',$portfolio->id)}}">
                                                    <button type="button" data-toggle="tooltip" title=""
                                                            class="btn btn-link btn-primary btn-lg"
                                                            data-original-title="Edit Task">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                </a>
                                                <form action="{{ route('portfolio.destroy', $portfolio->id) }}"
                                                      method="POST" class="delete-confirm" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" data-toggle="tooltip" title="Delete portfolio"
                                                            class="btn btn-link btn-danger btn-lg"
                                                            data-original-title="Delete portfolio"
                                                            onclick="return confirm('Are you sure you want to delete this portfolio?')">
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
