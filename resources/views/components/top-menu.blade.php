<div class="hidden-xs hidden-sm nav-top bg-primary py-2">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="nav-top-contact">
                    <!-- Social links -->
                    <ul class="list-inline text-center text-md-left mb-0">
                        <li class="list-inline-item mx-2" ><i class="fa fa-phone"></i> <a href="https://api.whatsapp.com/send?phone=01633934930">(+49)0163 / 3934930</a> </li>
                        <li class="list-inline-item mx-2" ><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:pvsytem.de@gmail.com">pvsytem.de@gmail.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 text-right">
                <ul class="list-inline text-center text-md-right mb-0">
<!--                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Facebook">
                        <a target="_blank" href="https://www.facebook.com">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Instagram">
                        <a target="_blank" href="https://www.instagram.com">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Twitter">
                        <a target="_blank" href="https://twitter.com">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Dribbble">
                        <a target="_blank" href="https://dribbble.com">
                            <i class="fab fa-dribbble"></i>
                        </a>
                    </li>-->
                    <li class="list-inline-item mx-2" style='margin-left: 20px;'>
                       {{ __('home.language') }}
                    </li>
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Vietnamese">
                        <a href='{{ route('setlocale', ['locale'=>'vi'])}}'><img src='{{ asset('img/vi.svg') }}' width="20"></a>
                    </li>
                    <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Deutsch">
                        <a href='{{ route('setlocale', ['locale'=>'de'])}}'><img src='{{ asset('img/de.svg') }}' width="20"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>