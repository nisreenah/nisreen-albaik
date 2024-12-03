<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>{{$profile->en_name ?? 'null'}}</title>
    <meta name="description"
          content="{{$profile->en_name ?? 'null'}}">
    <meta name="author" content="NisreenAlbaik"/>
    <link rel="icon" href="{{asset('resume/images/N.png')}}"/>

    <!-- Bootstrap CSS -->
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <link rel="stylesheet" href="{{asset('resume/css/plugins.min.css')}}" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{asset('resume/css/style.css')}}" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{asset('resume/node_modules/sweetalert/dist/sweetalert.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>
<div class="preloader">
    <div class="anim pulse"><i class="ion-ios-bolt-outline"></i></div>
</div>
<div class="preloader-left"></div>
<div class="inline-menu-container">
    <span class="status">I am available for freelance</span>
    <ul class="inline-menu">
        <li class="about menu-item">Resume</li>
        <li class="portfolio menu-item">Portfolio</li>
        <li class="blog menu-item">Blog</li>
        <li class="contact menu-item">Contact</li>
        <li id="close" class="menu-item"><i class="ion-ios-close-empty"></i></li>
    </ul>
</div>
<section class="home">
    <div class="bgScroll"></div>
    <div class="overlay opacity7"></div>
    <div class="container">
        <div class="name-block">
            <div class="name-block-container">
                <h1><span>Hi, I'm</span>{{$profile->en_name ?? 'English name'}}</h1>
                <h2>{{$profile->en_major ?? 'English Major' }}</h2>
                <a target="_blank" href="{{asset('upload/profile/'.$profile->CV)}}" class="btn btn-download">Download
                    Resume</a>
                <ul class="social">
                    @if(!empty($profile->facebook))
                        <li>
                            <a href="{{$profile->facebook}}"><i style="font-size:20px" class="ion-social-facebook"></i></a>
                        </li>
                    @endif
                    <li><a href="{{$profile->twitter}}"><i style="font-size:20px" class="ion-social-twitter"></i></a>
                    </li>
{{--                    <li><a href="{{$profile->skype}}"><i style="font-size:20px" class="ion-social-skype"></i></a></li>--}}
                    <li><a href="{{$profile->linkedIn}}"><i style="font-size:20px" class="ion-social-linkedin"></i></a>
                    </li>
                    <li><a href="{{$profile->telegram}}"><i style="font-size:20px" class="fab fa-telegram"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="menu-blocks">
            <div class="about-block menu-block">
                <div class="about-block-container">
                    <h2 class="about menu-item">Resume</h2>
                </div>
            </div>
            <div class="portfolio-block  menu-block">
                <div class="portfolio-block-container">
                    <h2 class="portfolio menu-item">Portfolio</h2>
                </div>
            </div>

            <div class="blog-block  menu-block">
                <div class="blog-block-container">
                    <h2 class="blog menu-item">Blog</h2>
                </div>
            </div>
            <div class="contact-block  menu-block">
                <div class="contact-block-container">
                    <h2 class="contact menu-item">Contact</h2>
                </div>
            </div>
        </div>

        @include('includes.about')

        @include('includes.portfolio')

        @include('includes.blog')

        @include('includes.contact')

        <div class="content-blocks pop">
            <div id="close-pop" class="close-pop">Close <i class="ion-ios-close-empty"></i></div>
            <section class="content"></section>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js" defer></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" defer></script>

<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" defer></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" defer></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js" defer></script>

<script src="{{asset('resume/js/plugins.min.js')}}" defer></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmsb2nGLuIl04bt7CWJozRMhThvGa3y1w" defer></script>
<script src="{{asset('resume/js/main.js')}}" defer></script>
<script src="{{asset('resume/js/get-in-touch.js')}}" async></script>
<script src="{{asset('resume/js/leave-a-comment.js')}}" async></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js" defer></script>
{{--<script src="{{asset('js/form-validation.js')}}"></script>--}}

</body>

</html>
