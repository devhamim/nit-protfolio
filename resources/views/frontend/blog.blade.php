@extends('frontend.layout.app')

@section('content')
	<!--====== PAGE TITLE  PART START ======-->

    <div class="page-title-area">
        <div class="section__bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-content text-center">
                        <h3 class="title">Blog</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog</li>
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

    <!--====== ARTICAL PART START ======-->

    <section class="article-page-area pt-70 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="article-2-item mt-30">
                        <div class="article-thumb">
                            <img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" alt="">
                        </div>
                        <div class="article-content">
                            <div class="date">
                                <div class="item">
                                    <h5 class="title">{{ $blog->created_at->format('d,M,Y') }}</h5>
                                </div>
                            </div>
                            <h3 class="title"><a href="{{ route('our.blog.details', $blog->slug) }}">{{ $blog->title }}</a></h3>
                            <a href="{{ route('our.blog.details', $blog->slug) }}">
                                Learn more
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10.196" height="12.663" viewBox="0 0 10.196 12.663">
                                      <path data-name="Path 18155" d="M32.324,974.539,28.2,978.448a.731.731,0,0,0-.052.947.678.678,0,0,0,.948,0l3.027-2.864v9.346a.652.652,0,1,0,1.3,0v-9.346l3.027,2.864a.664.664,0,0,0,.948,0,.714.714,0,0,0-.052-.947l-4.126-3.909A.661.661,0,0,0,32.324,974.539Z" transform="translate(-27.676 -974.112)" fill="#fff" stroke="#fff" stroke-width="0.5"></path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!--====== ARTICAL PART ENDS ======-->

@endsection
