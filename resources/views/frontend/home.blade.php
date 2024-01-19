@extends('frontend.layout.app')

@section('content')
<!--====== HERO PART START ======-->

@if($banners->first()->id != null)
<section class="hero-area">
    <div class="section__bg" style="background-image: url('{{ asset('uploads/banner') }}/{{ $banners->first()->image }}')"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-content">
                    <img src="{{ asset('uploads/setting') }}/{{ $banners->first()->image }}" alt="">
                    @if($banners->first()->title != null)
                    <h1 class="title animated wow fadeInLeft" data-wow-duration="3000ms" data-wow-delay="0ms">{{ $banners->first()->title }}</h1>
                    @endif
                    @if($banners->first()->description != null)
                    <span class="animated wow fadeInLeft" data-wow-duration="3000ms" data-wow-delay="300ms">{{ $banners->first()->description }}</span>
                </div>
            </div>
            {{-- <div class="col-lg-5">
                <div class="hero-play">
                    <a class="video-popup" href="https://www.youtube.com/watch?v=4NJlUribp3c&amp;list=RD4NJlUribp3c&amp;start_radio=1"><i class="fas fa-play"></i></a>
                </div>
            </div> --}}
            @endif
        </div>
    </div>
</section>
@endif

<!--====== HERO PART ENDS ======-->

<!--====== SUB ITEM PART START ======-->

<section class="sub-item-area">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($features->take(4) as $feature)
            <div class="col-lg-3 col-md-6 col-sm-8">
                <div class="sub-item">
                    <div class="icon">
                        <img src="{{ asset('uploads/feature') }}/{{ $feature->icon }}" alt="">
                    </div>
                    <h3 class="title">{{ $feature->name }}</h3>
                    <span>{{ $feature->description }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!--====== SUB ITEM PART ENDS ======-->

<!--====== ABOUT US PART START ======-->

<section class="about-us-area pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="about-content">
                    <img src="{{ asset('frontend') }}/assets/images/hero-line.png" alt="">
                    <span>{{ $abouts->first()->subtitle }}</span>
                    <h3 class="title">{{ $abouts->first()->title }} </h3>
                    <p>{!! $abouts->first()->description !!}</p>

                    <a class="main-btn" href="{{ route('about_us') }}">Learn More</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about-thumb animated wow fadeInRight" data-wow-duration="3000ms" data-wow-delay="0ms">
                    <img src="{{asset('uploads/about')}}/{{ $abouts->first()->image }}" alt="">

                </div>
            </div>
        </div>
    </div>
</section>

<!--====== ABOUT US PART ENDS ======-->

<!--====== SERVICE PART START ======-->

<section class="service-area pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-9">
                <div class="section-title text-center">
                    <img src="{{ asset('frontend') }}/assets/images/hero-line.png" alt="">
                    <h3 class="title">Our Service</h3>
                    <p>Our focus is on delivering you the absolute best support guiding you through training and providing.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($services->take(6) as $service)
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="service-item mt-30 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0ms">
                    <div class="icon">
                        <img src="{{ asset('uploads/service') }}/{{ $service->icon }}" alt="">
                    </div>
                    <h3 class="title">{{ $service->title }}</h3>
                    <p>{{ $service->sort_desp }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!--====== SERVICE PART ENDS ======-->

<!--====== PORTFOLIO PART START ======-->

<section class="portfolio-area pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-9">
                <div class="section-title text-center">
                    <img src="{{ asset('frontend') }}/assets/images/hero-line.png" alt="">
                    <h3 class="title">Our Portfolio</h3>
                    <p>Our focus is on delivering you the absolute best support guiding you through training and providing.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="row portfolio-active">
            @foreach ($portfolios as $portfolio)
            <div class="col-lg-4">
                <div class="portfolio-item mt-30">
                    <img src="{{ asset('uploads/portfolio') }}/{{ $portfolio->image }}" alt="">
                    <div class="portfolio-overlay">
                        <div class="content">
                            <img src="{{ asset('frontend') }}/assets/images/hero-line.png" alt="">
                            <a href="{{ route('details.portfolio', $portfolio->id) }}">
                                <h4 class="title">{{ $portfolio->title }}</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!--====== PORTFOLIO PART ENDS ======-->

<!--====== TESTIMONIAL PART START ======-->

<section class="testimonial-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-9">
                <div class="section-title section-title-2 text-center">
                    <img src="{{ asset('frontend') }}/assets/images/hero-line.png" alt="">
                    <h3 class="title">Customer review</h3>
                    <p>Our focus is on delivering you the absolute best support guiding you through training and providing.</p>
                </div>
            </div>
        </div>
        <div class="row testimonial-active">
            @foreach ($customerSays as $customer)
            <div class="col-lg-6">
                <div class="testimonial-item mt-30">
                    <div class="quote">
                        <svg xmlns="http://www.w3.org/2000/svg" width="53.729" height="40" viewBox="0 0 53.729 40">
                          <g data-name="Group 21" transform="translate(0 0)">
                            <path data-name="Union 1" d="M47.055,40a1.21,1.21,0,0,1-1.018-.509L31.106,19.357A12.178,12.178,0,0,1,29.07,11.1,12.364,12.364,0,1,1,45.98,23.881l6.957,14.253A1.313,1.313,0,0,1,51.806,40ZM18.1,40a1.209,1.209,0,0,1-1.018-.509L2.149,19.357A12.77,12.77,0,0,1,.056,11.043,12.395,12.395,0,1,1,17.023,23.881L23.98,38.134A1.313,1.313,0,0,1,22.849,40Z" transform="translate(0 0)"/>
                          </g>
                        </svg>
                    </div>
                    <p>{!! $customer->description !!}</p>
                    <div class="info">
                        <img width="40px" src="{{ asset('uploads/customersay') }}/{{ $customer->image }}" alt="">
                        <h5 class="title">{{ $customer->name }}</h5>
                        <span>{{ $customer->post }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!--====== TESTIMONIAL PART ENDS ======-->


<!--====== client PART START ======-->

<section class="team-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-9">
                <div class="section-title text-center">
                    <img src="assets/images/hero-line.png" alt="">
                    <h3 class="title">Our client</h3>
                    <p>Our focus is on delivering you the absolute best support guiding you through training and providing.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row team-active">
            @foreach ($clients as $client)
            <div class="col-lg-4">
                <div class="team-item mt-40 mb-100" style="box-shadow: none">
                    <img src="{{ asset('uploads/client') }}/{{ $client->image }}" alt="">
                    <div class=" d-flex align-items-end">

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!--====== client PART ENDS ======-->

<!--====== OVERVIEW PART START ======-->

<section class="overview-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="overview-content">
                    <img src="{{ asset('frontend') }}/assets/images/hero-line.png" alt="">
                    <span>overview</span>
                    <h3 class="title">Results You Can Trust Delivering IT Solutions Globally</h3>
                    <p>Triplet I award-winning interdisciplinary architectural studio cultural, residential and commercial projects built worldwide. We pride ourselves on being builders creating architectural.</p>
                    {{-- <a class="main-btn" href="#">Let’s Chat</a> --}}

                </div>
            </div>
            <div class="col-lg-6">
                <div class="overview-counter-area">
                    <div class="row">
                        @foreach ($achieves as $achieve)

                        <div class="col-lg-6 col-md-6">
                            <div class="overview-counter-item mt-10 animated wow fadeInUp" data-wow-duration="3000ms" data-wow-delay="0ms">
                                <div class="icon">
                                    <img src="{{ asset('uploads/achieve') }}/{{ $achieve->icon }}" alt="">
                                </div>
                                <h3 class="title count">{{ $achieve->total }}</h3>
                                <span>{{ $achieve->title }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== OVERVIEW PART ENDS ======-->

<!--====== Membership PART START ======-->

<section class="about-us-area pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-thumb animated wow fadeInRight" data-wow-duration="3000ms" data-wow-delay="0ms">
                    <img src="{{ asset('frontend/assets/images/hero-thumb-9.png') }}" alt="">

                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <img src="{{ asset('frontend') }}/assets/images/hero-line.png" alt="">
                    <span>Membership</span>
                    <div class="row">
                        @foreach ($memberships as $membership)
                            <div class="col-lg-3">
                                <img src="{{asset('uploads/membership')}}/{{ $membership->image }}" alt="">
                                <p>{{ $membership->title }} </p>
                            </div>
                        @endforeach
                    </div>
                    <h3 class="title mt-5">Let Us Help You With Your Project</h3>
                    <a class="main-btn" href="{{ route('contect') }}">Contect Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Membership PART ENDS ======-->

<!--====== TEAM PART START ======-->

<section class="team-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-9">
                <div class="section-title text-center">
                    <img src="{{ asset('frontend') }}/assets/images/hero-line.png" alt="">
                    <h3 class="title">Our Team</h3>
                    <p>Our focus is on delivering you the absolute best support guiding you through training and providing.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row team-active">
            @foreach ($teams as $team)
            <div class="col-lg-4">
                <div class="team-item mt-40 mb-100">
                    <img src="{{ asset('uploads/team') }}/{{ $team->image }}" alt="">
                    <div class="team-overlay d-flex align-items-end">
                        <div class="content">
                            <h4 class="title">{{ $team->name }}</h4>
                            <span>{{ $team->post }}</span>
                            <ul>
                                <li><a href="{{ $team->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ $team->linkedin }}"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="{{ $team->github }}"><i class="fab fa-github"></i></a></li>
                                <li><a href="{{ $team->instagram }}"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!--====== TEAM PART ENDS ======-->

<!--====== PRICING PART START ======-->

<section class="pricing-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-9">
                <div class="section-title section-title-2 text-center">
                    <img src="{{ asset('frontend') }}/assets/images/hero-line.png" alt="">
                    <h3 class="title">Pricing Plan</h3>
                    <p>Our focus is on delivering you the absolute best support guiding you through training and providing.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($pricings->take(3) as $pricing)
            <div class="col-lg-4 col-md-6 col-sm-9 order-1">
                <div class="pricing-item mt-30 animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="0ms">
                    <h3 class="title">${{ $pricing->price }}</h3>
                    <span>{{ $pricing->title }}</span>
                    <ul>
                        {!! $pricing->description !!}
                    </ul>
                    <a class="main-btn" href="{{ route('pricing.order', $pricing->slug) }}">Order Now</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!--====== PRICING PART ENDS ======-->

<!--====== ARTICAL PART START ======-->

<section class="article-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-9">
                <div class="section-title text-center">
                    <img src="{{ asset('frontend') }}/assets/images/hero-line.png" alt="">
                    <h3 class="title">Recent Article</h3>
                    <p>Our focus is on delivering you the absolute best support guiding you through training and providing.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6 col-sm-9">
                <div class="article-item mt-30">
                    <div class="article-top text-center">
                        <a href="{{ route('our.blog.details', $blog->slug) }}"><span>{{ $blog->title }}</span></a>
                    </div>
                    <div class="article-thumb">
                        <a href="{{ route('our.blog.details', $blog->slug) }}"><img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" alt=""></a>
                        <div class="date">
                            <h5 class="title">{{ $blog->created_at->format('d,M,Y') }}</h5>
                        </div>
                    </div>
                    <div class="article-content pl-25 pr-25 pt-25">

                        <a href="{{ route('our.blog.details', $blog->slug) }}">READ MORE</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!--====== ARTICAL PART ENDS ======-->
@endsection
