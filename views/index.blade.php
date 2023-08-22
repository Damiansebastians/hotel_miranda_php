@extends("layout")
@section("title","Home")
@section("content")

<main>
        <!-- BANNER -->
        <section class="banner">
            <div class="banner__text">
                <h2 class="banner__title">THE ULTIMATE LUXURY EXPERIENCE</h2>
                <p class="banner__description">The Perfect
                    Base For You</p>
            </div>
            <div class="banner__buttons">
                <button class="banner__button banner__button--primary">TAKE A TOUR</button>
                <button class="banner__button banner__button--secondary">LEARN MORE</button>
            </div>
        </section>

        <!-- AVAILABILITY -->
        <section class="availability">
            <div class="availability__items">
                <label class="availability__label" for="arrival-date">Arrival Date</label>
                <input class="availability__input" type="date">
            </div>

            <div class="availability__items">
                <label class="availability__label" for="departure-date">LeDeparture Date</label>
                <input class="availability__input" type="date">
            </div>

            <button class="availability__button">CHECK AVAILABILITY</button>
        </section>

        <!-- ABOUT US -->
        <article class="about">
            <p class="about__text">ABOUT US</p>
            <h2 class="about__title">Discover Our Underground.</h2>
            <p class="about__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <button class="about__button">BOOK NOW</button>
            <div class="about__image">
                <img class="about__image__team" src="./img/sliders/strong1.jpg" alt="strong team">
            </div>
            <div class="about__section">
                <img class="about__section__vector" src="./img/gobbler_strong_mobile.png" alt="Globber">
                <h3 class="about__section__title">Strong Team</h3>
                <p class="about__section__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor.</p>
            </div>
            <div class="about__image2">
                <img class="about__image__team" src="./img/sliders/strong2.jpg" alt="strong team">
            </div>
            <div class="about__section2">
                <img class="about__section2__vector" src="./img/gobbler_luxery_mobile.png" alt="Globber">
                <h3 class="about__section2__title">Strong Team</h3>
                <p class="about__section2__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor.</p>
            </div>
        </article>

        <!-- ROOMS -->
        <section class="rooms">
            <p class="rooms__title">ROOMS</p>
            <h2 class="rooms__description">Hand Picked Rooms</h2>
            <div class="rooms__icons">
                <img class="rooms__icons__image" src="./img/icons__mobile.svg" alt="">
            </div>
            <div class="rooms__slider">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="./img/sliders/room2.jpg" alt="Rooms"></div>
                        <div class="swiper-slide"><img src="./img/sliders/room3.jpg" alt="Rooms"></div>
                        <div class="swiper-slide"><img src="./img/sliders/room4.jpg" alt="Rooms"></div>
                        <div class="swiper-slide"><img src="./img/sliders/room1.jpg" alt="Rooms"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

            </div>
            <div class="rooms__info">
                <h3 class="rooms__info__title">Minimal Duplex Room</h3>
                <p class="rooms__info__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore.</p>
                <div class="rooms__info__cost">
                    <p>$345</p>
                    <p>/Night</p>
                </div>
            </div>
        </section>

        <!-- INTRO VIDEO -->
        <section class="intro">
            <h4 class="intro__title">INTRO VIDEO</h4>
            <h2 class="intro__description">Meet With Our Luxury Place.</h2>
            <p class="intro__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat you have to understand this.</p>
            <video src="./video/HotelMiranda.mp4" autoplay muted class="intro__video">Your browser does not support
                video playback</video>
            <button class="intro__button">BOOK NOW</button>
        </section>

        <!-- FACILITIES -->
        <section class="facilities">
            <h4 class="facilities__title">FACILITIES</h4>
            <h2 class="facilities__description">Core Features</h2>
            <div class="facilities__box">
                <div class="facilities__box__number">
                    <p>01</p>
                </div>
                <div class="facilities__box__image">
                    <img src="./img/facilities_icon_mobile.svg" alt="icon stars">
                </div>
                <h3 class="facilities__box__subtitle">Have High Rating</h3>
                <p class="facilities__box__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna..</p>
                <div class="facilities__box__pages">
                    <img src="./img/facilities_pages_mabile.svg" alt="Pagination">
                </div>
            </div>
        </section>

        <!-- MENU -->
        <section class="menu">
            <div class="menu__image">
                <img src="./img/menu_mobile.svg" class="image__donnut" alt="Donnut">
                <img src="./img/icon_donnut.svg" class="image__donnut2" alt="Donnut">
            </div>
            <h4 class="menu__title">MENU</h4>
            <h2 class="menu__description">Our Foods Menu</h2>
            <div class="menu__item">
                <div class="item__container">
                    <div class="menu__item__image">
                        <img src="./img/menu1.jpg" alt="Menu">
                    </div>
                    <div class="menu__item__details">
                        <p class="menu__item__subtitle">Eggs & Bacon</p>
                        <p class="menu__item__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                            eiusmod tempor.</p>
                    </div>
                </div>
                <div class="item__container">
                    <div class="menu__item__image">
                        <img src="./img/menu2.jpg" alt="Menu">
                    </div>
                    <div class="menu__item__details">
                        <p class="menu__item__subtitle">Tea or Coffee</p>
                        <p class="menu__item__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                            eiusmod tempor.</p>
                    </div>
                </div>
                <div class="item__container">
                    <div class="menu__item__image">
                        <img src="./img/menu3.jpg" alt="Menu">
                    </div>
                    <div class="menu__item__details">
                        <p class="menu__item__subtitle">Chia Oatmeal</p>
                        <p class="menu__item__text">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do
                            eiusmod tempor.</p>
                    </div>
                </div>
            </div>
            <div class="menu__buttons">
                <button><</button>
                <button>></button>
            </div>
            <div class="menu__slider">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="./img/sliders/room2.jpg" alt="Rooms"></div>
                        <div class="swiper-slide"><img src="./img/sliders/room4.jpg" alt="Rooms"></div>
                        <div class="swiper-slide"><img src="./img/sliders/room3.jpg" alt="Rooms"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="menu__achievements">
                <div class="menu__achievements__box">
                    <img class="menu__achievements__box--image" src="./img/icon1_box_mobile.svg" alt="achievements">
                    <div class="menu__achievements__box--text">
                        <p>84k</p>
                        <p>+</p>
                        <p>Projects are Completed</p>
                    </div>
                </div>

                <div class="menu__achievements__box">
                    <img class="menu__achievements__box--image" src="./img/icon2_box_mobile.svg" alt="achievements">
                    <div class="menu__achievements__box--text">
                        <p>10M</p>
                        <p>+</p>
                        <p>Active Backers Around World</p>
                    </div>
                </div>

                <div class="menu__achievements__box">
                    <img class="menu__achievements__box--image" src="./img/icon3_box_mobile.svg" alt="achievements">
                    <div class="menu__achievements__box--text">
                        <p>02k</p>
                        <p>+</p>
                        <p>Categories Served</p>
                    </div>
                </div>

                <div class="menu__achievements__box">
                    <img class="menu__achievements__box--image" src="./img/icon4_box_mobile.svg" alt="achievements">
                    <div class="menu__achievements__box--text">
                        <p>100M</p>
                        <p>+</p>
                        <p>Idea Raised Funds</p>
                    </div>
                </div>
            </div>
        </section>
    </main>