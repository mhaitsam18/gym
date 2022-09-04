@extends('layouts.main')
@section('content')
@if (session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
    </div>
@endif
@if (session()->has('gagal'))
    <div class="alert alert-danger col-lg-12" role="alert">
        {{ session('gagal') }}
    </div>
@endif
<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h2>{{ $title }}</h2>
                <center>
                    <div class="w3-content" style="max-width:1100px">
                        <img class="mySlides" src="/slider/1.jpg" style="width:50%;display:none">
                        <img class="mySlides" src="/slider/2.jpg" style="width:50%">
                        <img class="mySlides" src="/slider/3.jpg" style="width:50%;display:none">

                        <div class="w3-row-padding w3-section">
                            <div class="w3-col s4">
                                <img class="demo w3-opacity w3-hover-opacity-off" src="/slider/1.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(1)">
                            </div>
                            <div class="w3-col s4">
                                <img class="demo w3-opacity w3-hover-opacity-off" src="/slider/2.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(2)">
                            </div>
                            <div class="w3-col s4">
                                <img class="demo w3-opacity w3-hover-opacity-off" src="/slider/3.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(3)">
                            </div>

                        </div>
                    </div>
                </center>
                <script>
                    function currentDiv(n) {
                        showDivs(slideIndex = n);
                    }

                    function showDivs(n) {
                        var i;
                        var x = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("demo");
                        if (n > x.length) {
                            slideIndex = 1
                        }
                        if (n < 1) {
                            slideIndex = x.length
                        }
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                        }
                        x[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " w3-opacity-off";
                    }
                </script>
            </div>
        </div>
    </div>
</div>
@endsection
@section('modal')

@endsection
@section('script')

@endsection