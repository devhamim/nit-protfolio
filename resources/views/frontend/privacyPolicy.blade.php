@extends('frontend.layout.app')

@section('content')
<!--====== PAGE TITLE  PART START ======-->

<div class="page-title-area">
    <div class="section__bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-content text-center">
                    <h3 class="title">PrivacPolicy</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">PrivacPolicy</li>
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


<!--====== SERVICE PART START ======-->

<section class="service-area service-page-area pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <p>{!! $privacyPolicy->first()->description !!}</p>
            </div>
        </div>
    </div>
</section>

<!--====== SERVICE PART ENDS ======-->

@endsection
