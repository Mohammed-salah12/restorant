@extends('resturant.parent')

@section('title', 'RESTA | ABOUT')



@section('styles')

@endsection

@section('content')

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>About Us</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <div class="main_about_wrap">
        <div class="container">
            <div class="row">
                @foreach ($abouts as $about )
                <div class="col-xl-12">
                    <h3>{{ $about->title }}</h3>
                    <p>{{ $about->content }}</p>
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="about_thumb">
                                <img src="img/about/about_1.png" alt="ABOUT" loading="lazy">
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="about_thumb">
                                <img  src="{{asset('storage/images/about/'.$about->image)}}" loading="lazy" alt="User Image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- about_area_start -->
    <div class="about_area">
        <div class="icon_1 d-none d-md-block">
            <img src="img/icon/1.png" alt="ICON" loading="lazy">
        </div>
        <div class="icon_2 d-none d-md-block">
            <img src="img/icon/2.png" alt="ICON" loading="lazy">
        </div>
        <div class="icon_3 d-none d-md-block">
            <img src="img/icon/3.png" alt="ICON" loading="lazy">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about_info_wrap">
                        <h3>Sed ut perspiciatis unde <br>
                            omnis iste natus</h3>
                        <span class="long_dash"></span>
                        <p>Omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                            eaque ipsa quae ab illo inventore veritatis et quasi. Exercitation photo booth stumptown
                            tote bag todo Banksy, elit small batch freegan sed. Craft beer elit seitan exercitation
                            photo booth et 8-bit kale chips proident chillwave deep vow laborum. Aliquip veniam
                            delectus, marfa eiusmod pinterest.</p>
                        <ul class="food_list">
                            <li>
                                <img src="img/svg_icon/salad.svg" alt="SALAD" loading="lazy">
                                <span>Fresh Ingredients</span>
                            </li>
                            <li>
                                <img src="img/svg_icon/tray.svg" alt="TRAY" loading="lazy">
                                <span>Expert cooker</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_img">
                        <div class="img_1">
                            <img src="img/about/big.png" alt="BIG" loading="lazy">
                        </div>
                        <div class="small_img">
                            <img src="img/about/small.png" alt="SMALL" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end -->

    <!-- testimonial_area  -->
    <div class="testimonial_area overlay custom_mt">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <p>Testimonials</p>
                        <h3>Our Customer’s Say</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">

                        <div class="single_carousel">
                            <div class="single_testmonial ">
                                @foreach ($says as $say)
                                <div class="author_opinion">
                                    <p>{{ $say->message }}</p>
                                </div>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img class="img-circle img-bordered-sm" width="60" height="60" src="{{asset('storage/images/say/'.$say->image)}}" alt="">
                                    </div>
                                    <div class="name">
                                        <h3>{{ $say->name }}</h3>
                                        <div class="icon">
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->

    <!-- Start Reservation Table -->
    <div class="Reservation_area" id="Reservation">
        <div class="rev_icon_1 d-none d-md-block">
            <img src="img/icon/4.png" alt="ICON" loading="lazy">
        </div>
        <div class="rev_icon_2 d-none d-md-block">
            <img src="img/icon/5.png" alt="ICON" loading="lazy">
        </div>
        <div class="rev_icon_3 d-none d-md-block">
            <img src="img/icon/6.png" alt="ICON" loading="lazy">
        </div>
        <div class="container p-0">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-75">
                        <h3>Reservation</h3>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-xl-6 col-lg-6">
                    <div class="map_area">
                        <div id="map" style="height: 480px; position: relative; overflow: hidden;"> </div>
                        <script>
                            function initMap() {
                                var uluru = {
                                    lat: -25.363,
                                    lng: 131.044
                                };
                                var grayStyles = [{
                                        featureType: "all",
                                        stylers: [{
                                                saturation: -90
                                            },
                                            {
                                                lightness: 50
                                            }
                                        ]
                                    },
                                    {
                                        elementType: 'labels.text.fill',
                                        stylers: [{
                                            color: '#ccdee9'
                                        }]
                                    }
                                ];
                                var map = new google.maps.Map(document.getElementById('map'), {
                                    center: {
                                        lat: -31.197,
                                        lng: 150.744
                                    },
                                    zoom: 9,
                                    styles: grayStyles,
                                    scrollwheel: false
                                });
                            }
                        </script>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
                        </script>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="book_Form">
                        <h3>Book a Table</h3>
                        <div class="row ">
                            <div class="col-lg-6">
                                <div class="input_field mb_15">
                                    <input type="text" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input_field mb_15">
                                    <input type="text" placeholder="Phone no.">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input_field">
                                    <input id="datepicker2" placeholder="Date">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input_field">
                                    <div class="input_field">
                                        <select class="wide">
                                            <option data-display="Dinner">Dinner</option>
                                            <option value="1">Dinner</option>
                                            <option value="1">Dinner</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-2">
                                <div class="input_field mb-1">
                                    <div class=" dd oty">
                                        <label for=""> <span class="text-white">Person</span> <br>

                                            <div class="input-group d-flex ">
                                                <div>
                                                    <input type="text" class="form-control"
                                                        aria-label="Text input with segmented dropdown button"
                                                        value="1">
                                                </div>
                                                <div class="d-flex flex-column ">

                                                    <button type="button" class="btn">
                                                        <i class="fa-regular fa-angle-up"></i>
                                                    </button>
                                                    <button type="button" class="btn">
                                                        <i class="fa-regular fa-angle-down"></i>
                                                    </button>

                                                    <style>
                                                        .btn {
                                                            width: 25px;
                                                            height: 23px;
                                                            text-align: center;
                                                            padding: 0%;
                                                        }
                                                    </style>


                                                </div>
                                            </div>

                                            <script>
                                                // make counter for oty
                                                let otybtns = document.querySelectorAll(".oty .input-group .btn");
                                                let inp_t = document.querySelector(".oty .input-group input");
                                                console.log(otybtns, inp_t);
                                                let ii = 1;
                                                let vv = inp_t.value;

                                                otybtns[0].onclick = _ => {
                                                    console.log("kkk")
                                                    inp_t.value = ++ii;
                                                }
                                                otybtns[1].onclick = _ => {
                                                    if (inp_t.value == 1) {
                                                        inp_t.value = 1;
                                                    } else {
                                                        console.log("kkk")
                                                        inp_t.value = --ii;
                                                    }

                                                }
                                            </script>

                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <button class="sumbit_btn" type="submit">Book</button>
                            </div>
                            <div class="col-lg-6">
                                <div class="single_add d-flex">
                                    <div class="icon">
                                        <img src="img/svg_icon/address.svg" alt="ADDRESS" loading="lazy">
                                    </div>
                                    <div class="ifno">
                                        <h4>Address</h4>
                                        <p>20/D, Kings road, Green </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single_add d-flex">
                                    <div class="icon">
                                        <img src="img/svg_icon/head.svg" alt="ICON" loading="lazy">
                                    </div>
                                    <div class="ifno">
                                        <h4>Reservation</h4>
                                        <p>+10 673 567 367</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Reservation Table -->

@endsection

@section('scripts')
<script>
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-calendar-o"></span>'
        }
    });
    $('#datepicker2').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-calendar-o"></span>'
        }

    });
</script>
@endsection
