@extends('frontend.layout.app')

@section('content')
  <!--====== PAGE TITLE  PART START ======-->

  <div class="page-title-area page-title-2-area">
    <div class="section__bg"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="page-title-content page-title-content-2 text-center">
                    <h3 class="title">{{ $features->first()->name }}</h3>
                    <nav class="pb-15" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                            <li class="breadcrumb-item active" aria-current="page">Details</li>
                        </ol>
                    </nav>
                    <div class="scroll-to-down">
                        <a href="#"><i class="fal fa-arrow-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PAGE TITLE  PART ENDS ======-->

<!--====== PORTFOLIO DETAILS PART START ======-->

<section class="portfolio-details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-details-top">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="portfolio-details-top-title mt-30">
                                <h3 class="title">{{ $portfolios->first()->title }}</h3>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="portfolio-details-category">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="portfolio-details-category-thumb mt-30">
                                <img src="{{ asset('uploads/portfolio') }}/{{ $portfolios->first()->image }}" alt="">
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="portfolio-details-category-list mt-30">
                                <div class="item">
                                    <span>Project Name:</span>
                                    <h4 class="title">{{ $portfolios->first()->name }}</h4>
                                </div>
                                <div class="item">
                                    <span>Client:</span>
                                    <h4 class="title">{{ $portfolios->first()->client }}</h4>
                                </div>
                                <div class="item">
                                    <span>Delevary Date:</span>
                                    <h4 class="title">{{ $portfolios->first()->date }}</h4>
                                </div>
                                <div class="item">
                                    <span>Price:</span>
                                    <h4 class="title">{{ $portfolios->first()->value }}</h4>
                                </div>
                                <div class="item">
                                    <span>Live Link:</span>
                                    <h4 class="title">{{ $portfolios->first()->link }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-details-content mt-65">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text">
                                <p><p>{!! $portfolios->first()->description !!}</p></p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
{{--
<div class="client-area">
    <div class="section__bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="client-slide">
                    <div class="item">
                        <img src="assets/images/icon/quote-icon.png" alt="">
                        <div class="content">
                            <p>I must explain to you how all this mistake idea denouncing pleasure & praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                            <div class="info">
                                <img src="assets/images/post-news-1.png" alt="">
                                <h5 class="title">Subash Chandra</h5>
                                <span>Founder at Seative Digital</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/icon/quote-icon.png" alt="">
                        <div class="content">
                            <p>I must explain to you how all this mistake idea denouncing pleasure & praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                            <div class="info">
                                <img src="assets/images/post-news-1.png" alt="">
                                <h5 class="title">Subash Chandra</h5>
                                <span>Founder at Seative Digital</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/icon/quote-icon.png" alt="">
                        <div class="content">
                            <p>I must explain to you how all this mistake idea denouncing pleasure & praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                            <div class="info">
                                <img src="assets/images/post-news-1.png" alt="">
                                <h5 class="title">Subash Chandra</h5>
                                <span>Founder at Seative Digital</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/icon/quote-icon.png" alt="">
                        <div class="content">
                            <p>I must explain to you how all this mistake idea denouncing pleasure & praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                            <div class="info">
                                <img src="assets/images/post-news-1.png" alt="">
                                <h5 class="title">Subash Chandra</h5>
                                <span>Founder at Seative Digital</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/icon/quote-icon.png" alt="">
                        <div class="content">
                            <p>I must explain to you how all this mistake idea denouncing pleasure & praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                            <div class="info">
                                <img src="assets/images/post-news-1.png" alt="">
                                <h5 class="title">Subash Chandra</h5>
                                <span>Founder at Seative Digital</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/images/icon/quote-icon.png" alt="">
                        <div class="content">
                            <p>I must explain to you how all this mistake idea denouncing pleasure & praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
                            <div class="info">
                                <img src="assets/images/post-news-1.png" alt="">
                                <h5 class="title">Subash Chandra</h5>
                                <span>Founder at Seative Digital</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="portfolio-details-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-details-content mt-65">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="text">
                                <p>New York saw its highest single-day increase in deaths, up 562 to 2,935 - nearly half of all virus-related US deaths recorded yesterday. The White House may advise those in virus hotspots to wear face coverings in public to help stem the spread mid deepening crisis, top health official   Dr Anthony Fauci   has said he believes all states should issue stay-at-home orders.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text">
                                <p>I don’t understand why that’s not happening,” Dr Fauci told CNN on Thursday. “If you look at what’s going on in this country, I just don’t understand why we’re not doing that.”</p>
                            </div>
                            <div class="text pt-15">
                                <p>You’ve got to put your foot on the accelerator to bring that number down,” he added, referring to infection and death rates.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="post-next">
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-md-6">
                            <div class="prev-post">
                                <span>PREVIOUS NEWS</span>
                                <a href="#"><p>Kushner puts himself in middle of white house’s chaoti coronavirus response.</p></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="prev-post">
                                <span>NEXT NEWS</span>
                                <a href="#"><p>C.I.A. Hunts for authentic virus totals in china, dismissing government tallies</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PORTFOLIO DETAILS PART ENDS ======-->

<!--====== ARTICLE POST PART START ======-->

<section class="article-post-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="article-post-title text-center">
                    <h3 class="title">Related product</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="portfolio-style-4-item mt-30">
                    <div class="portfolio-thumb">
                        <img src="assets/images/related-product-1.png" alt="">
                        <a href="#">See details <span><img src="assets/images/icon/portfolio-arrow-2.png" alt=""></span></a>
                    </div>
                    <div class="portfolio-content">
                        <h5 class="title">Graphic design vs product design vs  graphic illustration</h5>
                        <span>Illustration, Graphic Design</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="portfolio-style-4-item mt-30">
                    <div class="portfolio-thumb">
                        <img src="assets/images/related-product-2.png" alt="">
                        <a href="#">See details <span><img src="assets/images/icon/portfolio-arrow-2.png" alt=""></span></a>
                    </div>
                    <div class="portfolio-content">
                        <h5 class="title">Graphic design vs product design vs  graphic illustration</h5>
                        <span>Illustration, Graphic Design</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="portfolio-style-4-item mt-30">
                    <div class="portfolio-thumb">
                        <img src="assets/images/related-product-3.png" alt="">
                        <a href="#">See details <span><img src="assets/images/icon/portfolio-arrow-2.png" alt=""></span></a>
                    </div>
                    <div class="portfolio-content">
                        <h5 class="title">Graphic design vs product design vs  graphic illustration</h5>
                        <span>Illustration, Graphic Design</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== ARTICLE POST PART ENDS ======-->

<!--====== POST FORM PART START ======-->

<div class="post-form-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="post-form-title">
                    <h3 class="title">Leave an opinion</h3>
                </div>
                <div class="post-form-item">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-box mt-30">
                                    <input type="text" placeholder="Full name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box mt-30">
                                    <input type="email" placeholder="Email address">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-box mt-30">
                                    <textarea name="#" id="#" cols="30" rows="10" placeholder="Tell us about your opinion…"></textarea>
                                    <button type="submit" class="main-btn mt-20">POST OPINION</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="post-news">
                    <div class="post-news-title">
                        <h3 class="title">Our latest news</h3>
                    </div>
                    <div class="post-news-items">
                        <div class="item mt-20">
                            <img src="assets/images/post-news-1.png" alt="">
                            <span>Subash Chandra</span>
                            <p>We’ve invested every aspect of how we serve our users over the past Pellenesque rutrum ante in nulla suscipit, vel posuere leo tristique.</p>
                            <a href="#">Reply</a>
                        </div>
                        <div class="item mt-20">
                            <img src="assets/images/post-news-2.png" alt="">
                            <span>Subash Chandra</span>
                            <p>We’ve invested every aspect of how we serve our users over the past Pellenesque rutrum ante in nulla suscipit, vel posuere leo tristique.</p>
                            <a href="#">Reply</a>
                        </div>
                        <div class="item mt-20 pl-30 item-2">
                            <img src="assets/images/post-news-3.png" alt="">
                            <span>Subash Chandra</span>
                            <p>We’ve invested every aspect of how we serve our users over the past Pellentesque rutrum ante in nulla suscipit, vel posuere leo tristique.</p>
                            <a href="#">Reply</a>
                        </div>
                        <div class="item mt-20 item-4">
                            <img src="assets/images/post-news-4.png" alt="">
                            <span>Subash Chandra</span>
                            <p>We’ve invested every aspect of how we serve our users over the past Pellenesque rutrum ante in nulla suscipit, vel posuere leo tristique.</p>
                            <a href="#">Reply</a>
                        </div>
                        <a class="main-btn mt-15" href="#">LOAD MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!--====== POST FORM PART ENDS ======-->
@endsection
