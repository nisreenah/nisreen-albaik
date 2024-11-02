<div class="block-content">
    <h3 class="block-title">Education</h3>
    <div class="timeline education">
        <div class="row">
            <div class="col-md-12">
                <div class="exp-holder">
                    @foreach($educations as $education)
                    <div class="exp">
                        <div class="hgroup">
                            <h4>{{$education->en_major}} | <span>{{$education->en_university}}</span></h4>
                            <h5>{{$education->start_date}} - {{$education->end_date}}</h5>
                        </div>
{{--                        <p>Ut enim ad minim veniam, quis nostrud exerc. Irure dolor in reprehend incididunt labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>--}}
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
