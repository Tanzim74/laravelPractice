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
                                    <a href="index.html"> {{ $blogs[0]->Title }} </a>
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
</body>

<div class="row">



    <div class="col-8">

        <div class="card ml-3 mt-3">
            <div class="card" style="background-color:#FFFACD">
                <div class="middle" style='text-align:center;'>

                    <h2><strong> {{ $blogs[0]->Title }}</strong> </h2>

                    <h5><strong>{{ $blogs[0]->created_at }}</strong></h5>
                    <p>{{ $blogs[0]->short_description }}</p>

                </div>


            </div>
            <div class="initials p-3 mt-3">

                <div class="description p-3">
                    {!! $blogs[0]->Description !!}

                </div>

            </div>
        </div>


    </div>



    <div class="col-4 mt-3 pt-3 mb-5">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset($blogs[0]->image) }}" alt="Card image cap">
            <div class="card-body">
                <h3 class="card-title"> <strong> Welcome!!</strong></h3>
                <p class="card-text"> Here you can find all the latest fashion and blogs about your daily fashion
                </p>
            </div>
        </div>


        @foreach ($allBlogs as $eachBlog)
            <div class="item mb-4 mt-5">
                <div class="row g-3 g-xl-0">
                    <div class="col-2 col-xl-3">
                        <img class="img-fluid post-thumb " src="{{ asset($eachBlog->image) }}" alt="image">
                    </div>
                    <div class="col">
                        <h3 class="title mb-1">{{ $eachBlog->Title }}</h3>
                        <div class="meta mb-1"><span class="date"> Published at
                                {{ $eachBlog->created_at }}</span>
                            <div class="intro">{{ $eachBlog->short_description }}</div>
                            <a class="text-link" href="{{ route('readBlog', ['id' => $eachBlog->id]) }}">Read more
                                →</a>
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                </div>
        @endforeach
        {!! $allBlogs->links('pagination::bootstrap-4') !!}

    </div>
</div>
</div>

</html>
