<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Blog</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('blog/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('blog/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('blog/css/responsive.css') }}">
    <!-- fevicon -->
    <link rel="icon" href=" {{ asset('blog/images/fevicon.png') }}" type="image/gif" />
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="{{ asset('blog/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('blog/css/bootstrap-datepicker.min.css') }}">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->

    <!-- end loader -->

    <!-- header -->
    <header class="header-area">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-12">
                    <div class="header_top">
                        <div class="row">
                            <div class="col-md-4 d_none">
                                <ul class="top_info">
                                    <li><i class="fa fa-phone" aria-hidden="true"></i>
                                        Call : +01 1234567890
                                    </li>
                                    <li><i class="fa fa-envelope" aria-hidden="true"></i>
                                        <a href="Javascript:void(0)">Loram ipusm</a>
                                    </li>
                                </ul>
                            </div>
                            <div class=" col-md-4 col-sm-12">
                                <div class="logo">
                                    <a href="index.html">BLOGGING </a>
                                </div>
                            </div>
                            <div class="col-md-4 d_none">
                                <ul class="social_icon text_align_right">
                                    <li><a href="Javascript:void(0)"><i class="fa fa-facebook"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="Javascript:void(0)"><i class="fa fa-twitter"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="Javascript:void(0)"><i class="fa fa-linkedin"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="Javascript:void(0)"><i class="fa fa-instagram"
                                                aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <!-- end header inner -->
    <!-- banner -->
    <!-- end banner -->
    <!-- perfect -->

    <div class="perfect">
        <div class="container_width">

            @foreach ($blogs as $key => $blog)
                <?php
                if ($key % 2 == 0) {

                        
                    ?>

                <div class="row d_flex">
                    <div class="col-lg-6">
                        <div class="titlepage flot_right text_align_left">
                            <h2>{{ $blog->title }}</h2>
                            <p>{{ $blog->short_description }}</p>
                            <a class="read_more" href=" {{ route('readBlog', ['id' => $blog->id]) }}">Read
                                More</a>

                            <div class="likeShareBtnmt-3">
                                <div id="fb-root"></div>
                                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v11.0"
                                    nonce="ccaa4s"></script>
                                <div class="fb-like" data-layout="standard" data-action="like" data-size="large"
                                    data-show-faces="true"
                                    data-href="{{ env('APP_URL') . '/' . route('readBlog', ['id' => $blog->id]) }}"
                                    data-share="true">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="perfect_img">
                            <span>{{ $blog->created_at->format('m/d/Y') }}</span>
                            <figure><img src="{{ $blog->image }}" alt="#" width="350" height="auto" />
                            </figure>
                        </div>
                    </div>
                </div>

                <?php


                }

                else{

                    ?>

                <div class="row d_flex grig">
                    <div class="col-lg-6">
                        <div class="perfect_img">
                            <span> {{ $blog->created_at->format('m/d/Y') }}</span>
                            <figure><img src="{{ $blog->image }}" alt="#" width="350" height="auto" />
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6 order">
                        <div class="titlepage text_align_left">
                            <h2>{{ $blog->title }}</h2>
                            <p>{{ $blog->short_description }}</p>
                            <a class="read_more" href="{{ route('readBlog', ['id' => $blog->id]) }}">Read
                                More</a>

                            <div class="likeShareBtnmt-3">
                                <div id="fb-root"></div>
                                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v11.0"
                                    nonce="ccaa4s"></script>
                                <div class="fb-like" data-layout="standard" data-action="like" data-size="large"
                                    data-show-faces="true"
                                    data-href="{{ env('APP_URL') . '/' . route('readBlog', ['id' => $blog->id]) }}"
                                    data-share="true">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <?php


                }
                
                ?>

        <div class="separator-breadcrumb border-top mt-3 p-3"></div>
        @endforeach




    </div>
    </div>



    <!-- end perfect -->
    <!-- combined -->

    <!-- end combined -->
    <!-- contact -->
    <div class="contact card">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="titlepage text_align_center">
                        <h2>Contact Us</h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <form id="request" class="main_form">
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="form_control" placeholder="Name" type="type" name=" Name">
                            </div>
                            <div class="col-md-12">
                                <input class="form_control" placeholder="Email" type="type" name="Email">
                            </div>
                            <div class="col-md-12">
                                <input class="form_control" placeholder="Phone Number" type="type"
                                    name="Phone Number">
                            </div>
                            <div class="col-md-12">
                                <input class="textarea" placeholder="Message" type="type" name="message">
                            </div>
                            <div class="col-md-12">
                                <button class="send_btn">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
    <!--  footer -->
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{ asset('blog/js/jquery.min.js') }}"></script>
    <script src="{{ asset('blog/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('blog/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('blog/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('blog/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('blog/js/custom.js') }}"></script>
</body>

</html>
