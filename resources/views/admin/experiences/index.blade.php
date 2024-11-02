@extends('admin.layouts.master')

@section('title')
    All Experiences
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Experiences</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Position (English)</th>
                                    <th>Company (English)</th>
                                    <th>Details (English)</th>
                                    {{--                                    <th>Position (Arabic)</th>--}}
                                    {{--                                    <th>Company (Arabic)</th>--}}
                                    {{--                                    <th>Details (Arabic)</th>--}}
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($experiences as $experience)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$experience->en_position}}</td>
                                        <td>{{$experience->en_company}}</td>
                                        <td>{{\Illuminate\Support\Str::limit($experience->en_details, 50)}}</td>
                                        {{--                                        <td>{{$experience->ar_position}}</td>--}}
                                        {{--                                        <td>{{$experience->ar_company}}</td>--}}
                                        {{--                                        <td>{{$experience->ar_details}}</td>--}}
                                        <td>{{$experience->start_date}}</td>
                                        <td>{{$experience->end_date}}</td>

                                        <td>
                                            <div class="form-button-action">
                                                <a href="{{route('experiences.edit',$experience->id)}}">
                                                    <button type="button" data-toggle="tooltip" title=""
                                                            class="btn btn-link btn-primary btn-lg"
                                                            data-original-title="Edit Task">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                </a>

                                                <form action="{{ route('experiences.destroy', $experience->id) }}"
                                                      method="POST" class="delete-confirm" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" data-toggle="tooltip"
                                                            title="Delete experience"
                                                            class="btn btn-link btn-danger btn-lg"
                                                            data-original-title="Delete experience"
                                                            onclick="return confirm('Are you sure you want to delete this experience?')">
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
    {{--    <script>--}}
    {{--        $('.submitDestroy').on('lick', function (e) {--}}
    {{--            e.preventDefault();--}}
    {{--            var form = $(this).parents('form');--}}

    {{--            swal({--}}
    {{--                title: "Are you sure?",--}}
    {{--                text: "You won't be able to revert this!",--}}
    {{--                type: "warning",--}}
    {{--                showCancelButton: true,--}}
    {{--                confirmButtonColor: "#DD6B55",--}}
    {{--                confirmButtonText: "Yes, delete it!",--}}
    {{--                closeOnConfirm: false--}}
    {{--            }, function (isConfirm) {--}}
    {{--                if (isConfirm) form.submit();--}}
    {{--            });--}}
    {{--        });--}}
    {{--    </script>--}}

    <!-- Datatables -->
    <script src="{{asset('assets/js/plugin/datatables/datatables.min.js')}}"></script>
    <script src="{{asset('assets/js/plugin/datatables/data-table.js')}}"></script>

@endsection
