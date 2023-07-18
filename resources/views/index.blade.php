@extends ("layout")
@section("main")
<section class="main">
    <h4 class="main__pre-title">THE ULTIMATE LUXURY EXPERIENCE</h4>
    <h1 class="main__title">The Perfect Base For You</h1>
    <button class="main__button1"><a href="#videoTour">TAKE A TOUR</a>
    </button>
    <button class="main__button2"><a href="/about">LEARN MORE</a></button>
    <form class="main__form__container" action="/rooms" method="get">
        <div class="main__form__container__body">
            <label>Arrival Date</label>
            <input type="date" id="date" placeholder="24th march 2020" name="checkIn"></input>
        </div>
        <div class="main__form__container__body">
            <label>Departure Date</label>
            <input type="date" placeholder="30th march 2020" name="checkOut"></input>
        </div>
        <button>CHECK AVAILABILITY</button>
    </form>
</section>
<section class="about-us">
    <div class="about-us__discover">
        <h6>ABOUT US</h6>
        <h2>Discover Our Underground.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.
        </p>
        <button><a href="/rooms">BOOK NOW</a></button>
    </div>
    <div>
        <div class="strong-team">
            <img class="about-pic" src="Assets/alarma-hotel.jpg" alt="hotel-bell">
            <div class="strong-team__title-box">
                <img class="persons-shadow" src="Assets/personsShadow.png">
                <img class="persons-img" src="Assets/persons.png">
                <h4>Strong Team</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            </div>
        </div>
        <div class="luxury_container">
            <img class="luxury_container__pic" src="Assets/suite-dormitorio-moderno-clasico-lujo-hotel.jpg" alt="suite">
            <div class="luxury_container__body">
                <img class="img-calendar" src="Assets/bookingvector.png">
                <h4>Luxury Room</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            </div>
        </div>
    </div>

</section>
<section class="rooms">
    <h6>ROOMS</h6>
    <h2>Hand Picked Rooms</h2>
    <div class="services-icons">
        <img src="Assets/bed_icon.png" alt="bed">
        <img src="Assets/wifi_icon.png" alt="wifi">
        <img src="Assets/automobile_car_icon.png" alt="car">
        <img src="Assets/cold_icon.png" alt="cold">
        <img src="Assets/gym_icon.png" alt="gym">
        <img src="Assets/smoking_no_icon.png" alt="no_smokin">
        <img src="Assets/cocktail_drink.png" alt="cocktail">
    </div>
    <div class="room__slider">
        <div class="swiper swiper_room">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper swiper_room-wrapper">
                <!-- Slides -->
                <div class="swiper-slide swiper_room-slide"><img src="Assets/img-room/room1.jpg" alt="room-suite-special"></div>
                <div class="swiper-slide swiper_room-slide"><img src="Assets/img-room/room2.jpg" alt="room-suite-special"></div>
                <div class="swiper-slide swiper_room-slide"><img src="Assets/img-room/room3.jpg" alt="room-suite-special"></div>
                <div class="swiper-slide swiper_room-slide"><img src="Assets/img-room/room4.jpg" alt="room-suite-special"></div>
                ...
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <div class="minimal-card">
        <h4>Minimal Duplex Room</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        <h5>$345<sub>/Night</sub></h5>
    </div>
</section>
<section class="intro-video">
    <div class="intro-video__container">
        <div id="videoTour" class="intro-video__title">
            <h6>INTRO VIDEO</h6>
            <h2>Meet With Our Luxury Place</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.</p>
        </div>
        <div class="intro-video__video">
            <video src="Assets/hotel.mp4" controls></video>
        </div>
    </div>
    <button class="intro-video__button"><a href="/rooms">BOOK NOW</a></button>
</section>

<section class="facilities">
    <h6>FACILITIES</h6>
    <h2>Core Features</h2>
    <div class="swiper swiper_facilities">
        <div class="swiper-wrapper">
            <!---->
            <div class="swiper-slide">
                <div class="facilities__number">
                    <img src="Assets/icon1.png" alt="high rating">
                    <h4>01</h4>
                </div>
                <div class="facilities__title">
                    <h5>Have High Rating</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="facilities__number">
                    <img src="Assets/faciliti-icons/icon2.png" alt="quiet hours">
                    <h4>02</h4>
                </div>
                <div class="facilities__title">
                    <h5>Quiet Hours</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="facilities__number">
                    <img src="Assets/faciliti-icons/geolocation.png" alt="best location">
                    <h4>03</h4>
                </div>
                <div class="facilities__title">
                    <h5>Best Locations</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="facilities__number">
                    <img src="Assets/faciliti-icons/icon3.png" alt="free cancelation">
                    <h4>04</h4>
                </div>
                <div class="facilities__title">
                    <h5>Free Cancellation</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="facilities__number">
                    <img src="Assets/faciliti-icons/card-icon.png" alt="payments options">
                    <h4>05</h4>
                </div>
                <div class="facilities__title">
                    <h5>Payment Options</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="facilities__number">
                    <img src="Assets/faciliti-icons/special-icon.png" alt="special offers">
                    <h4>06</h4>
                </div>
                <div class="facilities__title">
                    <h5>Special Offers</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
            </div>
        </div>
        <div class="swiper-pagination" style="position:static;margin-top:15px"> </div>
    </div>
    <div class="facilities__desktop">
        <div class="facilities__individual-container">
            <div class="facilities__number">
                <img src="Assets/icon1.png" alt="high rating">
                <h4>01</h4>
            </div>
            <div class="facilities__title">
                <h5>Have High Rating</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>
        <div class="facilities__individual-container">
            <div class="facilities__number">
                <img src="Assets/faciliti-icons/icon2.png" alt="quiet hours">
                <h4>02</h4>
            </div>
            <div class="facilities__title">
                <h5>Quiet Hours</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>
        <div class="facilities__individual-container">
            <div class="facilities__number">
                <img src="Assets/faciliti-icons/geolocation.png" alt="best location">
                <h4>03</h4>
            </div>
            <div class="facilities__title">
                <h5>Best Locations</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>
    </div>
    <div class="facilities__desktop">
        <div class="facilities__individual-container">
            <div class="facilities__number">
                <img src="Assets/faciliti-icons/icon3.png" alt="free cancelation">
                <h4>04</h4>
            </div>
            <div class="facilities__title">
                <h5>Free Cancellation</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>
        <div class="facilities__individual-container">
            <div class="facilities__number">
                <img src="Assets/faciliti-icons/card-icon.png" alt="payments options">
                <h4>05</h4>
            </div>
            <div class="facilities__title">
                <h5>Payment Options</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>
        <div class="facilities__individual-container">
            <div class="facilities__number">
                <img src="Assets/faciliti-icons/special-icon.png" alt="special offers">
                <h4>06</h4>
            </div>
            <div class="facilities__title">
                <h5>Special Offers</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
        </div>
    </div>

</section>
<!---->
<section class="menu">
    <div class="menu__logo">
        <img class="small-donuts" src="Assets/menu-icon.png" alt="donuts">
        <img class="big-donuts" src="Assets/big-donut.png" alt="big-donuts">
    </div>
    <h6>MENU</h6>
    <h2>Our Foods Menu</h2>

    <div class="swiper swiper_food">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="menu__list">
                    <div class="menu__list__items">
                        <img src="Assets/eggs-bacon.jpg" alt="">
                        <div class="menu__list__items__title">
                            <h5>Eggs & Bacon</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>

                    <div class="menu__list__items">
                        <img src="Assets/coffee-cup.jpg" alt="">
                        <div class="menu__list__items__title">
                            <h5>Tea or Coffee</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>

                    <div class="menu__list__items">
                        <img src="Assets/chia.jpg" alt="">
                        <div class="menu__list__items__title">
                            <h5>Chia Oatmeal</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="menu__list">
                    <div class="menu__list__items">
                        <img src="Assets/parfait.jpg" alt="">
                        <div class="menu__list__items__title">
                            <h5>Fruit Parfait</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>

                    <div class="menu__list__items">
                        <img src="Assets/mermelade.jpg" alt="">
                        <div class="menu__list__items__title">
                            <h5>Mermelade Selection</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>

                    <div class="menu__list__items">
                        <img src="Assets/cheesse-plate (1).jpg" alt="">
                        <div class="menu__list__items__title">
                            <h5>Cheese Plate</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--wrapper-->
        <div class="button-slider">
            <img class="swiper_food-button-next" src="Assets/right-arrow.png" alt="">
            <img class="swiper_food-button-prev" src="Assets/Left arrow.png" alt="">
        </div>
    </div>
    <div class="gourmet">
        <div class="swiper swiper_gourmet">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="Assets/gourmet.jpg" alt="gourmet-dish"></div>
                <div class="swiper-slide"><img src="Assets/gourmet1.jpg" alt="gourmet-dish"></div>
                <div class="swiper-slide"><img src="Assets/gourmet2.jpg" alt="gourmet-dish"></div>
                <div class="swiper-slide"><img src="Assets/gourmet3.jpg" alt="gourmet-dish"></div>
                <div class="swiper-slide"><img src="Assets/gourmet4.jpg" alt="gourmet-dish"></div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination" style="position: relative;margin-top: 15px; "></div>
        </div>
    </div>
</section>

<section class="black">
    <div class="black__list">
        <img src="Assets/rocket-icon.png" alt="">
        <p>84K<sub>+</sub></p>
        <h6>Projects are Completed</h6>
    </div>
    <div class="black__list">
        <img src="Assets/people-icon 6.png" alt="">
        <p>10M<sub>+</sub></p>
        <h6>Active Backers Around World</h6>
    </div>
    <div class="black__list">
        <img src="Assets/money-icon.png" alt="">
        <p>02K<sub>+</sub></p>
        <h6>Categories Served</h6>
    </div>
    <div class="black__list ">
        <img src="Assets/book-icon.png" alt="">
        <p>100M<sub>+</sub></p>
        <h6 class="black__list__last">Idea Raised Founds</h6>
    </div>
</section>

@endsection