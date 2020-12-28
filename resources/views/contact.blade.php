<x-web-layout>
    <main role="main">

        <!-- Icon Block -->
        <section class="wt-section bg-light">
            <div class="container">
                <div class="row justify-content-center align-items-center text-center pb-lg-5">

                    <h2>{{__('contact.contact_title')}}</h2>

                </div>

                <div class="row justify-content-center align-items-center text-center pb-lg-5">

                    <div class="col-md-8"> 
                        <p class="text-muted">{{ __('contact.contact_hint')}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0 text-center">
                        <div class="contactIcons text-primary mb-2">
                            <i class="fa fa-location-arrow"></i>
                        </div>
                        <h3 class="h5">{{__('contact.address_short')}}</h3>
                        <p class="mb-0">Phuong Vu - Charlottenstraße 13, 90443 Nürnberg</p>
                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0 text-center">
                        <div class="contactIcons text-primary mb-2">
                            <i class="fa fa-phone"></i>
                        </div>
                        <h3 class="h5">{{__('contact.phone')}}</h3>
                        <p class="mb-0"><a href="https://api.whatsapp.com/send?phone=01633934930">(+49)0163 / 3934930</a></p>
                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0 text-center">
                        <div class="contactIcons text-primary mb-2">
                            <i class="fa fa fa-envelope"></i>
                        </div>
                        <h3 class="h5">{{__('contact.email')}}</h3>
                        <p class="mb-0"><a href="mailto:pvsytem.de@gmail.com">pvsytem.de@gmail.com</a></p>
                    </div>
                </div> 
            </div>
        </section>
        <section class="wt-section" data-aos="fade-right" data-aos-easing="linear" data-aos-delay="50">
            <div class="container">
                <div class="row justify-content-md-center pb-lg-4 mb-lg-5 mb-4">
                    <div class="col-md-8 w-md-50 mx-auto mb-0 ">
                        <h2 class="mb-md-2">{{ __('contact.contact_title') }}</h2>
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                @if (session()->has('success'))
                                <div class="alert alert-success">
                                    <ul>
                                        <span>{{ session('success') }}</span>
                                    </ul> 
                                </div>
                                @endif
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>

                                        @foreach($errors->all() as $error)
                                        <p>
                                            {{$error }}
                                        </p>
                                        @endforeach
                                    </ul> 
                                </div>
                                @endif
                                <form class="form" method="post" action="{{ route('post_contact') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="control-label">
                                            {{__('contact.gender')}}
                                        </label><br>
                                        <input type="radio" id="male" name="gender" value="male" @if(old('gender') == null || old('gender') == 'male' ) checked="checked" @endif>
                                        <label for="male">{{__('contact.male')}}</label>
                                        <input type="radio" id="female" name="gender" value="female" @if(old('gender') =='female' ) checked="checked" @endif>
                                        <label for="female">{{__('contact.female')}}</label><br>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">
                                            {{__('contact.first_name')}}
                                        </label>
                                        <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">
                                            {{__('contact.last_name')}} <span class="pflicht">*</span>
                                        </label>
                                        <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">
                                            {{__('contact.email')}} <span class="pflicht">*</span>
                                        </label>
                                        <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">
                                            {{__('contact.phone')}} 
                                        </label>
                                        <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">
                                            {{__('contact.address')}} 
                                        </label>
                                        <input type="text" name="address" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">
                                            {{__('contact.message')}} 
                                        </label>
                                        <textarea rows="10" class="form-control" name="message">{{ old('message') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="{{ __('contact.submit')}}" class="btn btn-primary">
                                    </div>
                                </form>

                            </div>

                        </div>

                    </div>
                </div> 

            </div>
        </section>
    </main>


</x-web-layout>
