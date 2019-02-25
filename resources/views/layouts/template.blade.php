<!doctype html>
<html lang="en">
<head>
    <title>Popular Posts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">

    <link rel="stylesheet" href={{ asset("css/bootstrap.css") }}>
    <link rel="stylesheet" href={{ asset("css/animate.css") }}>
    <link rel="stylesheet" href={{ asset("css/owl.carousel.min.css") }}>

    <link rel="stylesheet" href={{ asset("fonts/ionicons/css/ionicons.min.css") }}>
    <link rel="stylesheet" href={{ asset("fonts/fontawesome/css/font-awesome.min.css") }}>
    <link rel="stylesheet" href={{ asset("fonts/flaticon/font/flaticon.css") }}>

    <!-- Theme Style -->
    <link rel="stylesheet" href={{ asset("css/style.css") }}>
</head>
<body>



<header role="banner">




    <nav class="navbar navbar-expand-md  navbar-light bg-light">
        <div class="container">


            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href={{route("blog.index")}}>Acceuil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorie</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            @foreach($cat as $cats)

                    <a class="dropdown-item" href="{{ route('categ.show', $cats->id)}}">{{$cats->name}}</a>
                    @endforeach


                    <li class="nav-item">
                        <a class="nav-link" href={{route("contact.index")}}>Contact</a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
</header>
<!-- END header -->


<!-- END section -->




            <!-- END main-content -->



@yield('contenu')







<!-- END sidebar -->




<footer class="site-footer">
    <div class="container">
        <div class=row>
            <div class="col-md-12">






                <a href="#"><span class="fa fa-twitter"></span> </a>
                <a href="#"><span class="fa fa-facebook"></span> </a>
                <a href="#"><span class="fa fa-instagram"></span> </a>
                <a href="#"><span class="fa fa-vimeo"></span> </a></li>
                <a href="#"><span class="fa fa-youtube-play"></span> </a>
                <a href="#"><span class="fa fa-snapchat"></span> </a>



                <br>

                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>
<!-- END footer -->

<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

<script src={{ asset("js/jquery-3.2.1.min.js") }}></script>
<script src={{ asset("js/jquery-migrate-3.0.0.js") }}></script>
<script src={{ asset("js/popper.min.js") }}></script>
<script src={{ asset("js/bootstrap.min.js") }}></script>
<script src={{ asset("js/owl.carousel.min.js") }}></script>
<script src={{ asset("js/jquery.waypoints.min.js") }}></script>
<script src={{ asset("js/jquery.stellar.min.js") }}></script>


<script src={{ asset("js/main.js") }}></script>
</body>
</html>