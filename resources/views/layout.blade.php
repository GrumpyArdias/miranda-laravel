<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="icon" href="Assets">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;600;700&family=Old+Standard+TT:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Hotel Miranda</title>
</head>

<body>
    <header>
        <div id="nav-scroll" class="container-menu">
            <div class="container-menu__toggle">
                <div class="container-menu__burger"><img src="Assets/1.png"></div>
                <div class="container-menu__burger-close"><img src="Assets/icon/cerrar.png"></div>
            </div>
            <a href="./index">
                <div class="container-menu__box-h">
                    <p>H</p>
                </div>
            </a>
            <div class="container-menu__main-title"><span class="container__title">HOTEL</span>
                <p>MIRANDA</p>
            </div>
            <div class="nav__list ">
                <a class="a-menu" href="about">About Us</a>
                <a class="a-menu" href="rooms">Rooms</a>
                <a class="a-menu" href="offers">Offers</a>
                <a class="a-menu" href="contact">Contact</a>
                <a class="a-menu" href="order">Order</a>
            </div>
            <div class="container-menu__headers-icon">
                <div><a href="dashboard"><img src="Assets/Vector.png"></a></div>
                @if(Auth::check())


                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        <span class="material-symbols-outlined">
                            logout
                        </span>
                    </x-dropdown-link>
                </form>
                @else
                <a href="/login">
                    <span class="material-symbols-outlined">
                        login
                    </span>
                </a>


                @endif
            </div>
        </div>
    </header>
    @section ("main")
    @show

    <section class="footer">
        <div class="footer__main">
            <div class="footer__main-column1">
                <div class="footer__container">
                    <div class="footer__logo">H</div>
                    <div class="footer__main-title"><span class="footer__title">HOTEL</span>
                        <p>MIRANDA</p>
                    </div>
                </div>
                <p class="footer__paragraph">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.</p>
                <div class="social">
                    <img src="Assets/facebook-icon.png" alt="">
                    <img class="social__twitter" src="Assets/twitter.png" alt="">
                    <img src="Assets/behance logo_icon 1.png" alt="">
                    <img src="Assets/linkedin_icon.png" alt="">
                    <img src="Assets/youtube logo_icon.png" alt="">
                </div>
            </div>
            <div class="service-contact">
                <div>
                    <h5>Services.</h5>
                    <div class="services-list">
                        <div class="services-list__1">
                            <p class="services-list__p">+ Restaurant Bar</p>
                            <p class="services-list__p">+ Swimming Pool</p>
                            <p class="services-list__p">+ Wellness & Spa</p>
                            <p class="services-list__p">+ Tennis Courts</p>
                            <p class="services-list__p">+ Conference Room</p>
                            <p class="services-list__p">+ Cocktail Party House</p>
                        </div>
                        <div class="services-list__2">
                            <p class="services-list__p">+ Gaming Zone</p>
                            <p class="services-list__p">+ Marrige Party</p>
                            <p class="services-list__p">+ Party Plannung</p>
                            <p class="services-list__p">+ Tour Consultancy</p>
                        </div>
                    </div>
                </div>
                <div class="contact-us">
                    <h5>Contact Us.</h5>
                    <div class="contact-icons">
                        <img src="Assets/phone-icon.png" alt="phone">
                        <div class="contact-icons__numbers">
                            <h4>Phone Number</h4>
                            <p>+98787676576577</p>
                        </div>
                    </div>
                    <div class="contact-icons">
                        <img src="Assets/mail-icon.png" alt="mail">
                        <div class="contact-icons__numbers">
                            <h4>Phone Number</h4>
                            <p>+98787676576577</p>
                        </div>
                    </div>
                    <div class="contact-icons" class="contact-us__icons">
                        <img src="Assets/location-icon.png" alt="location">
                        <div class="contact-icons__numbers">
                            <h4>Phone Number</h4>
                            <p>+98787676576577</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="copyright__paragraph">
                <p>Copyright By@Example-2020</p>
                <p>Terms of use | Privacy Environmental Policy</p>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="/JavaScript/index.js"></script>
</body>

</html>