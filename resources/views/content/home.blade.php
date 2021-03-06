@extends('layout.layout')

@section('home')
<div class="full-height">
    <div class="video-wrapper">
        <video loop autoplay muted poster="img/259633153.jpg" class="bgvid" id="bgvid">
            <source type="video/mp4" src="{{asset('video/This is Egypt.mp4')}}">
            <!-- <source type="video/ogv" src="video/This is Egypt.ogv"> -->
            <!-- <source type="video/webm" src="video/video.webm"> -->
        </video>
        <div class="vertical-align">
            <div class="container">
                <div class="tabs-slider">
                    <div class="baner-tabs">
                        <div class="text-center">
                            <div class="drop-tabs">
                                <b>hotels</b>
                                <a href="#" class="arrow-down"><i class="fa fa-angle-down"></i></a>
                                <ul class="nav-tabs tpl-tabs tabs-style-1">
                                    <li class="active click-tabs"><a href="hotels.html" data-toggle="tab"
                                            aria-expanded="false">Hotels</a>
                                    </li>
                                    <li class="click-tabs"><a href="cars.html" data-toggle="tab"
                                            aria-expanded="false">Cars</a></li>
                                    <li class="click-tabs"><a href="tours.html" data-toggle="tab"
                                            aria-expanded="false">Tours</a></li>

                                </ul>
                            </div>
                        </div>
                        <div class="tab-content tpl-tabs-cont section-text t-con-style-1">
                            <div class="tab-pane active in" id="one">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                            <div class="tabs-block">
                                                <h5>Your Destinations</h5>
                                                <div class="input-style">
                                                    <img src="{{asset('img/loc_icon_small.png')}}" alt="">
                                                    <input type="text"
                                                        placeholder="Enter a destination or hotel name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                            <div class="tabs-block">
                                                <h5>Check In</h5>
                                                <div class="input-style">
                                                    <img src="{{asset('img/calendar_icon.png')}}" alt="">
                                                    <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                            <div class="tabs-block">
                                                <h5>Check Out</h5>
                                                <div class="input-style">
                                                    <img src="{{asset('img/calendar_icon.png')}}" alt="">
                                                    <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                            <div class="tabs-block">
                                                <h5>Kids</h5>
                                                <div class="drop-wrap">
                                                    <div class="drop">
                                                        <b>01 kids</b>
                                                        <a href="#" class="drop-list"><i
                                                                class="fa fa-angle-down"></i></a>
                                                        <span>
                                                            <a href="#">01 kids</a>
                                                            <a href="#">02 kids</a>
                                                            <a href="#">03 kids</a>
                                                            <a href="#">04 kids</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                            <div class="tabs-block">
                                                <h5>Adults</h5>
                                                <div class="drop-wrap">
                                                    <div class="drop">
                                                        <b>01 adult</b>
                                                        <a href="#" class="drop-list"><i
                                                                class="fa fa-angle-down"></i></a>
                                                        <span>
                                                            <a href="#">01 adult</a>
                                                            <a href="#">02 adult</a>
                                                            <a href="#">03 adult</a>
                                                            <a href="#">04 adult</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                            <div class="tabs-block">
                                                <h5>Rooms</h5>
                                                <div class="drop-wrap">
                                                    <div class="drop">
                                                        <b>01 room</b>
                                                        <a href="#" class="drop-list"><i
                                                                class="fa fa-angle-down"></i></a>
                                                        <span>
                                                            <a href="#">01 room</a>
                                                            <a href="#">02 room</a>
                                                            <a href="#">03 room</a>
                                                            <a href="#">04 room</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                                            <a href="#" class="c-button b-60 bg-aqua hv-transparent"><i
                                                    class="fa fa-search"></i><span>search now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="two">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                            <div class="tabs-block">
                                                <h5>Your Destinationss</h5>
                                                <div class="input-style">
                                                    <img src="{{asset('img/loc_icon_small.png')}}" alt="">
                                                    <input type="text"
                                                        placeholder="Enter a destination or flight name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                            <div class="tabs-block">
                                                <h5>Check In</h5>
                                                <div class="input-style">
                                                    <img src="{{asset('img/calendar_icon.png')}}" alt="">
                                                    <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                            <div class="tabs-block">
                                                <h5>Check Out</h5>
                                                <div class="input-style">
                                                    <img src="{{asset('img/calendar_icon.png')}}" alt="">
                                                    <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                            <div class="tabs-block">
                                                <h5>Kids</h5>
                                                <div class="drop-wrap">
                                                    <div class="drop">
                                                        <b>01 kids</b>
                                                        <a href="#" class="drop-list"><i
                                                                class="fa fa-angle-down"></i></a>
                                                        <span>
                                                            <a href="#">01 kids</a>
                                                            <a href="#">02 kids</a>
                                                            <a href="#">03 kids</a>
                                                            <a href="#">04 kids</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                            <div class="tabs-block">
                                                <h5>Adults</h5>
                                                <div class="drop-wrap">
                                                    <div class="drop">
                                                        <b>01 adult</b>
                                                        <a href="#" class="drop-list"><i
                                                                class="fa fa-angle-down"></i></a>
                                                        <span>
                                                            <a href="#">01 adult</a>
                                                            <a href="#">02 adult</a>
                                                            <a href="#">03 adult</a>
                                                            <a href="#">04 adult</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                            <div class="tabs-block">
                                                <h5>Rooms</h5>
                                                <div class="drop-wrap">
                                                    <div class="drop">
                                                        <b>01 room</b>
                                                        <a href="#" class="drop-list"><i
                                                                class="fa fa-angle-down"></i></a>
                                                        <span>
                                                            <a href="#">01 room</a>
                                                            <a href="#">02 room</a>
                                                            <a href="#">03 room</a>
                                                            <a href="#">04 room</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                                            <a href="#" class="c-button b-60 bg-aqua hv-transparent"><i
                                                    class="fa fa-search"></i><span>search now</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="three">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                            <div class="tabs-block">
                                                <h5>Your Destinationss</h5>
                                                <div class="input-style">
                                                    <img src="{{asset('img/loc_icon_small.png')}}" alt="">
                                                    <input type="text"
                                                        placeholder="Enter a destination or car name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                            <div class="tabs-block">
                                                <h5>Check In</h5>
                                                <div class="input-style">
                                                    <img src="{{asset('img/calendar_icon.png')}}" alt="">
                                                    <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                                            <div class="tabs-block">
                                                <h5>Check Out</h5>
                                                <div class="input-style">
                                                    <img src="{{asset('img/calendar_icon.png')}}" alt="">
                                                    <input type="text" placeholder="Mm/Dd/Yy" class="datepicker">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                            <div class="tabs-block">
                                                <h5>Kids</h5>
                                                <div class="drop-wrap">
                                                    <div class="drop">
                                                        <b>01 kids</b>
                                                        <a href="#" class="drop-list"><i
                                                                class="fa fa-angle-down"></i></a>
                                                        <span>
                                                            <a href="#">01 kids</a>
                                                            <a href="#">02 kids</a>
                                                            <a href="#">03 kids</a>
                                                            <a href="#">04 kids</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                            <div class="tabs-block">
                                                <h5>Adults</h5>
                                                <div class="drop-wrap">
                                                    <div class="drop">
                                                        <b>01 adult</b>
                                                        <a href="#" class="drop-list"><i
                                                                class="fa fa-angle-down"></i></a>
                                                        <span>
                                                            <a href="#">01 adult</a>
                                                            <a href="#">02 adult</a>
                                                            <a href="#">03 adult</a>
                                                            <a href="#">04 adult</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-4">
                                            <div class="tabs-block">
                                                <h5>Rooms</h5>
                                                <div class="drop-wrap">
                                                    <div class="drop">
                                                        <b>01 room</b>
                                                        <a href="#" class="drop-list"><i
                                                                class="fa fa-angle-down"></i></a>
                                                        <span>
                                                            <a href="#">01 room</a>
                                                            <a href="#">02 room</a>
                                                            <a href="#">03 room</a>
                                                            <a href="#">04 room</a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
                                            <a href="#" class="c-button b-60 bg-aqua hv-transparent"><i
                                                    class="fa fa-search"></i><span>search now</span></a>
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
</div>


<div class="main-wraper bg-grey-2 padd-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="second-title">
                    <h2>Minya's Best destinations</h2>
                    <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla.
                        Suspendisse id tor.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="radius-mask tour-block hover-aqua">
                    <div class="clip">
                        <div class="bg bg-bg-chrome act" style="background-image:url(img/6.jpg)">
                        </div>
                    </div>
                    <div class="tour-layer delay-1"></div>
                    <div class="tour-caption">
                        <div class="vertical-align">
                            <h3 class="hover-it">Tuna Elgabel</h3>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <h4>from <b>$160</b></h4>
                        </div>
                        <div class="vertical-bottom">
                            <div class="fl">
                                <div class="tour-info">
                                    <img src="img/people_icon.png" alt="">
                                    <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong>
                                        adults, <strong class="color-white">1</strong> kids</span>
                                </div>
                                <div class="tour-info">
                                    <img src="img/calendar_icon.png" alt="">
                                    <span class="font-style-2 color-grey-4">July<strong class="color-white">
                                            19th</strong> to July<strong class="color-white"> 26th</strong></span>
                                </div>
                            </div>
                            <a href="#" class="c-button b-50 bg-aqua hv-transparent fr"><img src="img/flag_icon.png"
                                    alt=""><span>view more</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="radius-mask tour-block">
                    <div class="clip">
                        <div class="bg bg-bg-chrome act" style="background-image:url(img/1.jpg)">
                        </div>
                    </div>
                    <div class="tour-layer delay-1"></div>
                    <div class="tour-caption">
                        <div class="vertical-align">
                            <h3 class="hover-it">Tuna Elgabel</h3>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <h4>from <b>$150</b></h4>
                        </div>
                        <div class="vertical-bottom">
                            <div class="fl">
                                <div class="tour-info">
                                    <img src="img/people_icon.png" alt="">
                                    <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong>
                                        adults, <strong class="color-white">1</strong> kids</span>
                                </div>
                                <div class="tour-info">
                                    <img src="img/calendar_icon.png" alt="">
                                    <span class="font-style-2 color-grey-4">July<strong class="color-white">
                                            19th</strong> to July<strong class="color-white"> 26th</strong></span>
                                </div>
                            </div>
                            <a href="#" class="c-button bg-aqua hv-transparent b-50 fr"><img src="img/flag_icon.png"
                                    alt=""><span>view more</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="radius-mask tour-block">
                    <div class="clip">
                        <div class="bg bg-bg-chrome act" style="background-image:url(img/2.jpg)">
                        </div>
                    </div>
                    <div class="tour-layer delay-1"></div>
                    <div class="tour-caption">
                        <div class="vertical-align">
                            <h3 class="hover-it">Tuna Elgabel</h3>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <h4>from <b>$100</b></h4>
                        </div>
                        <div class="vertical-bottom">
                            <div class="fl">
                                <div class="tour-info">
                                    <img src="img/people_icon.png" alt="">
                                    <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong>
                                        adults, <strong class="color-white">1</strong> kids</span>
                                </div>
                                <div class="tour-info">
                                    <img src="img/calendar_icon.png" alt="">
                                    <span class="font-style-2 color-grey-4">July<strong class="color-white">
                                            19th</strong> to July<strong class="color-white"> 26th</strong></span>
                                </div>
                            </div>
                            <a href="#" class="c-button bg-aqua hv-transparent b-50 fr"><img src="img/flag_icon.png"
                                    alt=""><span>view more</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="radius-mask tour-block hover-aqua">
                    <div class="clip">
                        <div class="bg bg-bg-chrome act" style="background-image:url(img/6.jpg)">
                        </div>
                    </div>
                    <div class="tour-layer delay-1"></div>
                    <div class="tour-caption">
                        <div class="vertical-align">
                            <h3 class="hover-it">Tuna Elgabel</h3>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <h4>from <b>$160</b></h4>
                        </div>
                        <div class="vertical-bottom">
                            <div class="fl">
                                <div class="tour-info">
                                    <img src="img/people_icon.png" alt="">
                                    <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong>
                                        adults, <strong class="color-white">1</strong> kids</span>
                                </div>
                                <div class="tour-info">
                                    <img src="img/calendar_icon.png" alt="">
                                    <span class="font-style-2 color-grey-4">July<strong class="color-white">
                                            19th</strong> to July<strong class="color-white"> 26th</strong></span>
                                </div>
                            </div>
                            <a href="#" class="c-button b-50 bg-aqua hv-transparent fr"><img src="img/flag_icon.png"
                                    alt=""><span>view more</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="radius-mask tour-block">
                    <div class="clip">
                        <div class="bg bg-bg-chrome act" style="background-image:url(img/1.jpg)">
                        </div>
                    </div>
                    <div class="tour-layer delay-1"></div>
                    <div class="tour-caption">
                        <div class="vertical-align">
                            <h3 class="hover-it">Tuna Elgabel</h3>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                            </div>
                            <h4>from <b>$150</b></h4>
                        </div>
                        <div class="vertical-bottom">
                            <div class="fl">
                                <div class="tour-info">
                                    <img src="img/people_icon.png" alt="">
                                    <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong>
                                        adults, <strong class="color-white">1</strong> kids</span>
                                </div>
                                <div class="tour-info">
                                    <img src="img/calendar_icon.png" alt="">
                                    <span class="font-style-2 color-grey-4">July<strong class="color-white">
                                            19th</strong> to July<strong class="color-white"> 26th</strong></span>
                                </div>
                            </div>
                            <a href="#" class="c-button bg-aqua hv-transparent b-50 fr"><img src="img/flag_icon.png"
                                    alt=""><span>view more</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="radius-mask tour-block">
                    <div class="clip">
                        <div class="bg bg-bg-chrome act" style="background-image:url(img/2.jpg)">
                        </div>
                    </div>
                    <div class="tour-layer delay-1"></div>
                    <div class="tour-caption">
                        <div class="vertical-align">
                            <h3 class="hover-it">Tuna Elgabel</h3>
                            <div class="rate">
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star color-yellow"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <h4>from <b>$100</b></h4>
                        </div>
                        <div class="vertical-bottom">
                            <div class="fl">
                                <div class="tour-info">
                                    <img src="img/people_icon.png" alt="">
                                    <span class="font-style-2 color-grey-4"><strong class="color-white">2</strong>
                                        adults, <strong class="color-white">1</strong> kids</span>
                                </div>
                                <div class="tour-info">
                                    <img src="img/calendar_icon.png" alt="">
                                    <span class="font-style-2 color-grey-4">July<strong class="color-white">
                                            19th</strong> to July<strong class="color-white"> 26th</strong></span>
                                </div>
                            </div>
                            <a href="#" class="c-button bg-aqua hv-transparent b-50 fr"><img src="img/flag_icon.png"
                                    alt=""><span>view more</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-------popup start-->
<div class="modal">
    <img src="img/imges/b5785a0b8b6bc0426e1c7a761458c731.jpg" width="114" height="70" />
    <span class="title">OTA Traval
        Welcomes you
    </span>

    <div class="button">OK</div>
</div>
<script>
    let modal = document.querySelector(".modal");
    let button = document.querySelector(".button");
    button.addEventListener("click", () => modal.classList.add("toggle"));
</script>
<!--------------popup end------------------------------------------------------------------------>

<!-- Section -->
<div class="main-wraper padd-90">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="second-title">
                    <h2>we are the best</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="icon-block-entry col-xs-12 col-sm-6 col-md-3 clear-sm-2 clear-md-4">
                <div class="icon-block style-5">
                    <img class="icon-img" src="img/inner/m_icon_1.png" alt="">
                    <h5 class="icon-title color-dark-2">happy clients</h5>
                    <div class="icon-text color-dark-2-light">Sed sit amet leo orci. Fusce tincidunt accumsan
                        pretium. Donec fermentum, ex non placerat.</div>
                </div>
            </div>
            <div class="icon-block-entry col-xs-12 col-sm-6 col-md-3 clear-sm-2 clear-md-4">
                <div class="icon-block style-5">
                    <img class="icon-img" src="img/inner/m_icon_2.png" alt="">
                    <h5 class="icon-title color-dark-2">amazing tour</h5>
                    <div class="icon-text color-dark-2-light">Sed sit amet leo orci. Fusce tincidunt accumsan
                        pretium. Donec fermentum, ex non placerat.</div>
                </div>
            </div>
            <div class="icon-block-entry col-xs-12 col-sm-6 col-md-3 clear-sm-2 clear-md-4">
                <div class="icon-block style-5">
                    <img class="icon-img" src="img/inner/m_icon_3.png" alt="">
                    <h5 class="icon-title color-dark-2">support cases</h5>
                    <div class="icon-text color-dark-2-light">Sed sit amet leo orci. Fusce tincidunt accumsan
                        pretium. Donec fermentum, ex non placerat.</div>
                </div>
            </div>
            <div class="icon-block-entry col-xs-12 col-sm-6 col-md-3 clear-sm-2 clear-md-4">
                <div class="icon-block style-5">
                    <img class="icon-img" src="img/inner/m_icon_4.png" alt="">
                    <h5 class="icon-title color-dark-2">in bussines</h5>
                    <div class="icon-text color-dark-2-light">Sed sit amet leo orci. Fusce tincidunt accumsan
                        pretium. Donec fermentum, ex non placerat.</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Section -->
<div class="main-wraper">
    <div class="clip">
        <div class="bg bg-bg-chrome" style="background-image:url(img/11.jpg)">
        </div>
    </div>
    <div class="swiper-container" data-autoplay="0" data-loop="1" data-speed="1000" data-slides-per-view="1"
        id="tour-slide">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-tour padd-90-90">
                                <h3>from $360</h3>
                                <div class="rate">
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                </div>
                                <h2>Tuna Elgabel</h2>
                                <h5>july <b>19th</b> to july <b>26th</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-tour padd-90-90">
                                <h3>from $360</h3>
                                <div class="rate">
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                </div>
                                <h2>Tuna Elgabel</h2>
                                <h5>july <b>19th</b> to july <b>26th</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-tour padd-90-90">
                                <h3>from $360</h3>
                                <div class="rate">
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                </div>
                                <h2>Tuna Elgabel</h2>
                                <h5>july <b>19th</b> to july <b>26th</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="slider-tour padd-90-90">
                                <h3>from $360</h3>
                                <div class="rate">
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                    <span class="fa fa-star color-yellow"></span>
                                </div>
                                <h2>Tuna Elgabel</h2>
                                <h5>july <b>19th</b> to july <b>26th</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pagination poin-style-1"></div>
    </div>
</div>

<div class="main-wraper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="second-title">
                    <h2>Beautiful Nile Trips</h2>
                    <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla</p>
                </div>
            </div>
        </div>
        <div class="row col-no-padd">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="photo-block hover-aqua">
                    <div class="tour-layer delay-1"></div>
                    <img src="img/28.jpg" alt="">
                    <div class="vertical-align">
                        <div class="photo-title">
                            <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
                            <a class="hover-it" href="#">
                                <h3>nile trip</h3>
                            </a>
                            <h5 class="delay-1">Minya, 3 Nights/4 Days</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="photo-block hover-aqua">
                    <div class="tour-layer delay-1"></div>
                    <img src="img/28.jpg" alt="">
                    <div class="vertical-align">
                        <div class="photo-title">
                            <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
                            <a class="hover-it" href="#">
                                <h3>nile trip</h3>
                            </a>
                            <h5 class="delay-1">Minya, 3 Nights/4 Days</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="photo-block hover-aqua">
                    <div class="tour-layer delay-1"></div>
                    <img src="img/28.jpg" alt="">
                    <div class="vertical-align">
                        <div class="photo-title">
                            <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
                            <a class="hover-it" href="#">
                                <h3>nile trip</h3>
                            </a>
                            <h5 class="delay-1">Minya, 3 Nights/4 Days</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="photo-block hover-aqua">
                    <div class="tour-layer delay-1"></div>
                    <img src="img/26.jpg" alt="">
                    <div class="vertical-align">
                        <div class="photo-title">
                            <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
                            <a class="hover-it" href="#">
                                <h3>nile trip</h3>
                            </a>
                            <h5 class="delay-1">Minya, 3 Nights/4 Days</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="photo-block hover-aqua">
                    <div class="tour-layer delay-1"></div>
                    <img src="img/26.jpg" alt="">
                    <div class="vertical-align">
                        <div class="photo-title">
                            <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
                            <a class="hover-it" href="#">
                                <h3>nile trip</h3>
                            </a>
                            <h5 class="delay-1">Minya, 3 Nights/4 Days</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="photo-block hover-aqua">
                    <div class="tour-layer delay-1"></div>
                    <img src="img/26.jpg" alt="">
                    <div class="vertical-align">
                        <div class="photo-title">
                            <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
                            <a class="hover-it" href="#">
                                <h3>nile trip</h3>
                            </a>
                            <h5 class="delay-1">Minya, 3 Nights/4 Days</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="photo-block hover-aqua">
                    <div class="tour-layer delay-1"></div>
                    <img src="img/33.jpg" alt="">
                    <div class="vertical-align">
                        <div class="photo-title">
                            <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
                            <a class="hover-it" href="#">
                                <h3>nile trip</h3>
                            </a>
                            <h5 class="delay-1">Minya, 3 Nights/4 Days</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="photo-block hover-aqua">
                    <div class="tour-layer delay-1"></div>
                    <img src="img/33.jpg" alt="">
                    <div class="vertical-align">
                        <div class="photo-title">
                            <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
                            <a class="hover-it" href="#">
                                <h3>nile trip</h3>
                            </a>
                            <h5 class="delay-1">Minya, 3 Nights/4 Days</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="photo-block hover-aqua">
                    <div class="tour-layer delay-1"></div>
                    <img src="img/33.jpg" alt="">
                    <div class="vertical-align">
                        <div class="photo-title">
                            <h4 class="delay-1"><b>Only <span class="color-aqua">$235</span></b></h4>
                            <a class="hover-it" href="#">
                                <h3>nile trip</h3>
                            </a>
                            <h5 class="delay-1">Minya, 3 Nights/4 Days</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-wraper bg-grey-2 padd-90">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="second-title">
                    <h2>Special Offers</h2>
                    <p class="color-grey">Curabitur nunc erat, consequat in erat ut, congue bibendum nulla.</p>
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
                                    <div class="bg bg-bg-chrome act"
                                        style="background-image:url(img/266598299.jpg)">
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
                                    <h3>Minya</h3>
                                </div>
                                <div class="vertical-bottom">
                                    <ul class="offers-info">
                                        <li><b>35</b>tours</li>
                                        <li><b>90</b>hotels</li>
                                    </ul>
                                    <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa
                                        idporta nequetiam.</p>
                                    <a href="#" class="c-button bg-aqua hv-aqua-o b-40"><span>view more</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-val="1">
                            <div class="offers-block radius-mask">
                                <div class="clip">
                                    <div class="bg bg-bg-chrome act" style="background-image:url(img/31.jpg)">
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
                                    <h3>Abu Qurqas</h3>
                                </div>
                                <div class="vertical-bottom">
                                    <ul class="offers-info">
                                        <li><b>58</b>tours</li>
                                        <li><b>70</b>hotels</li>
                                    </ul>
                                    <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa
                                        idporta nequetiam.</p>
                                    <a href="#" class="c-button bg-aqua hv-aqua-o b-40"><span>view more</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-val="2">
                            <div class="offers-block radius-mask">
                                <div class="clip">
                                    <div class="bg bg-bg-chrome act" style="background-image:url(img/25.jpg)">
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
                                    <h3>Mallawi</h3>
                                </div>
                                <div class="vertical-bottom">
                                    <ul class="offers-info">
                                        <li><b>88</b>tours</li>
                                        <li><b>193</b>hotels</li>
                                    </ul>
                                    <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa
                                        idporta nequetiam.</p>
                                    <a href="#" class="c-button bg-aqua hv-aqua-o b-40"><span>view more</span></a>
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
@endsection
