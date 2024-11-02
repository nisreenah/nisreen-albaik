@extends('admin.layouts.master')

@section('title')
    Edit password
@endsection

@section('styles')
@endsection

@section('content')
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Edit Profile</div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                        @csrf
                        @method('put')

                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <x-input-label for="update_password_current_password"
                                                       :value="__('Current Password')"/>
                                        <x-text-input id="update_password_current_password" name="current_password"
                                                      type="password" class="form-control"
                                                      autocomplete="current-password"/>
                                        <x-input-error :messages="$errors->updatePassword->get('current_password')"
                                                       class="mt-2"/>
                                    </div>
                                    <div class="form-group">
                                        <x-input-label for="update_password_password" :value="__('New Password')"/>
                                        <x-text-input id="update_password_password" name="password" type="password"
                                                      class="form-control" autocomplete="new-password"/>
                                        <x-input-error :messages="$errors->updatePassword->get('password')"
                                                       class="mt-2"/>
                                    </div>
                                    <div class="form-group">
                                        <x-input-label for="update_password_password_confirmation"
                                                       :value="__('Confirm Password')"/>
                                        <x-text-input id="update_password_password_confirmation"
                                                      name="password_confirmation" type="password"
                                                      class="form-control" autocomplete="new-password"/>
                                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')"
                                                       class="mt-2"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
