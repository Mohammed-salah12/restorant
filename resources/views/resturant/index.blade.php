

@extends('resturant.parent')

@section('title', 'RESTA')



@section('styles')

@endsection

@section('content')
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Fresh and Delicious Food
                                    For your Health</h3>
                                <a href="{{ route('resturant.menu') }}" class="boxed-btn3">View Menus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Fresh and Delicious Food
                                    For your Health</h3>
                                <a href="{{ route('resturant.menu') }}" class="boxed-btn3">View Menus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-9 col-md-9 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Fresh and Delicious Food
                                    For your Health</h3>
                                <a href="{{ route('resturant.menu') }}" class="boxed-btn3">View Menus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    <div class="about_area">
        <div class="icon_1 d-none d-md-block">
            <img src="img/icon/1.png" alt="BURGER" loading="lazy">
        </div>
        <div class="icon_2 d-none d-md-block">
            <img src="img/icon/2.png" alt="PIZZA" loading="lazy">
        </div>
        <div class="icon_3 d-none d-md-block">
            <img src="img/icon/3.png" alt="CAKE" loading="lazy">
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
                                <img src="img/svg_icon/salad.svg" alt="FRESH" loading="lazy">
                                <span>Fresh Ingredients</span>
                            </li>
                            <li>
                                <img src="img/svg_icon/tray.svg" alt="EXPERT COOKER" loading="lazy">
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
    <!-- testimonial_area  -->
    <div class="testimonial_area overlay ">
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
                                <div class="author_opinion">
                                    <p>“Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor
                                        sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed
                                        neque.</p>
                                </div>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                        <img src="img/testimonial/author2.png" alt="PERSONAL" loading="lazy">
                                    </div>
                                    <div class="name">
                                        <h3>Kristiana Chouhan</h3>
                                        <div class="icon">
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                            <a href="#"><i class="fa fa-star"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->

    <!-- gallery_start -->
    <div class="container">
        <div class="gallery_area">
            <div class="container ">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title text-center mb-75">
                            <h3>Photo Gallery</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_gallery big_img">
                <a class="popup-image" href="img/gallery/1.png"></a>
                <img src="img/gallery/1.png" alt="FOOD" loading="lazy">
            </div>
            <div class="single_gallery small_img">
                <a class="popup-image" href="img/gallery/2.png"></a>
                <img src="img/gallery/2.png" alt="FOOD" loading="lazy">
            </div>
            <div class="single_gallery small_img">
                <a class="popup-image" href="img/gallery/3.png"></a>
                <img src="img/gallery/3.png" alt="FOOD" loading="lazy">
            </div>

            <div class="single_gallery small_img">
                <a class="popup-image" href="img/gallery/4.png"></a>
                <img src="img/gallery/4.png" alt="FOOD" loading="lazy">
            </div>
            <div class="single_gallery small_img">
                <a class="popup-image" href="img/gallery/5.png"></a>
                <img src="img/gallery/5.png" alt="FOOD" loading="lazy">
            </div>
            <div class="single_gallery big_img">
                <a class="popup-image" href="img/gallery/6.png"></a>
                <img src="img/gallery/6.png" alt="FOOD" loading="lazy">
            </div>
        </div>
    </div>

    <!-- gallery end -->

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
                                    <input type="text" class="form-control" name="person_name" id="person_name"
                                    placeholder="Enter name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input_field mb_15">
                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter mobile">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input_field">
                                    <input type="date" class="form-control" name="date" id="date" placeholder="Enter Date">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input_field">
                                    <div class="input_field">
                                        <select class="form-control select2" id="category_id" name="category_id" style="width: 100%;">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
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
                                                    <input type="text" id="person_number" name="person_number"  class="form-control"
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
                                <button class="sumbit_btn" onclick="Store()" type="button">Book</button>
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
<script src="{{ asset('cms/js/crud.js') }}"></script>


<script>
    function Store() {

        let formData = new FormData();
        formData.append('person_name', document.getElementById('person_name').value);
        formData.append('person_number', document.getElementById('person_number').value);
        formData.append('date', document.getElementById('date').value);
        formData.append('category_id', document.getElementById('category_id').value);
        formData.append('mobile', document.getElementById('mobile').value);

        store('/cms/admin/bookings', formData);
    }
</script>
@endsection
