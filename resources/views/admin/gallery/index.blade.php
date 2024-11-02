@extends('admin.layouts.master')

@section('title')
    All Galleries
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-inner">

        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Galleries</h4>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#exampleModal">
                                <i class="fa fa-plus"></i> Add Image
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add new image to the
                                                gallery</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('gallery.store') }}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect2"> Add image for which
                                                        portfolio ?</label>
                                                    <select class="form-control" name="portfolio_id">
                                                        @foreach($portfolios as $portfolio)
                                                            <option
                                                                value="{{ $portfolio->id }}">{{ $portfolio->en_name }}</option>
                                                        @endforeach
                                                    </select>

                                                </div>
                                                <div class="form-group">
                                                    <input type="file" class="form-control dropify" id="image"
                                                           name="image">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Portfolio</th>
                                    <th>Image</th>
                                    <th>Posted date</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($galleries as $gallery)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$portfolio->en_name}}</td>
                                        <td><img width="100px" src="{{asset('upload/albums/'.$gallery->image_path)}}">
                                        </td>
                                        <td>{{$gallery->created_at}}</td>

                                        <td>
                                            <form action="{{ route('gallery.destroy', $gallery->id) }}"
                                                  method="POST" class="delete-confirm" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" data-toggle="tooltip" title="Delete image"
                                                        class="btn btn-link btn-danger btn-lg"
                                                        data-original-title="Delete image" onclick="return confirm('Are you sure you want to delete this image?')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
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
