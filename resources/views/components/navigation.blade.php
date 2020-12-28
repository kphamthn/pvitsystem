<header class="main-header"> 
    <div class="container">
        <div class="logo">
            <a href="{{ route('home')}}">
                <h2>Phuong Vu Systeme</h2>
            </a>
        </div> 
        <!-- Navbar --> 
        <nav class="mainNav">
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <h3>Menu</h3>
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                <li>
                    <a href="{{ route('home') }}" @if(Route::current()->getName() == 'home') class="active" @endif> 
                        <span class="title">{{ __('home.homepage') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('aboutme') }}" @if(Route::current()->getName() == 'aboutme') class="active" @endif> 
                        <span class="title">{{ __('home.aboutus') }}</span>
                    </a>
                </li>
               
                <li>
                    <a href="{{ route('service') }}" @if(Route::current()->getName() == 'service') class="active" @endif> 
                        <span class="title">{{ __('home.production') }}</span>
                    </a>
                </li>
                <li class="last ">
                    <a href="{{ route('contact') }}" @if(Route::current()->getName() == 'contact') class="active" @endif> 
                        <span class="title">{{ __('home.contact') }}</span>
                    </a>
                </li>
            </ul>
        </nav>   
    </div>
</header>