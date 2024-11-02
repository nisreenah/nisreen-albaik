@extends('admin.layouts.master')

@section('title')
    Edit Profile
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
                    <form action="{{route('profile.update-info',$profile->id)}}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="en_name">English Name</label>
                                        <input type="text" class="form-control @error('en_name') is-invalid @enderror"
                                               id="en_name" name="en_name" placeholder="English Name"
                                               value="{{$profile->en_name}}">
                                        @error('en_name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="en_title">English Title</label>
                                        <input type="text" class="form-control @error('en_title') is-invalid @enderror"
                                               id="en_title" name="en_title" placeholder="English Title"
                                               value="{{$profile->en_title}}">
                                        @error('en_title')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="en_major">English Major</label>
                                        <input type="text" class="form-control @error('en_major') is-invalid @enderror"
                                               id="en_major" name="en_major" placeholder="English Major"
                                               value="{{$profile->en_major}}">
                                        @error('en_major')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="en_address">English Country</label>
                                        <input type="text"
                                               class="form-control @error('en_country') is-invalid @enderror"
                                               id="en_country" name="en_country" placeholder="English country"
                                               value="{{$profile->en_country}}">
                                        @error('en_country')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="en_address">English Address</label>
                                        <input type="text"
                                               class="form-control @error('en_address') is-invalid @enderror"
                                               id="en_address" name="en_address" placeholder="English Address"
                                               value="{{$profile->en_address}}">
                                        @error('en_address')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="en_interest">English Interest</label>
                                        <textarea rows="5"
                                                  class="form-control @error('en_interest') is-invalid @enderror"
                                                  id="en_interest" name="en_interest"
                                                  placeholder="English Interest">{{$profile->en_interest}}</textarea>
                                        @error('en_interest')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="en_bio">English Bio</label>
                                        <textarea rows="5" class="form-control @error('en_bio') is-invalid @enderror"
                                                  id="en_bio" name="en_bio"
                                                  placeholder="English Bio">{{$profile->en_bio}}</textarea>
                                        @error('en_bio')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="en_summary">English Summary</label>
                                        <textarea rows="5"
                                                  class="form-control @error('en_summary') is-invalid @enderror"
                                                  id="en_summary" name="en_summary"
                                                  placeholder="English Summary">{{$profile->en_summary}}</textarea>
                                        @error('en_summary')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="CV">PDF CV</label>
                                        <input type="file" class="form-control" id="CV" name="CV">
                                    </div>

                                </div>
                                <div class="col-md-4 col-lg-4">

                                    <div class="form-group">
                                        <label for="ar_name">Arabic Name</label>
                                        <input type="text" class="form-control" id="ar_name" name="ar_name"
                                               placeholder="Arabic Name" value="{{$profile->ar_name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="ar_title">Arabic Title</label>
                                        <input type="text" class="form-control" id="ar_title" name="ar_title"
                                               placeholder="Arabic Title" value="{{$profile->ar_title}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="ar_major">Arabic Major</label>
                                        <input type="text" class="form-control" id="ar_major" name="ar_major"
                                               placeholder="Arabic Major" value="{{$profile->ar_major}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="en_address">Arabic Country</label>
                                        <input type="text"
                                               class="form-control @error('ar_country') is-invalid @enderror"
                                               id="ar_country" name="ar_country" placeholder="Arabic country"
                                               value="{{$profile->ar_country}}">
                                        @error('en_country')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="ar_address">Arabic Address</label>
                                        <input type="text" class="form-control" id="ar_address" name="ar_address"
                                               placeholder="Arabic Address" value="{{$profile->ar_address}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="ar_interest">Arabic Interest</label>
                                        <textarea rows="5" class="form-control" id="ar_interest" name="ar_interest"
                                                  placeholder="Arabic Interest">{{$profile->ar_interest}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="ar_bio">Arabic Bio</label>
                                        <textarea rows="5" class="form-control" id="ar_bio" name="ar_bio"
                                                  placeholder="Arabic Bio">{{$profile->ar_bio}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="ar_summary">Arabic Summary</label>
                                        <textarea rows="5" class="form-control" id="ar_summary" name="ar_summary"
                                                  placeholder="Arabic Summary">{{$profile->ar_summary}}</textarea>
                                    </div>

                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email"
                                               class="form-control @error('en_summary') is-invalid @enderror" id="email"
                                               name="email" placeholder="email" value="{{$profile->email}}">
                                        @error('en_summary')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="tel" class="form-control @error('en_summary') is-invalid @enderror"
                                               id="phone" name="phone" placeholder="phone" value="{{$profile->phone}}">
                                        @error('en_summary')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="date_of_birth">Date Of Birth</label>
                                        <input type="text"
                                               class="form-control @error('en_summary') is-invalid @enderror"
                                               id="date_of_birth" name="date_of_birth" placeholder="date_of_birth"
                                               value="{{$profile->date_of_birth}}">
                                        @error('en_summary')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="skype">Skype</label>
                                        <input type="text" class="form-control" id="skype" name="skype"
                                               placeholder="skype Link" value="{{$profile->skype}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="facebook">Facebook</label>
                                        <input type="text" class="form-control" id="facebook" name="facebook"
                                               placeholder="Facebook Link" value="{{$profile->facebook}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="twitter">Twitter</label>
                                        <input type="text" class="form-control" id="twitter" name="twitter"
                                               placeholder="Twitter Link" value="{{$profile->twitter}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="linkedIn">LinkedIn</label>
                                        <input type="text" class="form-control" id="linkedIn" name="linkedIn"
                                               placeholder="linkedIn Link" value="{{$profile->linkedIn}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="telegram">Telegram</label>
                                        <input type="text" class="form-control" id="telegram" name="telegram"
                                               placeholder="telegram Link" value="{{$profile->telegram}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="long">Longitude</label>
                                        <input type="text" class="form-control" id="long" name="long"
                                               placeholder="Longitude" value="{{$profile->long}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="lat">Latitudes</label>
                                        <input type="text" class="form-control" id="lat" name="lat"
                                               placeholder="Latitudes" value="{{$profile->lat}}">
                                    </div>

                                    <div class="form-check">
                                        <label>Status</label><br/>
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="status"
                                                   value="1" {{$profile->status == 1 ? 'checked' : ''}}>
                                            <span class="form-radio-sign">Active</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="status"
                                                   value="0" {{$profile->status == 0 ? 'checked' : ''}}>
                                            <span class="form-radio-sign">Not Active</span>
                                        </label>
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
