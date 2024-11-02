@extends('admin.layouts.master')

@section('title')
    All Messages
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Messages</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>message</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($contact_us as $contact)
                                    <tr class="{{$contact->is_seen == 0 ? 'table-success' : ''}}">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$contact->name}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{Str::limit($contact->message,70) }}</td>

                                        <td>
                                            <div class="form-button-action">
                                                <a href="{{route('contact-us.show',$contact->id)}}">
                                                    <button type="button" data-toggle="tooltip" title=""
                                                            class="btn btn-link btn-primary btn-lg"
                                                            data-original-title="Edit Task">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                </a>

                                                <form action="{{ route('contact-us.destroy', $contact->id) }}"
                                                      method="POST" class="delete-confirm" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" data-toggle="tooltip" title="Delete message"
                                                            class="btn btn-link btn-danger btn-lg"
                                                            data-original-title="Delete message"
                                                            onclick="return confirm('Are you sure you want to delete this message?')">
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
