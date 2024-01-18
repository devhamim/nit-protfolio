<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-top d-block d-sm-flex  justify-content-between align-items-center">
                    <div class="footer-logo">
                        <a href="{{ url('/') }}"><img width="120px" src="{{ asset('uploads/setting') }}/{{ $setting->first()->footer_logo }}" alt=""></a>
                    </div>
                    <div class="footer-social">
                        <ul>
                            <li><a href="{{ $setting->first()->twitter }}"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="{{ $setting->first()->facebook }}"><span class="fab fa-facebook-square"></span></a></li>
                                <li><a href="{{ $setting->first()->linkedin }}"><span class="fab fa-linkedin"></span></a></li>
                                <li><a href="{{ $setting->first()->instagram }}"><span class="fab fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-item">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-about mt-30">
                        <h4 class="title">About</h4>
                        @if($setting->first()->about != null)
                            <p>{{ $setting->first()->about }}</p>
                        @endif
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-list mt-30">
                        <h4 class="title">Pages</h4>
                        <ul>
                            <li><a href="{{ route('about_us') }}">About us</a></li>
                            <li><a href="{{ route('our.privacy.policy') }}">Privacy policy</a></li>
                            <li><a href="{{ route('our.blog') }}">Blog</a></li>
                            <li><a href="{{ route('contect') }}">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-list mt-30 ml-95">
                        <h4 class="title">Map</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58374.97201438418!2d90.32687634863281!3d23.874162199999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8a7c28d7987a3ff%3A0x8924aaae85338532!2sAmaizing%20IT!5e0!3m2!1sen!2sbd!4v1699989162458!5m2!1sen!2sbd" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-info mt-30">
                        <h3 class="title">Contect</h3>
                        <ul>
                            @if($setting->first()->address != null)
                                <li><i class="fal fa-map-marker-alt"></i>{{ $setting->first()->address }} </li>
                            @endif
                            @if($setting->first()->number != null)
                                <li><i class="fal fa-phone"></i>{{ $setting->first()->number }} </li>
                            @endif
                            @if($setting->first()->email != null)
                                <li><i class="fal fa-envelope"></i>{{ $setting->first()->email }}</li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-copyright">
                    @if($setting->first()->footer != null)
                        <p>{{ $setting->first()->footer }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>
