<div class="block-content">
    <h3 class="block-title">Skills</h3>
    @foreach($skills as $skill)
        <div class="fz">
            <label class="progress-bar-label">{{$skill->name}} - <span>{{$skill->summary}}</span></label>
            <div class="progress">
                <div style="width: {{$skill->percentage}}%;" class="progress-bar" role="progressbar"
                     aria-valuenow="{{$skill->percentage}}"
                     aria-valuemin="0" aria-valuemax="100">
                    <span>{{$skill->percentage}}%</span>
                </div>
            </div>
        </div>
    @endforeach
</div>


