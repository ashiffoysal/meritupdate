        <footer class="footer_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer">
                            <div class="footer_contents">
                                <div class="footer_left">
                                    <a href="#"><img src="{{ asset('frontend/update-design') }}/assets/images/home/logo.png" alt=""></a>
                                    <p>Merit Tutors are East London’s Tuition Centre of choice. A leading provider of Primary, Secondary and A-Level Tuition since 2004, Merit Tutors take pride in the calibre of tuition provided.</p>
                                </div>
                                <div class="footer_right">
                                    <div class="footer_right_single">
                                        <p>FOREST GATE BRANCH</p>
                                        <ul>
                                            <li><a href="#"><span><i class="fa-solid fa-location-dot"></i></span>54 Upton Lane London E7 9LN</a></li>
                                            <li><a href="tel: 0208 616 2526"><span><i class="fa-solid fa-mobile-screen"></i></span>0208 616 2526</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer_right_single">
                                        <p>ILFORD BRANCH</p>
                                        <ul>
                                            <li><a href="#"><span><i class="fa-solid fa-location-dot"></i></span>269 Ilford Lane Ilford IG1 2SD</a></li>
                                            <li><a href="tel: 0208 616 2526"><span><i class="fa-solid fa-mobile-screen"></i></span>0208 478 9988</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer_right_single">
                                        <p>PLAISTOW BRANCH</p>
                                        <ul>
                                            <li><a href="#"><span><i class="fa-solid fa-location-dot"></i></span>2-4 Cumberland Road London E13 8NH</a></li>
                                            <li><a href="tel: 0208 616 2526"><span><i class="fa-solid fa-mobile-screen"></i></span>0208 157 9926</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="footer_copyright">
                                <a href="mailto:{{ $companyInformation->email }}"><img src="{{ asset('frontend/update-design') }}/assets/images/home/social-icon6.png" alt="">{{ $companyInformation->email }}</a>
                                <p>Copyright © {{ now()->year }} {{ $companyInformation->company_name }}. All Rights Reserved by {{ $companyInformation->company_name }}</p>
                                <ul>
                                    <li><a href="{{ $social->facebook }}"><img src="{{ asset('frontend/update-design') }}/assets/images/home/social-icon1.png" alt=""></a></li>
                                    <li><a href=" {{ $social->instagram }}"><img src="{{ asset('frontend/update-design') }}/assets/images/home/social-icon2.png" alt=""></a></li>
                                    <li><a href="{{ $social->twitter }}"><img src="{{ asset('frontend/update-design') }}/assets/images/home/social-icon3.png" alt=""></a></li>
                                    <li><a href="{{ $social->youtube }}"><img src="{{ asset('frontend/update-design') }}/assets/images/home/social-icon4.png" alt=""></a></li>
                                    <li><a href="{{ $social->linkend }}"><img src="{{ asset('frontend/update-design') }}/assets/images/home/social-icon5.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>