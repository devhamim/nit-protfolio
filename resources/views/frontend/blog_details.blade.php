@extends('frontend.layout.app')

@section('content')

    <!--====== PAGE TITLE  PART START ======-->

    <div class="page-title-area page-title-2-area">
        <div class="section__bg"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="page-title-content page-title-content-2 text-center">
                        <h3 class="title">The Most Impressive Copywriting Results</h3>
                        <div class="info">
                            <img src="assets/images/page-info.png" alt="">
                            <h5 class="title">Subash Chandra</h5>
                            <span>Co-author</span>
                        </div>
                        <div class="scroll-to-down">
                            <a href="#"><i class="fal fa-arrow-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PAGE TITLE  PART ENDS ======-->

    <!--====== SINGLE POST PART START ======-->

    <section class="single-post-area pt-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="single-post-content mt-30">
                        <div class="single-post-topbar">
                            <ul>
                                <li><img src="assets/images/icon/post-icon-1.png" alt="">{{ $latest_blogs->first()->created_at->format('d-M-Y') }}</li>
                                
                            </ul>
                            <div class="social">
                                {{-- <ul>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fal fa-bookmark"></i></a></li>
                                    <li><a href="#"><i class="fas fa-ellipsis-v"></i></a></li>
                                </ul> --}}
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="text mt-30">
                                <h3>{{ $blogs->first()->title }}.</h3>
                            </div>
                        </div>
                        <div class="post-thumb pt-60 pb-30">
                            <img src="{{ asset('uploads/blog') }}/{{ $blogs->first()->image }}" alt="">
                        </div>

                        <div class="post-content">
                            <div class="text mt-30">
                                <p>{!! $blogs->first()->description !!}</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="single-post-sidebar mt-30">

                        <div class="sidebar-post mt-30">
                            <h4 class="title">Popular post</h4>
                            <div class="post-items">
                                @foreach ($latest_blogs->take(6) as $latest)
                                <div class="item mt-30">
                                    <div class="thumb">
                                        <img src="{{ asset('uploads/blog') }}/{{ $latest->image }}" alt="">
                                    </div>
                                    <div class="content">
                                        <a href="{{ route('our.blog.details', $latest->slug) }}"><h6 class="title">{{ $latest->title }}</h6></a>
                                        <span>{{ $latest->created_at->format('d-M-Y') }}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== SINGLE POST PART ENDS ======-->

    <!--====== ARTICLE POST PART START ======-->

    {{-- <section class="article-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="article-post-title text-center">
                        <h3 class="title">Related Articles</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="article-2-item article-post-item mt-30">
                        <div class="article-thumb">
                            <img src="assets/images/article-4.png" alt="">
                        </div>
                        <div class="article-content">
                            <div class="date">
                                <div class="item">
                                    <h5 class="title">23</h5>
                                    <span>JUN</span>
                                </div>
                                <span>Financial</span>
                            </div>
                            <h3 class="title"><a href="#">The Start-Up Ultimate Guide to Make Press Journal.</a></h3>
                            <a href="#">
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
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="article-2-item article-post-item mt-30">
                        <div class="article-thumb">
                            <img src="assets/images/article-5.png" alt="">
                        </div>
                        <div class="article-content">
                            <div class="date">
                                <div class="item">
                                    <h5 class="title">23</h5>
                                    <span>JUN</span>
                                </div>
                                <span>Financial</span>
                            </div>
                            <h3 class="title"><a href="#">YOUR SMALL BUSINESS Success Form MARKETING</a></h3>
                            <a href="#">
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
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="article-2-item article-post-item mt-30 item-3">
                        <div class="article-thumb">
                            <img src="assets/images/article-6.png" alt="">
                        </div>
                        <div class="article-content">
                            <div class="date">
                                <div class="item">
                                    <h5 class="title">23</h5>
                                    <span>JUN</span>
                                </div>
                                <span>Financial</span>
                            </div>
                            <h3 class="title"><a href="#">The clear difference between cold brew and iced coffee</a></h3>
                            <a href="#">
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
            </div>
        </div>
    </section> --}}

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
                        <form name="contact_form" class="" action="{{ route('blog.comment') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-box mt-30">
                                        <input name="name" type="text" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-box mt-30">
                                        <input name="email" type="email" placeholder="Email address">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-box mt-30">
                                        <textarea name="message" id="#" cols="30" rows="10" placeholder="Tell us about your opinion…"></textarea>

                                        <input name="blogs_id" class="form-control" type="hidden" value="{{ $blogs->first()->id }}" />
                                        <button type="submit" class="main-btn mt-20">POST OPINION</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="post-news">
                        <div class="post-news-title">
                            <h3 class="title">Comment ({{ $blog_comment_count }})</h3>
                        </div>
                        <div class="post-news-items">
                            @foreach ($blog_comment->take(10) as $comment)
                            <div class="item mt-20">
                                <span>{{ $comment->name }}</span>
                                <p>{{ $comment->message }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== POST FORM PART ENDS ======-->

@endsection
