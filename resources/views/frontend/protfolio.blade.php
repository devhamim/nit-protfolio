@extends('frontend.layout.app')

@section('content')
   <!--====== PAGE TITLE  PART START ======-->

   <div class="page-title-area">
    <div class="section__bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-content text-center">
                    <h3 class="title">Portfolio</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                        </ol>
                    </nav>
                    <div class="scroll-to-down">
                        <a href="#portfolio-scroll"><i class="fal fa-arrow-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PAGE TITLE  PART ENDS ======-->

<!--====== PORTFOLIO STYLE 4 PART START ======-->

<section class="portfolio-style-4-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-9">
                <div class="section-title text-center">
                    <h3 class="title">Our Portfolio</h3>
                    <div class="project-menu">
                        <ul>
                            <li data-filter="*" class="active">All</li>
                            @foreach ($features as $feature)
                                <li data-filter=".{{ $feature->id }}">{{ $feature->name }}</li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row grid">
            @foreach ($portfolios as $portfolio)
            <div class="col-lg-4 col-md-6 {{ $portfolio->feature_id }}">
                <div class="portfolio-style-4-item mt-30">
                    <div class="portfolio-thumb">
                        <img src="{{ asset('uploads/portfolio') }}/{{ $portfolio->image }}" alt="">
                        <a href="{{ route('details.portfolio', $portfolio->id) }}">See details <span><img src="assets/images/icon/portfolio-arrow-2.png" alt=""></span></a>
                    </div>
                    <div class="portfolio-content">
                        <h5 class="title">{{ $portfolio->name }}</h5>
                        <span>{{ $portfolio->title }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!--====== PORTFOLIO STYLE 4 PART ENDS ======-->

@endsection
