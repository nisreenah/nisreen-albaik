<div id="blog-header"
     style="background: url({{asset('storage/upload/blogs/'.$blog->image)}}); background-size: cover;">
    <div class="overlay"></div>
    <div class="single-post-title">
        <h1>{{$blog->en_title}}</h1>
        <p class="post-info">
            <span class="post-author">Posted by {{$blog->user->name}}</span>
            <span class="slash"></span>
            <span class="post-date">{{$blog->created_at}}</span>
            <span class="slash"></span>
        </p>
    </div>
</div>
<div class="block-content">
    <div class="row">
        <div class="col-md-12">
            <div id="single-post">
                <div class="post">
                    <div class="post-body">
                        <p>{{$blog->en_details}}</p>
                    </div>
                    <h5>{{$blog->comments->count()}} Comments</h5>
                    @if($blog->comments->count() > 0)
                        <div class="author-box row">
                            @foreach($blog->comments as $comment)
                                <div class="col-sm-10">
                                    <h3>{{$comment->name}}
                                        <span class="comment-date"> | {{$comment->created_at}}</span>
                                    </h3>
                                    <p>{{$comment->comment}}</p>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    @include('includes.blog-social')

                </div>
                <div id="respond">
                    <h3>Leave a comment</h3>
                    <div class="comment-respond">
                        <input name="token" id="token" type="hidden" value="{{csrf_token()}}">
                        <input name="blog_id" id="blog_id" type="hidden" value="{{$blog->id}}">
                        <div class="form-double">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Name"
                                       required>
                            </div>
                            <div class="form-group last">
                                <input name="email" id="email" type="text" class="form-control" placeholder="Email"
                                       required>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="comment" id="comment" placeholder="Comment"
                                      required></textarea>
                        </div>
                        <div class="form-submit">
                            <button type="sumbit" class="btn btn-dark leave-comment-btn ">Post Comment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
