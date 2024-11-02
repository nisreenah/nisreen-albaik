@extends('admin.layouts.master')

@section('title')
    Edit Skill : {{$skill->name}}
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-inner">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title"> Edit Skill : {{$skill->name}}</div>
                    </div>
                    <form action="{{route('skills.update',$skill->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="percentage">Skill Percentage</label>
                                        <input type="number" class="form-control" id="percentage" name="percentage"
                                               placeholder="percentage" min="0" max="100" value="{{$skill->percentage}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="en_title">Skill Name</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                               placeholder="Skill Name" value="{{$skill->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="summary">Skill Summary</label>
                                        <textarea rows="5" class="form-control" id="summary" name="summary"
                                                  placeholder="Skill Summary">{{$skill->summary}}</textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a href="{{route('skills.index')}}" class="btn btn-danger">Cancel</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
