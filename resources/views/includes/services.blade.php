<div class="block-content">
    <h3 class="block-title">Services</h3>
    <div class="row">
        @foreach($services as $service)
        <div class="col-md-6 col-sm-6 service">
            <div class="service-icon">
                <i class="{{$service->icon}}"></i>
            </div>
            <h4>{{$service->en_title}}</h4>
            <p>{{$service->en_details}}</p>
        </div>
        @endforeach
    </div>
</div>
