@extends('resturant.parent')

@section('title', 'RESTA | MENU')



@section('styles')

@endsection

@section('content')

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Our Menu</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- Delicious area start  -->
    <div class="Delicious_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-50">
                        <h3>Delicious Food For You</h3>
                    </div>
                </div>
            </div>
            <div class="tablist_menu">
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="nav justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">
                                    <div class="single_menu text-center">
                                        <div class="icon">
                                            <i class="flaticon-lunch"></i>
                                        </div>
                                        <h4>Dinner</h4>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">
                                    <div class="single_menu text-center">
                                        <div class="icon">
                                            <i class="flaticon-food"></i>
                                        </div>
                                        <h4>Breakfast</h4>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">
                                    <div class="single_menu text-center">
                                        <div class="icon">
                                            <i class="flaticon-kitchen"></i>
                                        </div>
                                        <h4>Lunch</h4>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/1.png" alt="DISH" loading="lazy">
                                </div>
                                <div class="info">
                                    <h3>#12. Chicken Chilis</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/3.png" alt="DISH" loading="lazy">
                                </div>
                                <div class="info">
                                    <h3>#10. Fried Rice</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/5.png" alt="DISH" loading="lazy">
                                </div>
                                <div class="info">
                                    <h3>#02. Burger Cury</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/2.png" alt="DISH" loading="lazy">
                                </div>
                                <div class="info">
                                    <h3>#16. Chicken Chilis</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/4.png" alt="DISH" loading="lazy">
                                </div>
                                <div class="info">
                                    <h3>#08. Vegetable fry</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/6.png" alt="DISH" loading="lazy">
                                </div>
                                <div class="info">
                                    <h3>#01. Chicken Chilis</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/1.png" alt="DISH" loading="lazy">
                                </div>
                                <div class="info">
                                    <h3>#12. Chicken Chilis</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/3.png" alt="DISH" loading="lazy">
                                </div>
                                <div class="info">
                                    <h3>#10. Fried Rice</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/5.png" alt="DISH" loading="lazy">
                                </div>
                                <div class="info">
                                    <h3>#02. Burger Cury</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/2.png" alt="DISH" loading="lazy">
                                </div>
                                <div class="info">
                                    <h3>#16. Chicken Chilis</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/4.png" alt="DISH" loading="lazy">
                                </div>
                                <div class="info">
                                    <h3>#08. Vegetable fry</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/6.png" alt="DISH" loading="lazy">
                                </div>
                                <div class="info">
                                    <h3>#01. Chicken Chilis</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/1.png" alt="DISH" loading="lazy">
                                </div>
                                <div class="info">
                                    <h3>#12. Chicken Chilis</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/3.png" alt="DISH" loading="lazy">
                                </div>
                                <div class="info">
                                    <h3>#10. Fried Rice</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/5.png" alt="DISH" loading="lazy">
                                </div>
                                <div class="info">
                                    <h3>#02. Burger Cury</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/2.png" alt="DISH" loading="lazy">
                                </div>
                                <div class="info">
                                    <h3>#16. Chicken Chilis</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/4.png" alt="DISH" loading="lazy">
                                </div>
                                <div class="info">
                                    <h3>#08. Vegetable fry</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                            <div class="single_delicious d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/delicious/6.png" alt="DISH" loading="lazy">
                                </div>
                                <div class="info">
                                    <h3>#01. Chicken Chilis</h3>
                                    <p>Craft beer elit seitan exercitation photo booth et 8-bit kale chips.</p>
                                    <span>$20</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--/ Delicious area start  -->



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
