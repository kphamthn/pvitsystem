<x-web-layout>
    <section class="wt-section">
        <div class="container">
            <div class="row justify-content-md-center pb-lg-4 mb-lg-5 mb-4">
                <div class="col-md-8 w-md-50 mx-auto mb-0 ">
                    <h2 class="mb-md-2">{{ __('home.aboutus') }}</h2>
                    <div class="row" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="50">
                        <div class="col-sm-4 col-xs-12">
                            <img src="{{ asset('img/about-us.jpg')}}" class="fit-img" alt="Phuong Vu Systeme">
                        </div>
                        <div class="col-sm-8 col-xs-12">
                            {!! __('about.about_descr') !!}
                        </div>
                    </div>


                </div>
            </div> 

        </div>
    </section>


</x-web-layout>