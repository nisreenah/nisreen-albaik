@extends('admin.layouts.master')

@section('title')
    All Skills
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Skills</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Skill Name</th>
                                    <th>Skill Summary</th>
                                    <th>Skill Percentage</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($skills as $skill)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$skill->name}}</td>
                                        <td>{{$skill->summary}}</td>
                                        <td>{{$skill->percentage}} %</td>
                                        <td>
                                            <div class="form-button-action">
                                                <a href="{{route('skills.edit',$skill->id)}}">
                                                    <button type="button" data-toggle="tooltip" title=""
                                                            class="btn btn-link btn-primary btn-lg"
                                                            data-original-title="Edit Task">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                </a>

                                                <form action="{{ route('skills.destroy', $skill->id) }}"
                                                      method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" data-toggle="tooltip" title="Delete skill"
                                                            class="btn btn-link btn-danger btn-lg"
                                                            data-original-title="Delete skill"
                                                            onclick="return confirm('Are you sure you want to delete this skill?')">
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
