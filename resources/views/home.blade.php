@extends('layouts.app')

<main>
    <section class="banner-area">
        <div class="container-fluid">
            <div class="banner__image">
                <div class="parallax-bg">
                    <img
                        src="{{
                            asset('assets/images/banner/main.jpg')
                        }}"
                        alt="image"
                    />
                </div>

                <div class="banner__content animated-content">
                    <div class="shape">
                        <img
                            src="{{
                                asset(
                                    'assets/images/shape/banner-one-shape.png'
                                )
                            }}"
                            alt="shape"
                        />
                    </div>
                    <h4
                        class="mb-2"
                        data-animation="fadeInLeft"
                        data-duration="1s"
                        data-delay=".1s"
                    >
                    Hospitality Equipment Leader
                    </h4>
                    <h1
                        data-animation="fadeInLeft"
                        data-duration="1.5s"
                        data-delay=".15s"
                    >
                    A market leader

                    in the field of commercial

                    hospitality equipment
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner area end here -->
    <div class="logout-area">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-link">
                <i class="fa fa-sign-out"></i> Logout
            </button>
        </form>
    </div>
    <!-- About area start here -->
    <section class="about-area pt-120 pb-120">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="about__image">
                        <figure class="wow imageLeftToRight gsap__parallax">
                            <img
                                src="{{
                                    asset(
                                        'assets/images/about/about-image1.jpg'
                                    )
                                }}"
                                alt="image"
                            />
                        </figure>
                        <div
                            class="text-shape wow fadeInUp"
                            data-wow-delay="400ms"
                            data-wow-duration="1500ms"
                        >
                            <img
                                class="animation__rotateY"
                                src="{{
                                    asset(
                                        'assets/images/about/about-circle-text.png'
                                    )
                                }}"
                                alt="text"
                            />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header">
                        <h4
                            class="wow fadeInUp"
                            data-wow-delay="00ms"
                            data-wow-duration="1500ms"
                        >
                            ABOUT US
                        </h4>
                        <h2 class="wow splt-txt" data-splitting="">
                            Have a project? Let’s <br />
                            Discuss it
                        </h2>
                        <p
                            class="wow fadeInUp"
                            data-wow-delay="200ms"
                            data-wow-duration="1500ms"
                        >
                            fusce accumsan tincidunt erat et convallis risus
                            ullamcorper euoled <br />
                            vehicula massa a massa cursus
                        </p>
                    </div>
                    <div class="about__content">
                        <ul
                            class="wow fadeInDown"
                            data-wow-delay="00ms"
                            data-wow-duration="1500ms"
                        >
                            <li>
                                <svg
                                    width="18"
                                    height="18"
                                    viewbox="0 0 18 18"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M15.8531 8.63909L13.8086 8.05484C12.8879 7.79527 12.0492 7.30377 11.3728 6.62736C10.6964 5.95095 10.2049 5.11228 9.94536 4.19159L9.36111 2.14709C9.33172 2.07556 9.28174 2.01438 9.2175 1.97132C9.15327 1.92826 9.07769 1.90527 9.00036 1.90527C8.92303 1.90527 8.84744 1.92826 8.78321 1.97132C8.71897 2.01438 8.66899 2.07556 8.63961 2.14709L8.05536 4.19159C7.79579 5.11228 7.30429 5.95095 6.62788 6.62736C5.95147 7.30377 5.1128 7.79527 4.19211 8.05484L2.14761 8.63909C2.0691 8.66137 2.00001 8.70865 1.95082 8.77375C1.90162 8.83886 1.875 8.91823 1.875 8.99984C1.875 9.08144 1.90162 9.16082 1.95082 9.22592C2.00001 9.29103 2.0691 9.3383 2.14761 9.36059L4.19211 9.94484C5.1128 10.2044 5.95147 10.6959 6.62788 11.3723C7.30429 12.0487 7.79579 12.8874 8.05536 13.8081L8.63961 15.8526C8.66189 15.9311 8.70917 16.0002 8.77427 16.0494C8.83938 16.0986 8.91875 16.1252 9.00036 16.1252C9.08196 16.1252 9.16133 16.0986 9.22644 16.0494C9.29154 16.0002 9.33882 15.9311 9.36111 15.8526L9.94536 13.8081C10.2049 12.8874 10.6964 12.0487 11.3728 11.3723C12.0492 10.6959 12.8879 10.2044 13.8086 9.94484L15.8531 9.36059C15.9316 9.3383 16.0007 9.29103 16.0499 9.22592C16.0991 9.16082 16.1257 9.08144 16.1257 8.99984C16.1257 8.91823 16.0991 8.83886 16.0499 8.77375C16.0007 8.70865 15.9316 8.66137 15.8531 8.63909Z"
                                        fill="#BB9A65"
                                    ></path>
                                </svg>
                                Essential Design Program
                            </li>
                            <li>
                                <svg
                                    width="18"
                                    height="18"
                                    viewbox="0 0 18 18"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M15.8531 8.63909L13.8086 8.05484C12.8879 7.79527 12.0492 7.30377 11.3728 6.62736C10.6964 5.95095 10.2049 5.11228 9.94536 4.19159L9.36111 2.14709C9.33172 2.07556 9.28174 2.01438 9.2175 1.97132C9.15327 1.92826 9.07769 1.90527 9.00036 1.90527C8.92303 1.90527 8.84744 1.92826 8.78321 1.97132C8.71897 2.01438 8.66899 2.07556 8.63961 2.14709L8.05536 4.19159C7.79579 5.11228 7.30429 5.95095 6.62788 6.62736C5.95147 7.30377 5.1128 7.79527 4.19211 8.05484L2.14761 8.63909C2.0691 8.66137 2.00001 8.70865 1.95082 8.77375C1.90162 8.83886 1.875 8.91823 1.875 8.99984C1.875 9.08144 1.90162 9.16082 1.95082 9.22592C2.00001 9.29103 2.0691 9.3383 2.14761 9.36059L4.19211 9.94484C5.1128 10.2044 5.95147 10.6959 6.62788 11.3723C7.30429 12.0487 7.79579 12.8874 8.05536 13.8081L8.63961 15.8526C8.66189 15.9311 8.70917 16.0002 8.77427 16.0494C8.83938 16.0986 8.91875 16.1252 9.00036 16.1252C9.08196 16.1252 9.16133 16.0986 9.22644 16.0494C9.29154 16.0002 9.33882 15.9311 9.36111 15.8526L9.94536 13.8081C10.2049 12.8874 10.6964 12.0487 11.3728 11.3723C12.0492 10.6959 12.8879 10.2044 13.8086 9.94484L15.8531 9.36059C15.9316 9.3383 16.0007 9.29103 16.0499 9.22592C16.0991 9.16082 16.1257 9.08144 16.1257 8.99984C16.1257 8.91823 16.0991 8.83886 16.0499 8.77375C16.0007 8.70865 15.9316 8.66137 15.8531 8.63909Z"
                                        fill="#BB9A65"
                                    ></path>
                                </svg>
                                Dedicated Design Program
                            </li>
                            <li>
                                <svg
                                    width="18"
                                    height="18"
                                    viewbox="0 0 18 18"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M15.8531 8.63909L13.8086 8.05484C12.8879 7.79527 12.0492 7.30377 11.3728 6.62736C10.6964 5.95095 10.2049 5.11228 9.94536 4.19159L9.36111 2.14709C9.33172 2.07556 9.28174 2.01438 9.2175 1.97132C9.15327 1.92826 9.07769 1.90527 9.00036 1.90527C8.92303 1.90527 8.84744 1.92826 8.78321 1.97132C8.71897 2.01438 8.66899 2.07556 8.63961 2.14709L8.05536 4.19159C7.79579 5.11228 7.30429 5.95095 6.62788 6.62736C5.95147 7.30377 5.1128 7.79527 4.19211 8.05484L2.14761 8.63909C2.0691 8.66137 2.00001 8.70865 1.95082 8.77375C1.90162 8.83886 1.875 8.91823 1.875 8.99984C1.875 9.08144 1.90162 9.16082 1.95082 9.22592C2.00001 9.29103 2.0691 9.3383 2.14761 9.36059L4.19211 9.94484C5.1128 10.2044 5.95147 10.6959 6.62788 11.3723C7.30429 12.0487 7.79579 12.8874 8.05536 13.8081L8.63961 15.8526C8.66189 15.9311 8.70917 16.0002 8.77427 16.0494C8.83938 16.0986 8.91875 16.1252 9.00036 16.1252C9.08196 16.1252 9.16133 16.0986 9.22644 16.0494C9.29154 16.0002 9.33882 15.9311 9.36111 15.8526L9.94536 13.8081C10.2049 12.8874 10.6964 12.0487 11.3728 11.3723C12.0492 10.6959 12.8879 10.2044 13.8086 9.94484L15.8531 9.36059C15.9316 9.3383 16.0007 9.29103 16.0499 9.22592C16.0991 9.16082 16.1257 9.08144 16.1257 8.99984C16.1257 8.91823 16.0991 8.83886 16.0499 8.77375C16.0007 8.70865 15.9316 8.66137 15.8531 8.63909Z"
                                        fill="#BB9A65"
                                    ></path>
                                </svg>
                                White Gloves Design Program
                            </li>
                        </ul>
                        <a
                            href="page-about.html"
                            class="btn-arrow wow fadeInDown"
                            data-wow-delay="200ms"
                            data-wow-duration="1500ms"
                            ><i class="fa-light fa-arrow-up-right"></i
                        ></a>
                    </div>
                    <div class="image mt-60">
                        <figure class="wow imageRightToLeft gsap__parallax">
                            <img
                                src="{{
                                    asset(
                                        'assets/images/about/about-image2.jpg'
                                    )
                                }}"
                                alt="image"
                            />
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About area end here -->

    <!-- Project area start here -->
    <section class="project-area">
        <div class="section-header__icon text-center mb-50">
            <div class="mb-10 wow bounceIn">
                <svg
                    width="45"
                    height="38"
                    viewbox="0 0 45 38"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <g clip-path="url(#clip0_1_1896)">
                        <path
                            d="M9.5613 23.1832V30.8979H22.1409V7.65178L16.0303 11.3706H16.0289L15.333 11.7945L9.5613 15.3074V23.1832ZM40.8147 31.6549H36.1561H22.8584V37.2429H40.8147V31.6549ZM40.8147 18.5787L36.1561 15.7434V23.1832V30.8979H40.8147V18.5787ZM41.5328 18.1464L45 20.2564V21.1263L41.5328 19.0163V30.8986H45V31.6549H41.5328V37.9992C35.0696 38.0008 28.6049 37.9992 22.1409 37.9992V31.6549H9.5613V38H8.84316V31.6549H4.18459V38H3.46645V31.6549H0.0251349V30.8986H3.46717V19.0163L0 21.1255V20.2556L3.46645 18.1456V6.78039H4.18459V17.7096L8.84388 14.8743V6.78039H9.56201V14.4375L14.9775 11.1419L15.6727 10.7187V10.7179L22.1416 6.78039V6.34355V0L22.6788 0.326301L41.5335 11.7832V18.1464H41.5328ZM35.9759 14.7638L40.8147 17.7088V12.2154L22.8584 1.30596V6.34431V6.78115C27.2318 9.44152 31.6024 12.1026 35.9759 14.7638ZM12.9315 20.03H15.3165V17.515H12.9315V20.03ZM16.3858 17.515V20.03H18.7707V17.515H16.3858ZM18.7714 21.0505H16.3865V23.5656H18.7714V21.0505ZM15.3165 23.5656V21.0505H12.9315V23.5656H15.3165ZM8.84388 30.8986V15.7434L4.18459 18.5794V30.8986H8.84388Z"
                            fill="#131313"
                        ></path>
                    </g>
                    <defs>
                        <clippath id="clip0_1_1896">
                            <rect width="45" height="38" fill="white"></rect>
                        </clippath>
                    </defs>
                </svg>
            </div>
            <h2 class="wow splt-txt" data-splitting="">Our Latest Project</h2>
        </div>
        <div
            class="project__wrp"
            data-background="{{ asset('assets/images/bg/project-one-bg.jpg') }}"
        >
            <div class="project__slider-arrys">
                <button class="project__arry-prev">
                    <i class="fa-regular fa-arrow-left"></i>
                </button>
                <button class="project__arry-next">
                    <i class="fa-regular fa-arrow-right"></i>
                </button>
            </div>
            <div class="swiper project__slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div
                            class="project__item"
                            data-bg="{{
                                asset('assets/images/bg/project-one-bg.jpg')
                            }}"
                        >
                            <div class="project__content">
                                <h6 class="wow splt-txt" data-splitting="">
                                    Bedroom
                                </h6>
                                <h4 class="wow splt-txt" data-splitting="">
                                    <a href="page-project-details.html"
                                        >The Fox House</a
                                    >
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="project__item"
                            data-bg="{{
                                asset('assets/images/bg/project-one-bg2.jpg')
                            }}"
                        >
                            <div class="project__content">
                                <h6 class="wow splt-txt" data-splitting="">
                                    Furniture
                                </h6>
                                <h4 class="wow splt-txt" data-splitting="">
                                    <a href="page-project-details.html"
                                        >Minimalism</a
                                    >
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="project__item"
                            data-bg="{{
                                asset('assets/images/bg/project-one-bg3.jpg')
                            }}"
                        >
                            <div class="project__content">
                                <h6 class="wow splt-txt" data-splitting="">
                                    Interior
                                </h6>
                                <h4 class="wow splt-txt" data-splitting="">
                                    <a href="page-project-details.html"
                                        >House Lighting</a
                                    >
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="project__item"
                            data-bg="{{
                                asset('assets/images/bg/project-one-bg4.jpg')
                            }}"
                        >
                            <div class="project__content">
                                <h6 class="wow splt-txt" data-splitting="">
                                    Bedroom
                                </h6>
                                <h4 class="wow splt-txt" data-splitting="">
                                    <a href="page-project-details.html"
                                        >The Fox House</a
                                    >
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="project__item"
                            data-bg="{{
                                asset('assets/images/bg/project-one-bg.jpg')
                            }}"
                        >
                            <div class="project__content">
                                <h6 class="wow splt-txt" data-splitting="">
                                    Bedroom
                                </h6>
                                <h4 class="wow splt-txt" data-splitting="">
                                    <a href="page-project-details.html"
                                        >The Fox House</a
                                    >
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="project__item"
                            data-bg="{{
                                asset('assets/images/bg/project-one-bg2.jpg')
                            }}"
                        >
                            <div class="project__content">
                                <h6 class="wow splt-txt" data-splitting="">
                                    Furniture
                                </h6>
                                <h4 class="wow splt-txt" data-splitting="">
                                    <a href="page-project-details.html"
                                        >Minimalism</a
                                    >
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="project__item"
                            data-bg="{{
                                asset('assets/images/bg/project-one-bg3.jpg')
                            }}"
                        >
                            <div class="project__content">
                                <h6 class="wow splt-txt" data-splitting="">
                                    Interior
                                </h6>
                                <h4 class="wow splt-txt" data-splitting="">
                                    <a href="page-project-details.html"
                                        >House Lighting</a
                                    >
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="project__item"
                            data-bg="{{
                                'assets/images/bg/project-one-bg4.jpg'
                            }}"
                        >
                            <div class="project__content">
                                <h6 class="wow splt-txt" data-splitting="">
                                    Bedroom
                                </h6>
                                <h4 class="wow splt-txt" data-splitting="">
                                    <a href="page-project-details.html"
                                        >The Fox House</a
                                    >
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Project area end here -->

    <!-- Choose area start here -->
    <section class="choose-area pt-120 pb-120">
        <div class="choose__shape">
            <img
                src="{{ asset('assets/images/choose/choose-image2.png') }}"
                alt="image"
            />
        </div>
        <div class="container">
            <div class="choose__wrp">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="section-header">
                            <h4
                                class="wow fadeInUp"
                                data-wow-delay="00ms"
                                data-wow-duration="1500ms"
                            >
                                WHY CHOOSE US
                            </h4>
                            <h2 class="wow splt-txt" data-splitting="">
                                Providing quality your <br />
                                Interior services
                            </h2>
                            <p
                                class="wow fadeInUp"
                                data-wow-delay="200ms"
                                data-wow-duration="1500ms"
                            >
                                With over four decades of experience providing
                                solutions to large-scale <br />
                                enterprises throughout the globe, we offer
                                end-to-end logistics tailored for <br />
                                specific markets.
                            </p>
                        </div>
                        <div class="choose__content mt-30 mb-50">
                            <ul
                                class="wow fadeInDown"
                                data-wow-delay="00ms"
                                data-wow-duration="1500ms"
                            >
                                <li>
                                    <img
                                        src="{{
                                            asset(
                                                'assets/images/icon/choose-icon1.png'
                                            )
                                        }}"
                                        alt="icon"
                                    />
                                    <h3>Commercial Furniture</h3>
                                </li>
                                <li>
                                    <img
                                        src="{{
                                            asset(
                                                'assets/images/icon/choose-icon2.png'
                                            )
                                        }}"
                                        alt="icon"
                                    />
                                    <h3>Home Lighting</h3>
                                </li>
                            </ul>
                        </div>
                        <a
                            href="page-about.html"
                            class="btn-one wow fadeInDown"
                            data-wow-delay="200ms"
                            data-wow-duration="1500ms"
                            >read more</a
                        >
                    </div>
                    <div class="col-lg-6">
                        <div class="choose__image">
                            <img
                                src="{{
                                    asset(
                                        'assets/images/choose/choose-image.png'
                                    )
                                }}"
                                alt="image"
                            />
                            <div class="stroke-text">
                                <h2
                                    class="wow bounceInRight"
                                    data-wow-delay="400ms"
                                    data-wow-duration="1000ms"
                                >
                                    Interior
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Choose area end here -->

    <!-- Testimonial area start here -->
    <section class="testimonial-area">
        <div class="testimonial__wrp">
            <div class="row g-0">
                <div class="col-xl-6">
                    <div class="testimonial__image">
                        <figure class="wow imageUpToDown gsap__parallax">
                            <img
                                src="{{
                                    asset(
                                        'assets/images/testimonial/testimonial-image.jpg'
                                    )
                                }}"
                                alt="image"
                            />
                        </figure>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div
                        class="testimonial__item"
                        data-background="{{
                            asset('assets/images/bg/testimonial-item-bg.jpg')
                        }}"
                    >
                        <div class="icon">
                            <svg
                                width="143"
                                height="109"
                                viewbox="0 0 143 109"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M53.625 0.875H13.4062C6.0136 0.875 0 6.8886 0 14.2812V54.5C0 61.8927 6.0136 67.9062 13.4062 67.9062H31.4449L24.661 102.803C24.4057 104.114 24.7505 105.469 25.5993 106.499C26.4481 107.529 27.7115 108.125 29.0469 108.125H43.5245C47.4107 108.125 50.8648 105.583 52.0409 101.902L65.05 71.044C65.1242 70.8672 65.1874 70.6861 65.2376 70.5029C66.429 66.2218 67.0312 61.7944 67.0312 57.3453V14.2812C67.0312 6.8886 61.0177 0.875 53.625 0.875Z"
                                    fill="black"
                                    fill-opacity="0.1"
                                ></path>
                                <path
                                    d="M129.594 0.875H89.375C81.9823 0.875 75.9688 6.8886 75.9688 14.2812V54.5C75.9688 61.8927 81.9823 67.9062 89.375 67.9062H107.416L100.63 102.803C100.372 104.114 100.717 105.469 101.568 106.499C102.415 107.529 103.68 108.125 105.016 108.125H119.495C123.384 108.125 126.836 105.583 128.01 101.9L141.019 71.0439C141.093 70.8672 141.154 70.6861 141.206 70.5028C142.398 66.2174 143 61.7901 143 57.3453V14.2812C143 6.8886 136.986 0.875 129.594 0.875Z"
                                    fill="black"
                                    fill-opacity="0.1"
                                ></path>
                            </svg>
                        </div>
                        <div class="section-header">
                            <h4
                                class="wow fadeInUp"
                                data-wow-delay="00ms"
                                data-wow-duration="1500ms"
                            >
                                TESTIMONIALS
                            </h4>
                            <h2 class="wow splt-txt" data-splitting="">
                                Customer Feedback
                            </h2>
                        </div>
                        <div class="swiper testimonial__slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial__content">
                                        <p>
                                            Contrary to popular belief, Lorem
                                            Ipsum is not simply random text. It
                                            has roots in a piece of classical
                                            Latin literature from 45 BC, making
                                            it over 2000 years old. Richard
                                            McClintock, a Latin professor at
                                            Hampden-Sydney College in Virginia,
                                            looked up one time over the lazyt
                                            don
                                        </p>
                                        <div class="testimonial__info mt-40">
                                            <div class="info">
                                                <h5 class="mb-1">
                                                    Suborna Islam
                                                </h5>
                                                <span>Web Designer</span>
                                            </div>
                                            <div class="testimonial__arry">
                                                <button
                                                    class="testimonial__arry-prev"
                                                >
                                                    <i
                                                        class="fa-light fa-arrow-left-long"
                                                    ></i>
                                                </button>
                                                <button
                                                    class="testimonial__arry-next"
                                                >
                                                    <i
                                                        class="fa-light fa-arrow-right-long"
                                                    ></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__content">
                                        <p>
                                            Contrary to popular belief, Lorem
                                            Ipsum is not simply random text. It
                                            has roots in a piece of classical
                                            Latin literature from 45 BC, making
                                            it over 2000 years old. Richard
                                            McClintock, a Latin professor at
                                            Hampden-Sydney College in Virginia,
                                            looked up one time over the lazyt
                                            don
                                        </p>
                                        <div class="testimonial__info mt-40">
                                            <div class="info">
                                                <h5 class="mb-1">
                                                    Kawser Ahmed
                                                </h5>
                                                <span>Web Developer</span>
                                            </div>
                                            <div class="testimonial__arry">
                                                <button
                                                    class="testimonial__arry-prev"
                                                >
                                                    <i
                                                        class="fa-light fa-arrow-left-long"
                                                    ></i>
                                                </button>
                                                <button
                                                    class="testimonial__arry-next"
                                                >
                                                    <i
                                                        class="fa-light fa-arrow-right-long"
                                                    ></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial__content">
                                        <p>
                                            Contrary to popular belief, Lorem
                                            Ipsum is not simply random text. It
                                            has roots in a piece of classical
                                            Latin literature from 45 BC, making
                                            it over 2000 years old. Richard
                                            McClintock, a Latin professor at
                                            Hampden-Sydney College in Virginia,
                                            looked up one time over the lazyt
                                            don
                                        </p>
                                        <div class="testimonial__info mt-40">
                                            <div class="info">
                                                <h5 class="mb-1">Moeen Khan</h5>
                                                <span>MBBS Doctor</span>
                                            </div>
                                            <div class="testimonial__arry">
                                                <button
                                                    class="testimonial__arry-prev"
                                                >
                                                    <i
                                                        class="fa-light fa-arrow-left-long"
                                                    ></i>
                                                </button>
                                                <button
                                                    class="testimonial__arry-next"
                                                >
                                                    <i
                                                        class="fa-light fa-arrow-right-long"
                                                    ></i>
                                                </button>
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
    </section>
    <!-- Testimonial area end here -->

    <!-- Funfact area start here -->
    <section class="funfact-area pt-100 pb-70">
        <div class="container">
            <div class="funfact__wrp">
                <div
                    class="funfact__item hover-item wow bounceInUp"
                    data-wow-delay="00ms"
                    data-wow-duration="1500ms"
                >
                    <h2><span class="count">30</span>+</h2>
                    <p>OF INTERIOR</p>
                </div>
                <div
                    class="funfact__item hover-item active wow bounceInUp"
                    data-wow-delay="200ms"
                    data-wow-duration="1500ms"
                >
                    <h2><span class="count">05</span>+</h2>
                    <p>YEARS OF EXPERIENCE</p>
                </div>
                <div
                    class="funfact__item hover-item wow bounceInUp"
                    data-wow-delay="300ms"
                    data-wow-duration="1500ms"
                >
                    <h2><span class="count">10</span>+</h2>
                    <p>PROFESSIONAL TEAM</p>
                </div>
                <div
                    class="funfact__item hover-item wow bounceInUp"
                    data-wow-delay="400ms"
                    data-wow-duration="1500ms"
                >
                    <h2><span class="count">03</span>+</h2>
                    <p>BEST INTERIOR AWARDS</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Funfact area end here -->

    <!-- Marquee area start here -->
    <section
        class="marquee-area"
        data-speed="0.5"
        data-parallax="scroll"
        data-image-src="{{ asset('assets/images/bg/marquee-bg.jpg') }}"
    >
        <div class="marquee__wrp">
            <div class="marquee__slide">
                <div class="marquee__item-wrp">
                    <div class="marquee__item">
                        <h2>Decoration</h2>
                    </div>
                    <div class="marquee__item">
                        <h2>Interior Design</h2>
                    </div>
                    <div class="marquee__item">
                        <h2>Modern</h2>
                    </div>
                </div>
                <div class="marquee__item-wrp">
                    <div class="marquee__item">
                        <h2>Decoration</h2>
                    </div>
                    <div class="marquee__item">
                        <h2>Interior Design</h2>
                    </div>
                    <div class="marquee__item">
                        <h2>Modern</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Marquee area end here -->

    <!-- Brand area start here -->
    <div class="brand-area pt-100 pb-100">
        <div class="container">
            <div class="brand__wrp">
                <div
                    class="brand__item wow fadeInUp"
                    data-wow-delay="00ms"
                    data-wow-duration="1000ms"
                >
                    <img
                        src="{{
                            asset('assets/images/brand/brand-image1.png')
                        }}"
                        alt="image"
                    />
                </div>
                <div
                    class="brand__item wow fadeInUp"
                    data-wow-delay="200ms"
                    data-wow-duration="1000ms"
                >
                    <img
                        src="{{
                            asset('assets/images/brand/brand-image2.png')
                        }}"
                        alt="image"
                    />
                </div>
                <div
                    class="brand__item wow fadeInUp"
                    data-wow-delay="300ms"
                    data-wow-duration="1000ms"
                >
                    <img
                        src="{{
                            asset('assets/images/brand/brand-image3.png')
                        }}"
                        alt="image"
                    />
                </div>
                <div
                    class="brand__item wow fadeInUp"
                    data-wow-delay="400ms"
                    data-wow-duration="1000ms"
                >
                    <img
                        src="{{
                            asset('assets/images/brand/brand-image4.png')
                        }}"
                        alt="image"
                    />
                </div>
                <div
                    class="brand__item wow fadeInUp"
                    data-wow-delay="500ms"
                    data-wow-duration="1000ms"
                >
                    <img
                        src="{{
                            asset('assets/images/brand/brand-image5.png')
                        }}"
                        alt="image"
                    />
                </div>
            </div>
        </div>
    </div>
    <!-- Brand area end here -->

    <!-- Contact area start here -->
    <section class="contact-area">
        <div class="contact__shape">
            <img
                src="{{ asset('assets/images/shape/contact-shape.png') }}"
                alt="shape"
            />
        </div>
        <div class="col-lg-7">
            <div class="contact__image">
                <figure class="gsap__parallax">
                    <img
                        src="{{
                            asset('assets/images/contact/contact-image.jpg')
                        }}"
                        alt="image"
                    />
                </figure>
            </div>
        </div>
        <div class="contact__wrp">
            <div class="contact__form">
                <div class="section-header mb-30">
                    <h4
                        class="wow fadeInUp"
                        data-wow-delay="00ms"
                        data-wow-duration="1500ms"
                    >
                        CONTACT US
                    </h4>
                    <h2 class="wow splt-txt" data-splitting="">Get in Touch</h2>
                </div>
                <form action="#">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <input type="text" placeholder="Your Name" />
                        </div>
                        <div class="col-sm-6">
                            <input type="email" placeholder="Email Address" />
                        </div>
                        <div class="col-sm-6">
                            <input type="text" placeholder="Enter Subject" />
                        </div>
                        <div class="col-sm-6">
                            <input type="text" placeholder="Enter Phone" />
                        </div>
                    </div>
                    <textarea
                        class="my-3"
                        name="masage"
                        id="masage"
                        placeholder="Write a Message"
                    ></textarea>
                    <button class="submit">SEND A MESSAGE</button>
                </form>
            </div>
            <div class="contact__item">
                <div class="inner-box">
                    <div class="icon mb-20">
                        <img
                            src="{{
                                asset('assets/images/icon/contact-icon1.png')
                            }}"
                            alt="icon"
                        />
                    </div>
                    <div class="icon-two">
                        <img
                            src="{{
                                asset('assets/images/icon/contact-icon2.png')
                            }}"
                            alt="icon"
                        />
                    </div>
                    <div class="info">
                        <h6 class="mb-1">Call us for any inquiry</h6>
                        <h3>(000) 222 22 333</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact area end here -->

    <!-- Blog area start here -->
    <section class="blog-area pt-100 pb-100">
        <div class="container">
            <div class="section-header__icon text-center mb-50">
                <div class="icon mb-10 wow bounceIn">
                    <svg
                        width="45"
                        height="38"
                        viewbox="0 0 45 38"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <g clip-path="url(#clip0_1_1694)">
                            <path
                                d="M9.5613 23.1832V30.8979H22.1409V7.65178L16.0303 11.3706H16.0289L15.333 11.7945L9.5613 15.3074V23.1832ZM40.8147 31.6549H36.1561H22.8584V37.2429H40.8147V31.6549ZM40.8147 18.5787L36.1561 15.7434V23.1832V30.8979H40.8147V18.5787ZM41.5328 18.1464L45 20.2564V21.1263L41.5328 19.0163V30.8986H45V31.6549H41.5328V37.9992C35.0696 38.0008 28.6049 37.9992 22.1409 37.9992V31.6549H9.5613V38H8.84316V31.6549H4.18459V38H3.46645V31.6549H0.0251349V30.8986H3.46717V19.0163L0 21.1255V20.2556L3.46645 18.1456V6.78039H4.18459V17.7096L8.84388 14.8743V6.78039H9.56201V14.4375L14.9775 11.1419L15.6727 10.7187V10.7179L22.1416 6.78039V6.34355V0L22.6788 0.326301L41.5335 11.7832V18.1464H41.5328ZM35.9759 14.7638L40.8147 17.7088V12.2154L22.8584 1.30596V6.34431V6.78115C27.2318 9.44152 31.6024 12.1026 35.9759 14.7638ZM12.9315 20.03H15.3165V17.515H12.9315V20.03ZM16.3858 17.515V20.03H18.7707V17.515H16.3858ZM18.7714 21.0505H16.3865V23.5656H18.7714V21.0505ZM15.3165 23.5656V21.0505H12.9315V23.5656H15.3165ZM8.84388 30.8986V15.7434L4.18459 18.5794V30.8986H8.84388Z"
                                fill="#131313"
                            ></path>
                        </g>
                        <defs>
                            <clippath id="clip0_1_1694">
                                <rect
                                    width="45"
                                    height="38"
                                    fill="white"
                                ></rect>
                            </clippath>
                        </defs>
                    </svg>
                </div>
                <h2 class="wow splt-txt" data-splitting="">
                    Check Latest Blog Post <br />
                    from Blog List
                </h2>
            </div>
            <div class="blog__wrp">
                <div class="row g-4">
                    <div
                        class="col-lg-6 col-xl-4 wow fadeInUp"
                        data-wow-delay="00ms"
                        data-wow-duration="1500ms"
                    >
                        <div class="blog__item">
                            <a href="news-details.html" class="blog__image">
                                <img
                                    src="{{
                                        asset(
                                            'assets/images/blog/blog-image1.jpg'
                                        )
                                    }}"
                                    alt="image"
                                />
                            </a>
                            <div class="blog__content">
                                <ul>
                                    <li><strong>FURNITURE</strong></li>
                                    <li><span>May 25, 2024</span></li>
                                </ul>
                                <h4 class="mt-10">
                                    <a href="news-details.html"
                                        >Detailed Accents on Custom of Built
                                        Office Design</a
                                    >
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-6 col-xl-4 wow fadeInUp"
                        data-wow-delay="200ms"
                        data-wow-duration="1500ms"
                    >
                        <div class="blog__item">
                            <a href="news-details.html" class="blog__image">
                                <img
                                    src="{{
                                        asset(
                                            'assets/images/blog/blog-image2.jpg'
                                        )
                                    }}"
                                    alt="image"
                                />
                            </a>
                            <div class="blog__content">
                                <ul>
                                    <li><strong>WOOD CUTTING</strong></li>
                                    <li><span>May 28, 2024</span></li>
                                </ul>
                                <h4 class="mt-10">
                                    <a href="news-details.html"
                                        >We specialize in restoring antique
                                        Interior design</a
                                    >
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-6 col-xl-4 wow fadeInUp"
                        data-wow-delay="400ms"
                        data-wow-duration="1500ms"
                    >
                        <div class="blog__item">
                            <a href="news-details.html" class="blog__image">
                                <img
                                    src="{{
                                        asset(
                                            'assets/images/blog/blog-image3.jpg'
                                        )
                                    }}"
                                    alt="image"
                                />
                            </a>
                            <div class="blog__content">
                                <ul>
                                    <li><strong>CRAFTING</strong></li>
                                    <li><span>May 31, 2024</span></li>
                                </ul>
                                <h4 class="mt-10">
                                    <a href="news-details.html"
                                        >We creating in the Unique of interior
                                        showcasing</a
                                    >
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog area end here -->
    <!-- Footer area start here -->
    <footer class="footer-area">
        <div class="footer__shape1">
            <img src="assets/images/shape/footer-shape1.png" alt="shape" />
        </div>
        <div class="footer__shape2">
            <img src="assets/images/shape/footer-shape2.png" alt="shape" />
        </div>
        <div class="container">
            <div class="footer__wrp pt-120 pb-120">
                <div class="footer__left">
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo/logo.png" alt="logo" />
                    </a>
                </div>
                <div class="footer__right">
                    <div class="footer__item">
                        <h4 class="title">Service</h4>
                        <ul>
                            <li><a href="#0">About Us</a></li>
                            <li><a href="#0">Our Team</a></li>
                            <li><a href="#0">Pricing Plans</a></li>
                            <li><a href="#0">Get In Touch</a></li>
                        </ul>
                    </div>
                    <div class="footer__item">
                        <h4 class="title">Useful links</h4>
                        <ul>
                            <li><a href="#0">Privacy & Terms</a></li>
                            <li><a href="#0">FAQ Page</a></li>
                            <li><a href="#0">Help Center</a></li>
                            <li><a href="#0">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="footer__item">
                        <h4 class="title">Follow Us</h4>
                        <ul>
                            <li><a href="#0">Facebook</a></li>
                            <li><a href="#0">Instagram</a></li>
                            <li><a href="#0">LinkedIn</a></li>
                            <li><a href="#0">YouTube</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__wrp-bottom pt-60 pb-60">
                <p>
                    Lorem ipsum dolor sit amet, cosectetur adip Duis convallis
                    sit amet purus ac dapibus.
                </p>
                <ul>
                    <li>
                        <a href="#0"
                            ><span
                                class="__cf_email__"
                                data-cfemail="f09e959594b0939f9d80919e89de939f9d"
                                >[email&#160;protected]</span
                            ></a
                        >
                    </li>
                    <li><a href="#0">0000 - 222 - 333</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Footer area end here -->
</main>
