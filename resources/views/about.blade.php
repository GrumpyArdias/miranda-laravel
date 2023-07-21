@extends ("layout")
@section("main")
<!-- about-Us -->
<div class="about-us__home">
    <p>THE ULTIMATE LUXURY</p>
    <h1>About Us</h1>
    <div class="about-us__home-about">
        <h6>Home | <span>About</span></h6>
    </div>
</div>
<section class="about-us__body">
    <div class="about-us__body-video">
        <video id="video" src="Assets/hotel.mp4" autoplay muted controls loop></video>
    </div>
    <h3>
        Hello. Our hotel has been present for over 20 years. We make the best
        for all our customers.
    </h3>
    <div class="about-us__icons">
        <div class="about-us__icons-group">
            <div class="about-us__icons-group__unique">
                <img src="Assets/icon-breakfast.png" alt="breakfast-icon" />
                <p>BREAKFAST</p>
            </div>
            <div class="about-us__icons-group__unique">
                <img class="about-us__icons-plane" src="Assets/icon12.png" alt="plane-icon" />
                <p>AIRPORT PICKUP</p>
            </div>
            <div class="about-us__icons-group__unique-bbq">
                <img src="Assets/icon-barbacue.png" alt="breakfast-icon" />
                <p>BBQ PARTY</p>
            </div>
        </div>
        <div class="about-us__icons-group">
            <div class="about-us__icons-group__unique">
                <img src="Assets/icon-location.png" alt="city-icon" />
                <p>CITY GUIDE</p>
            </div>
            <div class="about-us__icons-group__unique">
                <img src="Assets/icon-room.png" alt="room-icon" />
                <p>LUXURY ROOM</p>
            </div>
        </div>
    </div>

    <div class="about-us__restaurant">
        <div class="about-us__restaurant-gourmet">
            <img src="Assets/gourmet.jpg" alt="gourmet-dish" />
        </div>
        <div class="about-us__restaurant_content">
            <h6>RESTAURANT</h6>
            <h2>Get Restaurant Facilities & Many Other More</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat.
            </p>
            <button><a href="#video">TAKE A TOUR</a></button>
        </div>
    </div>
</section>
<section class="facilities about-us__facilities">
    <h6>FACILITIES</h6>
    <h2>Core Features</h2>
    <div class="swiper swiper_facilities">
        <div class="swiper-wrapper">
            <!---->
            <div class="swiper-slide about-us__facilities_background">
                <div class="facilities__number">
                    <img src="Assets/faciliti-icons/icon1.png" alt="high rating" />
                    <h4>01</h4>
                </div>
                <div class="facilities__title">
                    <h5>Have High Rating</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna..
                    </p>
                </div>
            </div>
            <div class="swiper-slide about-us__facilities_background">
                <div class="facilities__number">
                    <img src="Assets/faciliti-icons/icon2.png" alt="quiet hours" />
                    <h4>02</h4>
                </div>
                <div class="facilities__title">
                    <h5>Quiet Hours</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna..
                    </p>
                </div>
            </div>
            <div class="swiper-slide about-us__facilities_background">
                <div class="facilities__number">
                    <img src="Assets/faciliti-icons/geolocation.png" alt="best location" />
                    <h4>03</h4>
                </div>
                <div class="facilities__title">
                    <h5>Best Locations</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna..
                    </p>
                </div>
            </div>
            <div class="swiper-slide about-us__facilities_background">
                <div class="facilities__number">
                    <img src="Assets/faciliti-icons/icon3.png"" alt=" free cancelation" />
                    <h4>04</h4>
                </div>
                <div class="facilities__title">
                    <h5>Free Cancellation</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna..
                    </p>
                </div>
            </div>
            <div class="swiper-slide about-us__facilities_background">
                <div class="facilities__number">
                    <img src="Assets/faciliti-icons/card-icon.png" alt="payments options" />
                    <h4>05</h4>
                </div>
                <div class="facilities__title">
                    <h5>Payment Options</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna..
                    </p>
                </div>
            </div>
            <div class="swiper-slide about-us__facilities_background">
                <div class="facilities__number">
                    <img src="Assets/faciliti-icons/special-icon.png" alt="special offers" />
                    <h4>06</h4>
                </div>
                <div class="facilities__title">
                    <h5>Special Offers</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna..
                    </p>
                </div>
            </div>
        </div>
        <div class="swiper-pagination" style="position: static; margin-top: 15px"></div>
    </div>
    <div class="facilities__desktop">
        <div class="facilities__individual-container">
            <div class="facilities__number">
                <img src="Assets/icon1.png" alt="high rating" />
                <h4>01</h4>
            </div>
            <div class="facilities__title">
                <h5>Have High Rating</h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..
                </p>
            </div>
        </div>
        <div class="facilities__individual-container">
            <div class="facilities__number">
                <img src="Assets/faciliti-icons/icon2.png" alt="quiet hours" />
                <h4>02</h4>
            </div>
            <div class="facilities__title">
                <h5>Quiet Hours</h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..
                </p>
            </div>
        </div>
        <div class="facilities__individual-container">
            <div class="facilities__number">
                <img src="Assets/faciliti-icons/geolocation.png" alt="best location" />
                <h4>03</h4>
            </div>
            <div class="facilities__title">
                <h5>Best Locations</h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..
                </p>
            </div>
        </div>
    </div>
    <div class="facilities__desktop">
        <div class="facilities__individual-container">
            <div class="facilities__number">
                <img src="Assets/faciliti-icons/icon3.png" alt="free cancelation" />
                <h4>04</h4>
            </div>
            <div class="facilities__title">
                <h5>Free Cancellation</h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..
                </p>
            </div>
        </div>
        <div class="facilities__individual-container">
            <div class="facilities__number">
                <img src="Assets/faciliti-icons/card-icon.png" alt="payments options" />
                <h4>05</h4>
            </div>
            <div class="facilities__title">
                <h5>Payment Options</h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..
                </p>
            </div>
        </div>
        <div class="facilities__individual-container">
            <div class="facilities__number">
                <img src="Assets/faciliti-icons/special-icon.png" alt="special offers" />
                <h4>06</h4>
            </div>
            <div class="facilities__title">
                <h5>Special Offers</h5>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..
                </p>
            </div>
        </div>
    </div>
</section>

<section class="about-us__counter">
    <h6>COUNTER</h6>
    <h2>Some Fun Facts</h2>
    <div class="about-us__counter__container">
        <div class="about-us__counter__list">
            <img src="Assets/icon-boy.png" alt="" />
            <div class="about-us__counter__list-title">
                <p>8000</p>
                <h6>Happy Users</h6>
            </div>
            <img src="Assets/arrow-icon.png" alt="" />
        </div>
        <div class="about-us__counter__list">
            <img src="Assets/icon-like.png" alt="" />
            <div class="about-us__counter__list-title">
                <p>10M</p>
                <h6>Reviews & Appriciate</h6>
            </div>
            <img src="Assets/arrow-icon.png" alt="" />
        </div>
        <div class="about-us__counter__list">
            <img src="Assets/icon-world.png" alt="" />
            <div class="about-us__counter__list-title">
                <p>100</p>
                <h6>Country Coverage</h6>
            </div>
            <img src="Assets/arrow-icon.png" alt="" />
        </div>
    </div>

    <img src="" alt="" />
</section>
@endsection