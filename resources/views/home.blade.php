<x-web-layout>
    <section class="wt-section hero-large position-relative overflow-hidden mt-md-2"> 
        <div class="hero-img bg-overlay" data-overlay="0" style="background-image: url({{ asset('img/banner.jpg') }});" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="50"></div>
        <div class="container">
            <div class="row align-items-center my-5">
                <div class="col-md-6 py-5" data-aos="fade-left" data-aos-easing="linear" data-aos-delay="100">
                    <!-- heading -->
                    <h1 class="text-uppercase mb-3 display-4 font-weight-bolder white-text">
                        {{ __('home.page_title') }}
                    </h1>
                    <p class="mb-4 h5 white-text">{{ __('home.page_short_descr') }}</p> 
                    <div class=" mb-0">
                        <a href="#" class="btn btn-pill btn-primary mr-3 mb-md-0 mb-3">
                            {{ __('home.more_about_me') }}
                        </a>
                    </div>
                </div> 
            </div>
        </div>
    </section>  
    <!-- End Header -->

    <main role="main"> 
        <section class="wt-section">
            <div class="container">
                <div class="row justify-content-md-center text-center pb-lg-4 mb-lg-5 mb-4">
                    <div class="col-md-8 text-center w-md-50 mx-auto mb-0 ">
                        <h2 class="mb-md-2">{{ __('home.my_services') }}</h2>
                        <p class="lead text-muted">{{ __('home.my_services_descr') }}
                        </p>
                    </div>
                </div> 
                <div class="row">  
                    <div class="col-md-4">
                        <div class="bg-white p-4 mb-4 text-center border rounded-md py-5" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="50">
                            <div class="mb-4"><img src="{{ asset('assets/img/services/3.svg') }}" width="80px" alt=""/></div> 
                            <h5 class="mb-2">{{ __('home.websites') }}</h5>
                            <p class="text-muted">{{ __('home.webseite_descr') }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-white p-4 mb-4 text-center border rounded-md py-5" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="150">
                            <div class="mb-4"><img src="{{ asset('assets/img/services/3.svg') }}" width="80px" alt=""/></div> 
                            <h5 class="mb-2">{{ __('home.e_commerce') }}</h5>
                            <p class="text-muted">{{ __('home.e_commerce_descr') }}</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="bg-white p-4 mb-4 text-center border rounded-md py-5" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="200">
                            <div class="mb-4"><img src="{{ asset('') }}assets/img/services/3.svg" width="80px" alt=""/></div> 
                            <h5 class="mb-2">{{ __('home.other_systems') }}</h5>
                            <p class="text-muted">{{ __('home.other_systems_descr') }}</p>
                        </div>
                    </div>
                </div>  
            </div>
        </section>

        
        <section class="wt-section bg-light">
            <div class="container">
                <header class="text-center w-md-50 mx-auto mb-5">
                    <h2 class="h1 mb-0">{{__('home.customers_say')}}</h2>
                </header>

                <div class="js-clients wt-clients mb-4" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="50">
                    <div>
                        <img class="wt-clients__image" src="{{ asset('assets/img/clients/img1.png') }}" alt="Image Description">
                    </div> 
                    <div>
                        <img class="wt-clients__image" src="{{ asset('assets/img/clients/img4.png') }}" alt="Image Description">
                    </div>
                    <div>
                        <img class="wt-clients__image" src="{{ asset('assets/img/clients/img2.png') }}" alt="Image Description">
                    </div>
                    <div>
                        <img class="wt-clients__image" src="{{ asset('assets/img/clients/img3.png') }}" alt="Image Description">
                    </div>
                    <div>
                        <img class="wt-clients__image" src="{{ asset('assets/img/clients/img7.png') }}" alt="Image Description">
                    </div>           
                    <div>
                        <img class="wt-clients__image" src="{{ asset('assets/img/clients/img5.png') }}" alt="Image Description">
                    </div>
                    <div>
                        <img class="wt-clients__image" src="{{ asset('assets/img/clients/img6.png') }}" alt="Image Description">
                    </div>
                    <div>
                        <img class="wt-clients__image" src="{{ asset('assets/img/clients/img8.png') }}" alt="Image Description">
                    </div>
                </div>
            </div>
        </section> 
    </main>


</x-web-layout>
