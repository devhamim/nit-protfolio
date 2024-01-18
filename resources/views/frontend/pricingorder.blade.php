@extends('frontend.layout.app')
@section('content')
  <!--====== PAGE TITLE  PART START ======-->

  <div class="page-title-area">
    <div class="section__bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-content text-center">
                    <h3 class="title">Order</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Order</li>
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="contact-us-box">
                    <h3 class="title">Order</h3>
                    <p></p>
					<form method="POST" action="{{ route('orderpricing.store') }}">
						@csrf
                        <div class="row no-gutters">
                            <div class="col-lg-6">
                                <div class="input-box mt-10">
                                    <input name="name" style="border: 1px solid #585656; border-radius: 5px;" value="{{ old('name') }}" type="text" placeholder="Your name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box mt-10">
                                    <input name="email" style="border: 1px solid #585656; border-radius: 5px" value="{{ old('email') }}" type="email" placeholder="Email address">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box mt-10">
                                    <input name="phone" style="border: 1px solid #585656; border-radius: 5px" value="{{ old('phone') }}" type="text" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-box mt-10">
                                    <input name="subject" style="border: 1px solid #585656; border-radius: 5px" value="{{ old('subject') }}" type="text" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-box mt-10">
                                    <textarea name="message" style="border: 1px solid #585656; border-radius: 5px" id="#" cols="30" rows="10" placeholder="write message">{{ old('message') }}</textarea>
                                </div>

                                <div class="input-box">
                                    <input type="hidden" name="pricing_id" value="{{ $pricings->first()->id }}">
                                    <p>After Submit this form our team will contact you shortly</p>
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

@endsection
