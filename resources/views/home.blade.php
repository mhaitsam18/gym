<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.css">
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">

    <title>Gym</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>

    <style type="text/css">
    	#mymap {
      		border:1px solid red;
      		width: 735px;
      		height: 500px;
    	}
    </style>

</head>

<body>



    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->



    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->


                        <a href="" class="logo">
                            <img src="assets/images/logo.png" align="" style="width: 100px; padding-top:-20px;">


                            <a class="menu-trigger">

                                <span>Menu</span>

                            </a>

                        </a>



                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>

                            <li>

                                @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                    <li>

                        {{-- <x-app-layout>

                        </x-app-layout> --}}

                        @include("nav-menu-home")

                    </li>
                    @else
                    <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>

                    @if (Route::has('register'))
                    <li>  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                    @endif
                    @endauth
                </div>
                @endif


            </li>

        </ul>        



        <!-- ***** Menu End ***** -->
    </nav>
</div>
</div>
</div>
</header>
<!-- ***** Header Area End ***** -->



<!-- ***** Main Banner Area Start ***** -->
<div id="top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-content">
                    <div class="inner-content">
                        <h4>GYM</h4>
                        <h6>‘Well done is better than well said.’</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/aaa.jpg" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                        <!-- Item -->
                        <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/b4.jpg" alt="">
                            </div>
                        </div>
                        <!-- // Item -->
                        <!-- Item -->
                        <!-- // Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** About Area Starts ***** -->
<section class="section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>About </h6>
                        <h2>Badminton</h2>
                    </div>
                    <p>Gym merupakan akronim dari Gymnasium. Secara harfiah, gym dapat diartikan sebagai tempat atau lokasi untuk melakukan kegiatan latihan dan olahraga seperti layanan senam, atletik, dan ataupun juga kardio,
                        Namun kini gym telah mengalami ‘pergeseran makna’ sehingga lebih identik dengan pusat latihan kebugaran untuk melakukan berbagai macam aktivitas dan latihan seperti angkat beban, senam, latihan kardio, dan juga kegiatan olahraga lainnya.    <p>
                        
                            "Energi dan ketekunan menaklukkan segala hal. Kemampuan adalah apa yang mampu kamu lakukan. Motivasi menentukan apa yang kamu akukan. Sikap menentukan seberapa baik kamu melakukannya."  </p><br>
                    <div class="row">

                        <div class="col-12">
                            <img src="assets/images/b4.jpg" alt="">
                        </div>
                        <center><p>-</p></center>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="right-content">
                    <div class="thumb">
                        <a rel="nofollow" href=""><i class="fa fa-play"></i></a>
                        <img src="assets/images/b3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include("gmap")


<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xs-12">
                <div class="right-text-content">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                {{-- <div class="logo">
                    <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
                </div> --}}
            </div>
            <div class="col-lg-4 col-xs-12">
                <div class="left-text-content">
                    <p>© Copyright Gym.

                        <br>Design: TemplateMo</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>





    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
                setTimeout(function() {
                  $("."+selectedClass).fadeIn();
                  $("#portfolio").fadeTo(50, 1);
              }, 500);
                
            });
        });

    </script>






</body>
</html>