@extends('admin.layouts.master')

@section('title')
    All Comments
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-inner">

        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Comments</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User Name</th>
                                    <th>Status</th>
                                    <th>Comment</th>
                                    <th>Posted At</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($comments as $comment)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$comment->name}}</td>
                                        {{--<td>{{$comment->email}}</td>--}}
                                        <td>
                                            @if($comment->status == 'waiting')
                                                <div class="badge badge-warning">Waiting</div>
                                            @elseif($comment->status == 'accepted')
                                                <div class="badge badge-success">Accepted</div>
                                            @else
                                                <div class="badge badge-danger">Rejected</div>
                                            @endif
                                        </td>
                                        <td>{{ Str::limit($comment->comment,30)}}</td>
                                        <td>{{$comment->created_at}}</td>
                                        <td>
                                            <div class="form-button-action">
                                                <form
                                                    action="{{ $comment->status == 'accepted' ? route('comments.deactivate',$comment->id): route('comments.activate',$comment->id) }}"
                                                    method="POST" class="delete-confirm" style="display: inline;">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit" data-toggle="tooltip"
                                                            title="{{$comment->status == 'accepted' ? 'Deactivate' : 'Activate'}} comment"
                                                            class="btn btn-link btn-{{$comment->status == 'accepted' ? 'warning' : 'success'}} btn-lg"
                                                            data-original-title="{{$comment->status == 'accepted' ? 'Deactivate' : 'Activate'}} comment">
                                                        <i class="fa fa-{{$comment->status == 'accepted' ? 'thumbs-down' : 'thumbs-up'}}"></i>
                                                    </button>
                                                </form>

                                                <a href="{{route('comments.show',$comment->id)}}">
                                                    <button type="button" data-toggle="tooltip" title="Show comment"
                                                            class="btn btn-link btn-primary btn-lg"
                                                            data-original-title="Show comment">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                </a>
                                                <form action="{{ route('comments.destroy', $comment->id) }}"
                                                      method="POST" class="delete-confirm" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" data-toggle="tooltip" title="Delete comment"
                                                            class="btn btn-link btn-danger btn-lg"
                                                            data-original-title="Delete comment"
                                                            onclick="return confirm('Are you sure you want to delete this comment?')">
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
