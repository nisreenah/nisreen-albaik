@extends('admin.layouts.master')

@section('title')
    Add New Skill
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-inner">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title"> Add New Skill Form</div>
                    </div>
                    <form action="{{route('skills.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <label for="percentage">Skill Percentage</label>
                                        <input type="number"
                                               class="form-control @error('percentage') is-invalid @enderror"
                                               id="percentage" name="percentage"
                                               placeholder="percentage" min="0" max="100">
                                        @error('percentage')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="mame">Skill Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                               id="name" name="name" placeholder="Skill Name">
                                        @error('name')
                                             <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="summary">Skill Summary</label>
                                        <textarea rows="5" class="form-control @error('name') is-invalid @enderror"
                                                  id="summary" name="summary"
                                                  placeholder="Skill Summary"></textarea>
                                        @error('summary')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Submit</button>
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
