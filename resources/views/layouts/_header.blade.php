<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- Body content -->

<div class="header-connect">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-8  col-xs-12">
                @guest
                @else
                <div class="header-half header-call">
                    <p>
                        <span><i class="pe-7s-call"></i> {{ Auth::user()->name }}</span>
                        <span><i class="pe-7s-mail"></i> {{ Auth::user()->email }}</span>
                    </p>
                </div>
                @endguest
            </div>
            <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                <div class="header-half header-social">
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-vine"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End top header -->

<nav class="navbar navbar-default ">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="/home/assets/img/logo.png" alt=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse yamm" id="navigation">
            <!-- 登录注册链接开始 -->
            @guest
                {{--<li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>--}}
                {{--<li class="nav-item"><a class="nav-link" href="{{ route('register') }}">注册</a></li>--}}

                <div class="button navbar-right">
                    <a href="{{ route('login') }}">
                        <button class="navbar-btn nav-button wow bounceInRight login"
                                data-wow-delay="0.45s">登录
                        </button>
                    </a>
                    <a href="{{ route('register') }}">
                    <button class="navbar-btn nav-button wow fadeInRight"
                            onclick=" window.open({{ route('register') }})" data-wow-delay="0.48s">注册
                    </button>
                    </a>
                </div>
            @else
                <div class="button navbar-right">
                    <a href="{{ route('cart.index') }}">
                    <button class="navbar-btn nav-button wow bounceInRight login"
                            data-wow-delay="0.45s">购物车</button>
                    </a>
                    <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <button class="navbar-btn nav-button wow fadeInRight" data-wow-delay="0.48s">退出登录
                        </button>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </a>
                </div>

                {{--<li class="nav-item">--}}
                {{--<a class="nav-link mt-1" href="{{ route('cart.index') }}"><i class="fa fa-shopping-cart"></i></a>--}}
                {{--</li>--}}
                {{--<li class="nav-item dropdown">--}}
                {{--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                {{--<img src="https://iocaffcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/60/h/60" class="img-responsive img-circle" width="30px" height="30px">--}}
                {{--{{ Auth::user()->name }}--}}
                {{--</a>--}}
                {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                {{--<a href="{{ route('user_addresses.index') }}" class="dropdown-item">收货地址</a>--}}
                {{--<a href="{{ route('orders.index') }}" class="dropdown-item">我的订单</a>--}}
                {{--<a href="{{ route('products.favorites') }}" class="dropdown-item">我的收藏</a>--}}
                {{--<a class="dropdown-item" id="logout" href="#"--}}
                {{--onclick="event.preventDefault();document.getElementById('logout-form').submit();">退出登录</a>--}}
                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                {{--{{ csrf_field() }}--}}
                {{--</form>--}}
                {{--</div>--}}
                {{--</li>--}}
            @endguest
            <ul class="main-nav nav navbar-nav navbar-right">
                <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                    <a href="/" class="dropdown-toggle active" data-toggle="dropdown" data-hover="dropdown"
                       data-delay="200">Home <b class="caret"></b></a>
                    <ul class="dropdown-menu navbar-nav">
                        <li>
                            <a href="index-2.html">Home Style 2</a>
                        </li>
                        <li>
                            <a href="index-3.html">Home Style 3</a>
                        </li>
                        <li>
                            <a href="index-4.html">Home Style 4</a>
                        </li>
                        <li>
                            <a href="index-5.html">Home Style 5</a>
                        </li>

                    </ul>
                </li>

                <li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" href="properties.html">Properties</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.3s"><a class="" href="property.html">Property</a></li>
                <li class="dropdown yamm-fw" data-wow-delay="0.4s">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Template
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h5>Home pages</h5>
                                        <ul>
                                            <li>
                                                <a href="/">Home Style 1</a>
                                            </li>
                                            <li>
                                                <a href="index-2.html">Home Style 2</a>
                                            </li>
                                            <li>
                                                <a href="index-3.html">Home Style 3</a>
                                            </li>
                                            <li>
                                                <a href="index-4.html">Home Style 4</a>
                                            </li>
                                            <li>
                                                <a href="index-5.html">Home Style 5</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Pages and blog</h5>
                                        <ul>
                                            <li><a href="blog.html">Blog listing</a></li>
                                            <li><a href="single.html">Blog Post (full)</a></li>
                                            <li><a href="single-right.html">Blog Post (Right)</a></li>
                                            <li><a href="single-left.html">Blog Post (left)</a></li>
                                            <li><a href="contact.html">Contact style (1)</a></li>
                                            <li><a href="contact-3.html">Contact style (2)</a></li>
                                            <li><a href="contact_3.html">Contact style (3)</a></li>
                                            <li><a href="faq.html">FAQ page</a></li>
                                            <li><a href="404.html">404 page</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Property</h5>
                                        <ul>
                                            <li><a href="property-1.html">Property pages style (1)</a></li>
                                            <li><a href="property-2.html">Property pages style (2)</a></li>
                                            <li><a href="property-3.html">Property pages style (3)</a></li>
                                        </ul>

                                        <h5>Properties list</h5>
                                        <ul>
                                            <li><a href="properties.html">Properties list style (1)</a></li>
                                            <li><a href="properties-2.html">Properties list style (2)</a></li>
                                            <li><a href="properties-3.html">Properties list style (3)</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <h5>Property process</h5>
                                        <ul>
                                            <li><a href="submit-property.html">Submit - step 1</a></li>
                                            <li><a href="submit-property.html">Submit - step 2</a></li>
                                            <li><a href="submit-property.html">Submit - step 3</a></li>
                                        </ul>
                                        <h5>User account</h5>
                                        <ul>
                                            <li><a href="register.html">Register / login</a></li>
                                            <li><a href="user-properties.html">Your properties</a></li>
                                            <li><a href="submit-property.html">Submit property</a></li>
                                            <li><a href="change-password.html">Change password</a></li>
                                            <li><a href="user-profile.html">Your profile</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /.yamm-content -->
                        </li>
                    </ul>
                </li>

                <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="contact.html">Contact</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!-- End of nav bar -->
