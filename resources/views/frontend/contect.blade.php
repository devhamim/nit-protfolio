@extends('frontend.layout.app')
@section('content')
  <!--====== PAGE TITLE  PART START ======-->

  <div class="page-title-area">
    <div class="section__bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-content text-center">
                    <h3 class="title">Contact Us</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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

<!--====== CONTACT US PART START ======-->

<section class="contact-us-area contact-us-page">
    <div class="section__bg"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="contact-us-box">
                    <h3 class="title">Get in Touch</h3>
                    <p>Give us a call or drop by anytime, we endeavour to <br> answer all enquiries within 24 hours.</p>
					<form method="POST" action="{{ route('customerMessage.store') }}">
						@csrf
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="input-box mt-10">
                                    <input name="name" value="{{ old('name') }}" type="text" placeholder="Your name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box mt-10">
                                    <input name="email" value="{{ old('email') }}" type="email" placeholder="Email address">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box mt-10">
                                    <input name="phone" value="{{ old('phone') }}" type="text" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box mt-10">
                                    <input name="subject" value="{{ old('subject') }}" type="text" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-box mt-10">
                                    <textarea name="message" id="#" cols="30" rows="10" placeholder="write message">{{ old('message') }}</textarea>
                                </div>

                                <div class="input-box">
                                    <button class="main-btn " type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== CONTACT US PART ENDS ======-->

<!--====== CONTACT US PART ENDS ======-->

<div class="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14612.962398285066!2d90.45967325!3d23.703100600000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1595237498018!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<!--====== CONTACT US PART ENDS ======-->

@endsection
