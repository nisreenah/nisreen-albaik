@extends('admin.layouts.master')

@section('title')
    All Services
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Services</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Service Title (English)</th>
                                    <th>Service Details (English)</th>
                                    {{--                                    <th>Service Title (Arabic)</th>--}}
                                    {{--                                    <th>Service Details (Arabic)</th>--}}
                                    <th>Service Icon</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($services as $service)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$service->en_title}}</td>
                                        <td>{{$service->en_details}}</td>
                                        {{--                                        <td>{{$service->ar_title}}</td>--}}
                                        {{--                                        <td>{{$service->ar_details}}</td>--}}
                                        <td><i class="{{$service->icon}} fa-2x"></i></td>

                                        <td>
                                            <div class="form-button-action">
                                                <a href="{{route('services.edit',$service->id)}}">
                                                    <button type="button" data-toggle="tooltip" title=""
                                                            class="btn btn-link btn-primary btn-lg"
                                                            data-original-title="Edit Task">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                </a>
                                                <form action="{{ route('services.destroy', $service->id) }}"
                                                      method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" data-toggle="tooltip" title="Delete service"
                                                            class="btn btn-link btn-danger btn-lg"
                                                            data-original-title="Delete service"
                                                            onclick="return confirm('Are you sure you want to delete this service?')">
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
