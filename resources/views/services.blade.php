<x-web-layout>
    <main role="main"> 
        <section class="wt-section" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="50">
            <div class="container">
                <div class="row justify-content-md-center pb-lg-4 mb-lg-5 mb-4">
                    <div class="col-md-8 w-md-50 mx-auto mb-0 ">
                        <h2 class="mb-md-2">{{ __('service.website') }}</h2>
                        <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                <img class="fit-img" src="{{ asset('img/website.png') }}" alt="Computer">

                            </div>
                            <div class="col-sm-8 col-xs-12">
                                <p>{!!__('service.website_descr') !!}</p>
                            </div>
                        </div>

                    </div>
                </div> 

            </div>
        </section>


        <section class="wt-section  bg-light" data-aos="fade-left" data-aos-easing="linear" data-aos-delay="200">
            <div class="container">
                <div class="row justify-content-md-center pb-lg-4 mb-lg-5 mb-4">
                    <div class="col-md-8 w-md-50 mx-auto mb-0 text-right">
                        <h2 class="mb-md-2">{{ __('service.ecommerce') }}</h2>
                        <div class="row">
                            <div class="col-sm-8 col-xs-12">
                                <p>{!!__('service.webshop_descr')!!}</p>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <img class="fit-img" src="{{ asset('img/online-shop.png') }}" alt="Computer">

                            </div>

                        </div>

                    </div>
                </div> 

            </div>
        </section>
        <section class="wt-section" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="50">
            <div class="container">
                <div class="row justify-content-md-center pb-lg-4 mb-lg-5 mb-4">
                    <div class="col-md-8 w-md-50 mx-auto mb-0 ">
                        <h2 class="mb-md-2">{{ __('service.other') }}</h2>
                        <div class="row">
                            <div class="col-sm-4 col-xs-12">
                                <img class="fit-img" src="{{ asset('img/smartphone.png') }}" alt="Computer">

                            </div>
                            <div class="col-sm-8 col-xs-12">
                                <p>{!!__('service.other_descr') !!}</p>
                            </div>
                        </div>

                    </div>
                </div> 

            </div>
        </section>
    </main>


</x-web-layout>
