<!DOCTYPE html>
<html lang="en">
<head>
    <title>Refuge</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap-css -->

    <link href="css/owl.carousel.css" rel="stylesheet"><!-- Owl-carousel-CSS -->

    <link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" /><!-- pop-up css -->

    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

    <!-- banner css -->
    <link rel="stylesheet" href="css/poposlides.css" type="text/css" media="all" />
    <!-- //banner css -->

    <!-- font-awesome-icons -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- //font-awesome-icons -->

    <!-- google fonts -->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <!-- //google fonts -->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!--/main-header-->
<div class="demo-inner-content" id="home">
    <div class="main_agileits">
        <!--/banner-info-->
        <!-- header -->
        <div class="header-w3layouts">
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Refuge</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h1><a class="navbar-brand" href="{{ route('member.refuge') }}">Refuge</a></h1>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav navbar-right cl-effect-15">
                            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                            <li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>
                            <li><a class="page-scroll scroll" href="{{ route('admin.addshelter') }}">新增收容所</a></li>
                            <li><a class="page-scroll scroll" href="{{ route('admin.shelter') }}">管理收容動物</a></li>
                            @if (Route::has('login'))
                                @auth
                                    <li><a class="page-scroll scroll" href="{{ url('/home') }}">Home</a></li>
                                    @else
                                        <li><a class="page-scroll scroll" href="{{ route('login') }}">登入</a></li>
                                        @if (Route::has('register'))
                                            <li><a class="page-scroll scroll" href="{{ route('register') }}">註冊</a></li>
                                        @endif
                                @endauth
                            @endif
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
        </div>
        <!-- //header -->

        <!-- banner info-->
        <div class="w3-banner-head-info">
            <div class="container">
                <div class="banner-text">
                    <h2 class="editContent">Refuge</h2>
                    <p>SEE the animal</p>
                </div>
            </div>
        </div>
        <!-- //banner-info-->
        <div class="slides-box">
            <ul class="slides">
                <li style="background: url(images/cat4.jfif) no-repeat;background-size:cover;"></li>

            </ul>
        </div>
        <!-- //banner  -->
    </div>
</div>
<!--/banner-section-->
<div  class="w3ls-section w3-about">
    <div  class="container">
        @yield('content')
    </div>
</div>
</body>

</html>

