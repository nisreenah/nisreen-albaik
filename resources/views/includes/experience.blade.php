<div class="block-content">
    <h3 class="block-title">Experience</h3>
    <div class="timeline experience">
        <div class="row">
            <div class="col-md-12">
                <div class="exp-holder">
                    @foreach($experiences as $experience)
                        <div class="exp">
                            <div class="hgroup">
                                <h4><span>{{$experience->en_position}}</span> @ {{$experience->en_company}}</h4>
                                <h5>{{$experience->start_date}} - <span class="current">{{$experience->end_date != null ? $experience->end_date : 'Present'}}</span></h5>
                            </div>
                            <p>{{$experience->en_details}}</p>
                        </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
