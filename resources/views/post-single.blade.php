<div id="blog-header"
     style="background: url({{asset('/upload/blogs/'.$blog->image)}}); background-size: cover;">
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
                    <div class="author-box row">
                        @if($blog->comments->count() > 0)
                            @foreach($blog->comments as $comment)
                                <div class="col-sm-10">
                                    <h3>{{$comment->name}}
                                        <span class="comment-date"> | {{$comment->created_at}}</span>
                                    </h3>
                                    <p>{{$comment->comment}}</p>
                                </div>
                            @endforeach
                        @endif
                    </div>

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
{{--<script>--}}
{{--    $(document).ready(function () {--}}

{{--        $('.leave-comment-btn').on('click', function (e) {--}}
{{--            console.log('hi');--}}
{{--            e.preventDefault();--}}

{{--            var name = $("#name").val(),--}}
{{--                comment = $("#comment").val(),--}}
{{--                email = $("#email").val(),--}}
{{--                blog_id = $("#blog_id").val(),--}}
{{--                token = $("#token").val();--}}

{{--            //console.log(comment);--}}
{{--            //console.log(email);--}}

{{--            $.ajax({--}}
{{--                type: 'POST',--}}
{{--                url: window.location.origin + '/leave-a-comment',--}}
{{--                data: {--}}
{{--                    name: name,--}}
{{--                    comment: comment,--}}
{{--                    email: email,--}}
{{--                    blog_id: blog_id,--}}
{{--                    _token: token--}}
{{--                },--}}
{{--                success: function (data) {--}}
{{--                    var icon = 'success';--}}
{{--                    if (data.status == false) {--}}
{{--                        icon = 'error';--}}
{{--                    }--}}
{{--                    swal({--}}
{{--                        icon: icon,--}}
{{--                        title: data.title,--}}
{{--                        text: data.text,--}}
{{--                    });--}}
{{--                },--}}
{{--                error: function (reject) {--}}
{{--                    var errors = $.parseJSON(reject.responseText);--}}
{{--                    swal({--}}
{{--                        icon: 'error',--}}
{{--                        title: errors.errors.email ? errors.errors.email[0]--}}
{{--                            : errors.errors.comment ? errors.errors.comment[0]--}}
{{--                                : errors.errors.blog_id ? errors.errors.blog_id[0]--}}
{{--                                    : errors.errors.name ? errors.errors.name[0] : '',--}}
{{--                    });--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    });--}}

{{--    $('.open-post').on('click', function () {--}}
{{--        var postUrl = $(this).attr("href");--}}
{{--        $('.inline-menu-container').removeClass('showx');--}}
{{--        $('.content-blocks.pop').addClass('showx');--}}
{{--        $('.content-blocks.pop section').load(postUrl)--}}
{{--        return false;--}}
{{--    });--}}
{{--    $('#close-post').on('click', function () {--}}
{{--        $('.content-blocks.pop').removeClass('showx');--}}
{{--        $('.inline-menu-container').addClass('showx');--}}
{{--        $('.content-blocks.pop section').empty();--}}
{{--    });--}}
{{--</script>--}}


