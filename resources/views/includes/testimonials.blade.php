<div class="block-content">
    <h3 class="block-title">Testimonials</h3>
    <div class="row m-3">
        <div id="liontestimonial" class="owl-carousel owl-theme">
            @foreach($testimonials as $testimonial)
                <div class="item testimonials">
                    <img class="responsive" style="object-fit: cover; width: 120px; height: 120px"
                         src="{{ $testimonial->image ? asset('upload/testimonials/' . $testimonial->image) : asset('resume/images/testimonials/1.jpg') }}"
                         alt="{{$testimonial->en_name}}">
                    <blockquote>
                        <p class="quote p-3">{{$testimonial->en_comment}}</p>
                        <p class="quote"><span>{{$testimonial->en_name}}</span>
                            <br/> {{$testimonial->en_position}}</p>
                    </blockquote>
                </div>
            @endforeach
        </div>
    </div>
</div>
