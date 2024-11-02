<div class="content-blocks portfolio">
    <section class="content">
        <div class="block-content">
            <h3 class="block-title">Portfolio</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="filters">
                        <span>Filters :</span>
                        <ul id="filters">
                            <li class="active" data-filter="*">All</li>
                                @if($categories)
                                    @foreach($categories as $category)
                                        <li data-filter=".{{$category->slug_name}}">{{$category->name}}</li>
                                    @endforeach
                                @endif
                        </ul>
                    </div>
                    <div class="classic portfolio-container row isotope" id="portfolio-container">

                    @foreach($portfolios as $portfolio)
                        <!-- WORK 1 START -->
                            <div class="col-sm-6 col-xs-12 portfolio-item {{$portfolio->category->slug_name ?? 'slug_name'}}">
                                <a class="open-project" href="{{route('show-portfolio',$portfolio->id)}}">
                                    <div class="portfolio-column">
                                        <img style="height:252px"
                                             src="{{asset('/upload/portfolios/'.$portfolio->image)}}" alt="">
                                        <div class="portfolio-content">
                                            <h2>{{$portfolio->en_name}}</h2>
                                            <p>{{$portfolio->category->name}}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- WORK 1 END -->
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-12 btn-email">
                <a href="mailto:{{$profile->email}}" class="btn lowercase">{{$profile->email}}</a>
            </div>
        </div>
    </section>
</div>
