<header class="header-area">
    <div class="header-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="navigation">
                        <nav class="navbar navbar-expand-lg navbar-light ">
                            @if($setting->first()->logo != null)
                                <a class="navbar-brand" href="{{ url('/') }}"><img width="120px" src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt=""></a> <!-- logo -->
                            @endif

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button> <!-- navbar toggler -->

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('about_us') }}">About </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('services') }}">Service </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('our.pricing') }}">Pricing </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('our.portfolio') }}">portfolio </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('our.blog') }}">Blog </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('contect') }}">Contact</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->

                            {{-- <div class="navbar-btn d-none d-sm-block">
                                <a class="main-btn" href="#">Get Started</a>
                            </div> --}}
                        </nav>
                    </div> <!-- navigation -->
                </div>
            </div> <!-- row -->
        </div>
    </div>
</header>
