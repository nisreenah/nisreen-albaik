<div class="block-content">
    <h3 class="block-title">Profile</h3>
    <h6 class="subheading">
        I'm a <strong>{{$profile->en_name ?? 'Name' }}</strong>
        from {{$profile->en_country ?? 'en_country'}}. <br/>
        {{$profile->en_bio ?? ' bio'}}
    </h6>

    <div class="info-list row">
        <div class="col-sm-6"><span>Name : </span> {{$profile->en_name ?? 'Name'}}</div>
        <div class="col-sm-6"><span>Date of birth : </span> {{$profile->date_of_birth ?? 'date_of_birth'}} </div>
        <div class="col-sm-6"><span>Address : </span> {{$profile->en_address ?? 'en_address'}}</div>
        <div class="col-sm-6"><span>Email : </span> {{$profile->email ?? 'email'}}</div>
        <div class="col-sm-6"><span>Phone : </span> {{$profile->phone ?? 'phone'}}</div>
{{--        <div class="col-sm-6"><span>Skype : </span> {{$profile->skype ?? 'sk'}}</div>--}}
        <div class="col-sm-6"><span>Interest : </span> {{$profile->en_interest ?? 'en_interest'}}</div>
    </div>
{{--    <img class="sign" src="images/signature.png" alt="" />--}}
</div>
