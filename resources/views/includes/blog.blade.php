<div class="content-blocks blog">
    <section class="content">
        <div class="block-content">
            <h3 class="block-title">My Blog</h3>
            <div class="row">
                <div class="col-md-10 mx-auto">
                    @foreach($blogs as $blog)
                        <div class="post">
                        <div class="post-thumbnail">
                            <a class="open-post" href="{{route('show-blog',$blog->id)}}">
                                <img src="{{asset('storage/upload/blogs/'.$blog->image)}}"
                                     style="width: 100%; height: 400px; object-fit: cover;" alt="">
                            </a>
                        </div>
                        <div class="post-title">
                            <a class="open-post" href="{{route('show-blog',$blog->id)}}"><h2>{{$blog->en_title}}</h2></a>
                            <p class="post-info">
                                <span class="post-author">Posted by {{$blog->user->name}}</span>
                                <span class="slash"></span>
                                <span class="post-date">{{$blog->created_at}}</span>
                                <span class="slash"></span>
                            </p>
                        </div>
                        <div class="post-body">
                            <p>{{Str::limit($blog->en_details, 250)}}</p>
                            <a class="btn open-post" href="{{route('show-blog',$blog->id)}}">Read More</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
