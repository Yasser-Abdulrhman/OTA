@extends('layout.layout')
@section('cars')
<div class="inner-banner">
    <img class="center-image" src="{{asset('img/slider-1.jpg')}}" alt="">
    <div class="vertical-align">
        <div class="container">

            <h2 class="color-white">all Cars for you</h2>

        </div>
    </div>
</div>





<div class="main-wraper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="second-title">
                    <h2>Types Of Cars</h2>
                    <p class="color-grey">Car</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="top-baner arrows">
                <div class="swiper-container offers-slider" data-autoplay="5000" data-loop="1" data-speed="500"
                    data-slides-per-view="responsive" data-mob-slides="1" data-xs-slides="2" data-sm-slides="2"
                    data-md-slides="3" data-lg-slides="3" data-add-slides="3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-val="0">
                            <div class="offers-block radius-mask">
                                <div class="clip">
                                    <div class="bg bg-bg-chrome act" style="background-image:url({{asset('img/slider-1.jpg')}})">
                                    </div>
                                </div>
                                <div class="tour-layer delay-1"></div>
                                <div class="vertical-top">
                                    <div class="rate">
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                    </div>
                                    <h3>Nissan</h3>
                                </div>
                                <div class="vertical-bottom">
                                    <ul class="offers-info">
                                        <li><b>35</b>tours</li>
                                        <li><b>24</b>cities</li>
                                        <li><b>90</b>hotels</li>
                                    </ul>
                                    <p>Rose Al-Youssef Gate</p>
                                    <a href="car_detail.html" class="c-button bg-aqua hv-aqua-o b-40"><span>Book
                                            Now</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-val="1">
                            <div class="offers-block radius-mask">
                                <div class="clip">
                                    <div class="bg bg-bg-chrome act"
                                        style="background-image:url(img/slider_1_4.jpg)">
                                    </div>
                                </div>
                                <div class="tour-layer delay-1"></div>
                                <div class="vertical-top">
                                    <div class="rate">
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                    </div>
                                    <h3>Jeep</h3>
                                </div>
                                <div class="vertical-bottom">
                                    <ul class="offers-info">
                                        <li><b>58</b>tours</li>
                                        <li><b>49</b>cities</li>
                                        <li><b>70</b>hotels</li>
                                    </ul>
                                    <p>Tona Elgabl</p>
                                    <a href="car_detail.html" class="c-button bg-aqua hv-aqua-o b-40"><span>Book
                                            Now</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-val="2">
                            <div class="offers-block radius-mask">
                                <div class="clip">
                                    <div class="bg bg-bg-chrome act" style="background-image:url({{asset('img/slider-1.jpg')}})">
                                    </div>
                                </div>
                                <div class="tour-layer delay-1"></div>
                                <div class="vertical-top">
                                    <div class="rate">
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                    </div>
                                    <h3>HYUNDAI</h3>
                                </div>
                                <div class="vertical-bottom">
                                    <ul class="offers-info">
                                        <li><b>88</b>tours</li>
                                        <li><b>10</b>cities</li>
                                        <li><b>193</b>hotels</li>
                                    </ul>
                                    <p>Rose Al-Youssef Gate</p>
                                    <a href="car_detail.html" class="c-button bg-aqua hv-aqua-o b-40"><span>Book
                                            Now</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-val="3">
                            <div class="offers-block radius-mask">
                                <div class="clip">
                                    <div class="bg bg-bg-chrome act"
                                        style="background-image:url({{asset('img/slider_1_4.jpg')}})">
                                    </div>
                                </div>
                                <div class="tour-layer delay-1"></div>
                                <div class="vertical-top">
                                    <div class="rate">
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                    </div>
                                    <h3>TOTOTA</h3>
                                </div>
                                <div class="vertical-bottom">
                                    <ul class="offers-info">
                                        <li><b>88</b>tours</li>
                                        <li><b>10</b>cities</li>
                                        <li><b>193</b>hotels</li>
                                    </ul>
                                    <p>Tona Elgabl</p>
                                    <a href="car_detail.html" class="c-button bg-aqua hv-aqua-o b-40"><span>Book
                                            Now</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination  poin-style-1 pagination-hidden"></div>
                </div>
                <div class="swiper-arrow-left offers-arrow"><span class="fa fa-angle-left"></span></div>
                <div class="swiper-arrow-right offers-arrow"><span class="fa fa-angle-right"></span></div>
            </div>
        </div>
    </div>
</div>

<div class="main-wraper padd-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="second-title">
                    <h2>The Best Car</h2>
                    <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla.
                        Suspendisse id tor.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="radius-mask tour-block hover-aqua">
                    <div class="clip">
                        <div class="bg bg-bg-chrome act" style="background-image:url({{asset('img/71BekpCdZvL._UY560_.jpg')}})">
                        </div>
                    </div>
                    <div class="tour-layer delay-1"></div>
                    <div class="tour-caption">
                        <div class="vertical-align">
                            <h3 class="hover-it">HYUNDAI</h3>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <h4>from <b>EG 860</b></h4>
                        </div>
                        <div class="vertical-bottom">
                            <div class="fl">
                                <div class="tour-info">
                                    <img src="{{asset('img/people_icon.png')}}" alt="">
                                    <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong>
                                        adults, <strong class="color-white">1</strong> kids</span>
                                </div>
                                <div class="tour-info">
                                    <img src="{{asset('img/calendar_icon.png')}}" alt="">
                                    <span class="font-style-2 color-grey-4">July<strong class="color-white">
                                            19th</strong> to July<strong class="color-white"> 26th</strong></span>
                                </div>
                            </div>
                            <a href="car_detail.html" class="c-button b-50 bg-aqua hv-transparent fr"><img
                                    src="img/flag_icon.png" alt=""><span>view more</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="radius-mask tour-block">
                    <div class="clip">
                        <div class="bg bg-bg-chrome act" style="background-image:url({{asset('img/slider_1_4.jpg')}})">
                        </div>
                    </div>
                    <div class="tour-layer delay-1"></div>
                    <div class="tour-caption">
                        <div class="vertical-align">
                            <h3 class="hover-it">Marsidec</h3>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <h4>from <b>EG 750</b></h4>
                        </div>
                        <div class="vertical-bottom">
                            <div class="fl">
                                <div class="tour-info">
                                    <img src="{{asset('img/people_icon.png')}}" alt="">
                                    <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong>
                                        adults, <strong class="color-white">1</strong> kids</span>
                                </div>
                                <div class="tour-info">
                                    <img src="{{asset('img/calendar_icon.png')}}" alt="">
                                    <span class="font-style-2 color-grey-4">July<strong class="color-white">
                                            19th</strong> to July<strong class="color-white"> 26th</strong></span>
                                </div>
                            </div>
                            <a href="car_detail.html" class="c-button bg-aqua hv-transparent b-50 fr"><img
                                    src="{{asset('img/flag_icon.png')}}" alt=""><span>view more</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="radius-mask tour-block">
                    <div class="clip">
                        <div class="bg bg-bg-chrome act"
                            style="background-image:url({{asset('img/cars/61wYYYRKLDL._UY560_.jpg')}})">
                        </div>
                    </div>
                    <div class="tour-layer delay-1"></div>
                    <div class="tour-caption">
                        <div class="vertical-align">
                            <h3 class="hover-it">Nissan</h3>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <h4>from <b>EG 900</b></h4>
                        </div>
                        <div class="vertical-bottom">
                            <div class="fl">
                                <div class="tour-info">
                                    <img src="{{asset('img/people_icon.png')}}" alt="">
                                    <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong>
                                        adults, <strong class="color-white">1</strong> kids</span>
                                </div>
                                <div class="tour-info">
                                    <img src="{{asset('img/calendar_icon.png')}}" alt="">
                                    <span class="font-style-2 color-grey-4">July<strong class="color-white">
                                            19th</strong> to July<strong class="color-white"> 26th</strong></span>
                                </div>
                            </div>
                            <a href="car_detail.html" class="c-button bg-aqua hv-transparent b-50 fr"><img
                                    src="{{asset('img/flag_icon.png')}}" alt=""><span>view more</span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- TOP PREVIEW-->
<div class="top-preview row no-margin">
    <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
        <div class="tp_entry style-2">
            <div class="tp_image">
                <img class="center-image" src="{{asset('img/2014_Nissan_Versa_01.jpg')}}" alt="">
            </div>
            <div class="tp_content">
                <div class="rate-wrap clearfix">
                    <div class="rate">
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                    </div>
                    <i>485 rewies</i>
                    <div class="tp_price">EG 950</div>
                </div>
                <h4><b><a href="car_detail.html">car In Minia</a></b></h4>
                <div class="tour-info-line clearfix">
                    <div class="tour-info fl">
                        <img src="{{asset('img/calendar_icon_grey.png')}}" alt="">
                        <span class="font-style-2 color-grey-3">July <strong>19th 2021</strong></span>
                    </div>
                    <div class="tour-info fl">
                        <img src="{{asset('img/loc_icon_small_grey.png')}}" alt="">
                        <span class="font-style-2 color-grey-3">Adnan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
        <div class="tp_entry style-2">
            <div class="tp_image">
                <img class="center-image" src="{{asset('img/banner-slider-2.jpg')}}" alt="">
            </div>
            <div class="tp_content">
                <div class="rate-wrap clearfix">
                    <div class="rate">
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                    </div>
                    <i>485 rewies</i>
                    <div class="tp_price">EG 273</div>
                </div>
                <h4><b><a href="car_detail.html">Car In Bani Mazar</a></b></h4>
                <div class="tour-info-line clearfix">
                    <div class="tour-info fl">
                        <img src="{{asset('img/calendar_icon_grey.png')}}" alt="">
                        <span class="font-style-2 color-grey-3">July <strong>19th 2021</strong></span>
                    </div>
                    <div class="tour-info fl">
                        <img src="{{asset('img/loc_icon_small_grey.png')}}" alt="">
                        <span class="font-style-2 color-grey-3">Bani Mazar</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
        <div class="tp_entry style-2">
            <div class="tp_image">
                <img class="center-image" src="{{asset('img/unnamed.png')}}" alt="">
            </div>
            <div class="tp_content">
                <div class="rate-wrap clearfix">
                    <div class="rate">
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                    </div>
                    <i>485 rewies</i>
                    <div class="tp_price">EG 273</div>
                </div>
                <h4><b><a href="car_detail.html">car In Malawy</a></b></h4>
                <div class="tour-info-line clearfix">
                    <div class="tour-info fl">
                        <img src="{{asset('img/calendar_icon_grey.png')}}" alt="">
                        <span class="font-style-2 color-grey-3">July <strong>19th 2021</strong></span>
                    </div>
                    <div class="tour-info fl">
                        <img src="{{asset('img/loc_icon_small_grey.png')}}" alt="">
                        <span class="font-style-2 color-grey-3">Malawy</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
        <div class="tp_entry style-2">
            <div class="tp_image">
                <img class="center-image" src="{{asset('img/51rkn5UDQhL._UY462_.jpg')}}" alt="">
            </div>
            <div class="tp_content">
                <div class="rate-wrap clearfix">
                    <div class="rate">
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                    </div>
                    <i>485 rewies</i>
                    <div class="tp_price">EG 573</div>
                </div>
                <h4><b><a href="car_detail.html">Car In Mati</a></b></h4>
                <div class="tour-info-line clearfix">
                    <div class="tour-info fl">
                        <img src="{{asset('img/calendar_icon_grey.png')}}" alt="">
                        <span class="font-style-2 color-grey-3">July <strong>19th 2021</strong></span>
                    </div>
                    <div class="tour-info fl">
                        <img src="{{asset('img/loc_icon_small_grey.png')}}" alt="">
                        <span class="font-style-2 color-grey-3">Mati Elbald</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
        <div class="tp_entry style-2">
            <div class="tp_image">
                <img class="center-image" src="{{asset('img/download.jfif')}}" alt="">
            </div>
            <div class="tp_content">
                <div class="rate-wrap clearfix">
                    <div class="rate">
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                    </div>
                    <i>485 rewies</i>
                    <div class="tp_price">EG 273</div>
                </div>
                <h4><b><a href="car_detail.html">car in samalout</a></b></h4>
                <div class="tour-info-line clearfix">
                    <div class="tour-info fl">
                        <img src="{{asset('img/calendar_icon_grey.png')}}" alt="">
                        <span class="font-style-2 color-grey-3">July <strong>19th 2021</strong></span>
                    </div>
                    <div class="tour-info fl">
                        <img src="{{asset('img/loc_icon_small_grey.png')}}" alt="">
                        <span class="font-style-2 color-grey-3">samalout</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
        <div class="tp_entry style-2">
            <div class="tp_image">
                <img class="center-image" src="{{asset('img/71BekpCdZvL._UY560_.jpg')}}" alt="">
            </div>
            <div class="tp_content">
                <div class="rate-wrap clearfix">
                    <div class="rate">
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                    </div>
                    <i>485 rewies</i>
                    <div class="tp_price">EG 288</div>
                </div>
                <h4><b><a href="car_detail.html">car In Aboqorqas</a></b></h4>
                <div class="tour-info-line clearfix">
                    <div class="tour-info fl">
                        <img src="{{asset('img/calendar_icon_grey.png')}}" alt="">
                        <span class="font-style-2 color-grey-3">July <strong>19th 2021</strong></span>
                    </div>
                    <div class="tour-info fl">
                        <img src="{{asset('img/loc_icon_small_grey.png')}}" alt="">
                        <span class="font-style-2 color-grey-3">Aboqorqas</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
        <div class="tp_entry style-2">
            <div class="tp_image">
                <img class="center-image" src="{{asset('img/cars/redcar.jfif')}}" alt="">
            </div>
            <div class="tp_content">
                <div class="rate-wrap clearfix">
                    <div class="rate">
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                    </div>
                    <i>485 rewies</i>
                    <div class="tp_price">EG 973</div>
                </div>
                <h4><b><a href="car_detail.html">CAR IN Dermawas</a></b></h4>
                <div class="tour-info-line clearfix">
                    <div class="tour-info fl">
                        <img src="{{asset('img/calendar_icon_grey.png')}}" alt="">
                        <span class="font-style-2 color-grey-3">July <strong>19th 2021</strong></span>
                    </div>
                    <div class="tour-info fl">
                        <img src="{{asset('img/loc_icon_small_grey.png')}}" alt="">
                        <span class="font-style-2 color-grey-3">Dermawas</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-mob-12 col-xs-6 col-sm-6 col-md-3 no-padding">
        <div class="tp_entry style-2">
            <div class="tp_image">
                <img class="center-image" src="{{asset('img/cars/61wYYYRKLDL._UY560_.jpg')}}" alt="">
            </div>
            <div class="tp_content">
                <div class="rate-wrap clearfix">
                    <div class="rate">
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                        <span class="fa fa-star color-yellow"></span>
                    </div>
                    <i>485 rewies</i>
                    <div class="tp_price">EG 993</div>
                </div>
                <h4><b><a href="car_detail.html">Car In Damaris</a></b></h4>
                <div class="tour-info-line clearfix">
                    <div class="tour-info fl">
                        <img src="{{asset('img/calendar_icon_grey.png')}}" alt="">
                        <span class="font-style-2 color-grey-3">July <strong>19th 2021</strong></span>
                    </div>
                    <div class="tour-info fl">
                        <img src="{{asset('img/loc_icon_small_grey.png')}}" alt="">
                        <span class="font-style-2 color-grey-3">Damaris</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="list-wrapper bg-grey-2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="sidebar bg-white clearfix">
                    <div class="sidebar-block">
                        <h4 class="sidebar-title color-dark-2">search</h4>
                        <div class="search-inputs">
                            <div class="form-block clearfix">
                                <div class="input-style-1 b-50 color-3">
                                    <img src="{{asset('img/loc_icon_small_grey.png')}}" alt="">
                                    <input type="text" placeholder="Where do you want to go?">
                                </div>
                            </div>
                            <div class="form-block clearfix">
                                <div class="input-style-1 b-50 color-3">
                                    <img src="{{asset('img/calendar_icon_grey.png')}}" alt="">
                                    <input type="text" placeholder="Check In" class="datepicker">
                                </div>
                            </div>
                            <div class="form-block clearfix">
                                <div class="input-style-1 b-50 color-3">
                                    <img src="{{asset('img/calendar_icon_grey.png')}}" alt="">
                                    <input type="text" placeholder="Check Out" class="datepicker">
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="c-button b-40 bg-blue-2 hv-blue-2-o" value="search">
                    </div>

                    <div class="sidebar-block">
                        <h4 class="sidebar-title color-dark-2">price range</h4>
                        <div class="slider-range color-1 clearfix" data-counter="$" data-position="start"
                            data-from="0" data-to="1500" data-min="0" data-max="2000">
                            <div class="range"></div>
                            <input type="text" class="amount-start" readonly value="$0">
                            <input type="text" class="amount-end" readonly value="$1500">
                        </div>
                        <input type="submit" class="c-button b-40 bg-blue-2 hv-blue-2-o" value="search">
                    </div>
                    <div class="sidebar-block">
                        <h4 class="sidebar-title color-dark-2">Car length</h4>
                        <div class="slider-range color-3 clearfix" data-counter=" NIGNT" data-position="end"
                            data-from="0" data-to="7" data-min="0" data-max="9">
                            <div class="range"></div>
                            <input type="text" class="amount-start" readonly value="0 NIGNT">
                            <input type="text" class="amount-end" readonly value="7 NIGNT">
                        </div>
                        <input type="submit" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o" value="search">
                    </div>
                    <div class="sidebar-block">
                        <h4 class="sidebar-title color-dark-2">star rating</h4>
                        <div class="sidebar-rating">
                            <div class="input-entry color-1">
                                <input class="checkbox-form" id="star-5" type="checkbox" name="checkbox"
                                    value="climat control">
                                <label class="clearfix" for="star-5">
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                    <span class="rate">
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="input-entry color-1">
                                <input class="checkbox-form" id="star-4" type="checkbox" name="checkbox"
                                    value="climat control">
                                <label class="clearfix" for="star-4">
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                    <span class="rate">
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="input-entry color-1">
                                <input class="checkbox-form" id="star-3" type="checkbox" name="checkbox"
                                    value="climat control">
                                <label class="clearfix" for="star-3">
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                    <span class="rate">
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="input-entry color-1">
                                <input class="checkbox-form" id="star-2" type="checkbox" name="checkbox"
                                    value="climat control">
                                <label class="clearfix" for="star-2">
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                    <span class="rate">
                                        <span class="fa fa-star color-yellow"></span>
                                        <span class="fa fa-star color-yellow"></span>
                                    </span>
                                </label>
                            </div>
                            <div class="input-entry color-1">
                                <input class="checkbox-form" id="star-1" type="checkbox" name="checkbox"
                                    value="climat control">
                                <label class="clearfix" for="star-1">
                                    <span class="sp-check"><i class="fa fa-check"></i></span>
                                    <span class="rate">
                                        <span class="fa fa-star color-yellow"></span>
                                    </span>
                                </label>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-9">
                <div class="list-header clearfix">
                    <div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
                        <div class="drop">
                            <b>Sort by price</b>
                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                            <span>
                                <a href="#">ASC</a>
                                <a href="#">DESC</a>
                            </span>
                        </div>
                    </div>
                    <div class="drop-wrap drop-wrap-s-4 color-4 list-sort">
                        <div class="drop">
                            <b>Sort by ranking</b>
                            <a href="#" class="drop-list"><i class="fa fa-angle-down"></i></a>
                            <span>
                                <a href="#">ASC</a>
                                <a href="#">DESC</a>
                            </span>
                        </div>
                    </div>
                    <div class="list-view-change">
                        <div class="change-grid color-1 fr"><i class="fa fa-th"></i></div>
                        <div class="change-list color-1 fr active"><i class="fa fa-bars"></i></div>
                        <div class="change-to-label fr color-grey-8">View:</div>
                    </div>
                </div>
                <div class="list-content clearfix">
                    <div class="list-item-entry">
                        <div class="hotel-item style-3 bg-white">
                            <div class="table-view">
                                <div class="radius-top cell-view">
                                    <img src="{{asset('img/cars/PORSCHECAYENNE.jpg')}}" alt="">
                                </div>
                                <div class="title hotel-middle clearfix cell-view">
                                    <div class="date list-hidden">July <strong>19th</strong> to July
                                        <strong>26th</strong>
                                    </div>
                                    <div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
                                    <h4><b>Marcides</b></h4>
                                    <div class="rate-wrap">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 rewies</i>
                                    </div>
                                    <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut
                                        sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
                                </div>
                                <div class="title hotel-right clearfix cell-view">
                                    <div class="hotel-person color-dark-2">from <span class="color-blue">EG
                                            653</span> person</div>
                                    <a class="c-button b-40 bg-blue hv-blue-o grid-hidden"
                                        href="car_detail.html">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-item-entry">
                        <div class="hotel-item style-3 bg-white">
                            <div class="table-view">
                                <div class="radius-top cell-view">
                                    <img src="{{asset('img/cars/71BekpCdZvL._UY560_.jpg')}}" alt="">
                                </div>
                                <div class="title hotel-middle clearfix cell-view">
                                    <div class="date list-hidden">July <strong>19th</strong> to July
                                        <strong>26th</strong>
                                    </div>
                                    <div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
                                    <h4><b>BMW</b></h4>
                                    <div class="rate-wrap">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 rewies</i>
                                    </div>
                                    <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut
                                        sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
                                </div>
                                <div class="title hotel-right clearfix cell-view">
                                    <div class="hotel-person color-dark-2">from <span class="color-blue">EG
                                            703</span> person</div>
                                    <a class="c-button b-40 bg-blue hv-blue-o grid-hidden"
                                        href="car_detail.html">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="list-item-entry">
                        <div class="hotel-item style-3 bg-white">
                            <div class="table-view">
                                <div class="radius-top cell-view">
                                    <img src="{{asset('img/2014_Nissan_Versa_01.jpg')}}" alt="">
                                </div>
                                <div class="title hotel-middle clearfix cell-view">
                                    <div class="date list-hidden">July <strong>19th</strong> to July
                                        <strong>26th</strong>
                                    </div>
                                    <div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
                                    <h4><b>Jeep</b></h4>
                                    <div class="rate-wrap">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 rewies</i>
                                    </div>
                                    <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut
                                        sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
                                </div>
                                <div class="title hotel-right clearfix cell-view">
                                    <div class="hotel-person color-dark-2">from <span class="color-blue">EG
                                            300</span> person</div>
                                    <a class="c-button b-40 bg-blue hv-blue-o grid-hidden"
                                        href="car_detail.html">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-item-entry">
                        <div class="hotel-item style-3 bg-white">
                            <div class="table-view">
                                <div class="radius-top cell-view">
                                    <img src="{{asset('img/61q033vciXL._UY560_.jpg')}}" alt="">
                                </div>
                                <div class="title hotel-middle clearfix cell-view">
                                    <div class="date list-hidden">July <strong>19th</strong> to July
                                        <strong>26th</strong>
                                    </div>
                                    <div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
                                    <h4><b>HYUNDAI</b></h4>
                                    <div class="rate-wrap">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 rewies</i>
                                    </div>
                                    <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut
                                        sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
                                </div>
                                <div class="title hotel-right clearfix cell-view">
                                    <div class="hotel-person color-dark-2">from <span class="color-blue">EG
                                            400</span> person</div>
                                    <a class="c-button b-40 bg-blue hv-blue-o grid-hidden"
                                        href="car_detail.html">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-item-entry">
                        <div class="hotel-item style-3 bg-white">
                            <div class="table-view">
                                <div class="radius-top cell-view">
                                    <img src="{{asset('img/2014_Nissan_Versa_01.jpg')}}" alt="">
                                </div>
                                <div class="title hotel-middle clearfix cell-view">
                                    <div class="date list-hidden">July <strong>19th</strong> to July
                                        <strong>26th</strong>
                                    </div>
                                    <div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
                                    <h4><b>Marsidec</b></h4>
                                    <div class="rate-wrap">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 rewies</i>
                                    </div>
                                    <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut
                                        sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
                                </div>
                                <div class="title hotel-right clearfix cell-view">
                                    <div class="hotel-person color-dark-2">from <span class="color-blue">EG
                                            273</span> person</div>
                                    <a class="c-button b-40 bg-blue hv-blue-o grid-hidden"
                                        href="car_detail.html">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-item-entry">
                        <div class="hotel-item style-3 bg-white">
                            <div class="table-view">
                                <div class="radius-top cell-view">
                                    <img src="{{asset('img/cars/PORSCHECAYENNE.jpg')}}" alt="">
                                </div>
                                <div class="title hotel-middle clearfix cell-view">
                                    <div class="date list-hidden">July <strong>19th</strong> to July
                                        <strong>26th</strong>
                                    </div>
                                    <div class="date grid-hidden"><strong>19.07 - 26.07 / 7</strong> night</div>
                                    <h4><b>HYUNDAI</b></h4>
                                    <div class="rate-wrap">
                                        <div class="rate">
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                            <span class="fa fa-star color-yellow"></span>
                                        </div>
                                        <i>485 rewies</i>
                                    </div>
                                    <p class="f-14 grid-hidden">Nunc cursus libero purus ac congue arcu cur sus ut
                                        sed vitae pulvinar. Nunc cursus libero purus ac congue arcu.</p>
                                </div>
                                <div class="title hotel-right clearfix cell-view">
                                    <div class="hotel-person color-dark-2">from <span class="color-blue">EG
                                            273</span> person</div>
                                    <a class="c-button b-40 bg-blue hv-blue-o grid-hidden"
                                        href="car_detail.html">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="c_pagination clearfix padd-120">
                    <a href="#" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o fl">prev page</a>
                    <a href="#" class="c-button b-40 bg-dr-blue-2 hv-dr-blue-2-o fr">next page</a>
                    <ul class="cp_content color-3">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">10</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>



@endsection