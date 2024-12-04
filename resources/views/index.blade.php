<x-app-layout>

    <!-- Navbar -->
    <x-navbar />

    <!-- Whatsapp Link -->
    <a href="https://wa.me/+919453842202" 
        target="_blank" 
        class="whatsapp-link">
        <i class="fa-brands fa-whatsapp"></i>    
    </a>

    <!-- Welcome Section -->
    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
        <x-welcome />
    </section>


    <section class="about-section section-padding" id="section_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center">
                    <h2 class="mb-lg-5 mb-4">About</h2>
                </div>
            
                <div class="col-lg-5 col-12 me-auto mb-4 mb-lg-0">
                    <h3 class="mb-3">Our Story</h3>
                    <p><strong>Since 2005</strong>, we have been providing top-quality kitchen equipment to homes and businesses worldwide. Our commitment to innovation and reliability has made us a trusted name in the industry.</p>
                    <p>From state-of-the-art appliances to durable utensils, we are your one-stop destination for all kitchen solutions. Explore our range of products designed to enhance your cooking experience and transform your kitchen into a chef’s haven.</p>
                </div>
            
                <div class="col-lg-4 col-md-6 col-12 mx-auto">
                    <div class="member-block">
                        <div class="member-block-image-wrap">
                            <img src="{{asset('images/banner-four-image.jpg')}}" class="member-block-image img-fluid" alt="Kitchen Equipment">
            
                            <ul class="social-icon">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-facebook"></a>
                                </li>
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-twitter"></a>
                                </li>
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-instagram"></a>
                                </li>
                            </ul>
                        </div>
            
                        <div class="member-block-info text-center">
                            <h4>Kitchen Equipment</h4>
                            <p>Innovating Kitchens Worldwide</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


    <section class="section-bg-image">
        <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z" stroke-width="0"></path>
            <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z" stroke-width="0"></path>
            <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z" stroke-width="0"></path>
            <path fill="rgba(255, 255, 255, 1)" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path>
            <path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z" stroke-width="0"></path>
        </svg>
    
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="section-bg-image-block">
                        <h2 class="mb-lg-3">Explore Top Kitchen Equipment</h2>
                        <p>Discover premium quality kitchen tools and appliances designed to elevate your cooking experience. From professional-grade cookware to state-of-the-art appliances, we offer everything you need to create culinary masterpieces.</p>
                        <ul>
                            <li>Durable and stylish cookware sets</li>
                            <li>Energy-efficient kitchen appliances</li>
                            <li>Innovative tools for home chefs</li>
                        </ul>
                    </div>
                </div>
<!--             
                <div class="col-lg-6 col-12">
                    <img src="https://source.unsplash.com/600x400/?kitchen,appliances" class="img-fluid rounded" alt="Kitchen Equipment">
                </div> -->
            </div>
        </div>
    
        <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z" stroke-width="0"></path>
            <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z" stroke-width="0"></path>
            <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z" stroke-width="0"></path>
            <path fill="rgba(255, 255, 255, 1)" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path>
            <path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z" stroke-width="0"></path>
        </svg>
    </section>
    


    <section class="clients-section section-padding" id="section_3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center mx-auto mb-lg-5 mb-4">
                    <h2>Our <span>Clients</span></h2>
                    <p>We are proud to have worked with some of the best brands in the industry.</p>
                </div>
    
                <x-client-logo />
            </div>
        </div>
    </section>
    
    


    <section class="events-section section-bg section-padding" id="section_4">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <h2 class="mb-lg-3">Upcoming Events</h2>
                </div>

                <div class="row custom-block mb-3">
                    <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                        <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                            <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">24</h6>
                            
                            <strong class="text-white">Feb 2048</strong>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                        <div class="custom-block-image-wrap">
                            <a href="event-detail.html">
                                <img src="images/professional-golf-player.jpg" class="custom-block-image img-fluid" alt="">

                                <i class="custom-block-icon bi-link"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 order-3 order-lg-0">
                        <div class="custom-block-info mt-2 mt-lg-0">
                            <a href="event-detail.html" class="events-title mb-3">Private activities</a>

                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                            <div class="d-flex flex-wrap border-top mt-4 pt-3">

                                <div class="mb-4 mb-lg-0">
                                    <div class="d-flex flex-wrap align-items-center mb-1">
                                        <span class="custom-block-span">Location:</span>

                                        <p class="mb-0">National Center, NYC</p>
                                    </div>

                                    <div class="d-flex flex-wrap align-items-center">
                                        <span class="custom-block-span">Ticket:</span>

                                        <p class="mb-0">$250</p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center ms-lg-auto">
                                    <a href="event-detail.html" class="btn custom-btn">Buy Ticket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row custom-block custom-block-bg">
                    <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                        <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                            <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">28</h6>
                            
                            <strong class="text-white">Feb 2048</strong>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                        <div class="custom-block-image-wrap">
                            <a href="event-detail.html">
                                <img src="images/girl-taking-selfie-with-friends-golf-field.jpg" class="custom-block-image img-fluid" alt="">

                                <i class="custom-block-icon bi-link"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 order-3 order-lg-0">
                        <div class="custom-block-info mt-2 mt-lg-0">
                            <a href="event-detail.html" class="events-title mb-3">Group tournament activities</a>

                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                            <div class="d-flex flex-wrap border-top mt-4 pt-3">

                                <div class="mb-4 mb-lg-0">
                                    <div class="d-flex flex-wrap align-items-center mb-1">
                                        <span class="custom-block-span">Location:</span>

                                        <p class="mb-0">National Center, NYC</p>
                                    </div>

                                    <div class="d-flex flex-wrap align-items-center">
                                        <span class="custom-block-span">Ticket:</span>

                                        <p class="mb-0">$350</p>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center ms-lg-auto">
                                    <a href="event-detail.html" class="btn custom-btn">Buy Ticket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="contact-section section-padding" id="section_5">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-12">
                    <form action="#" method="post" class="custom-form contact-form" role="form">
                        <h2 class="mb-4 pb-2">Contact Tiya</h2>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <input type="text" name="full-name" id="full-name" class="form-control" placeholder="Full Name" required="">
                                    
                                    <label for="floatingInput">Full Name</label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12"> 
                                <div class="form-floating">
                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                                    
                                    <label for="floatingInput">Email address</label>
                                </div>
                            </div>

                            <div class="col-lg-12 col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" name="message" placeholder="Describe message here"></textarea>
                                    
                                    <label for="floatingTextarea">Message</label>
                                </div>

                                <button type="submit" class="form-control">Submit Form</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="contact-info mt-5">
                        <div class="contact-info-item">
                            <div class="contact-info-body">
                                <strong>London, United Kingdom</strong>

                                <p class="mt-2 mb-1">
                                    <a href="tel: 010-020-0340" class="contact-link">
                                        (020) 
                                        010-020-0340
                                    </a>
                                </p>

                                <p class="mb-0">
                                    <a href="mailto:info@company.com" class="contact-link">
                                        info@company.com
                                    </a>
                                </p>
                            </div>

                            <div class="contact-info-footer">
                                <a href="#">Directions</a>
                            </div>
                        </div>

                        <img src="images/WorldMap.svg" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-app-layout>