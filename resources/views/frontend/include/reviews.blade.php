        <section class="parent_say_about_us_main">
            <div class="parent_say_about_us">
                <div class="default_title_2nd">
                    <h2>What Pa<span>rents Say<img src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos2.png" alt=""></span> About Us</h2>
                    <p>Hear from our satisfied families about how Merit Tutors has transformed their learning experience and helped achieve remarkable results.</p>
                </div>
                <div class="parent_say_about_us_contents owl-carousel owl-theme">
                    @php
                        $allReviews=DB::table('reviews')->get();
                        
                    @endphp
                @foreach ($allReviews as $reviews)
                    <div class="psau_content_single">
                        <div class="psauc_single_top">
                            <img src="{{ asset('frontend/update-design') }}/assets/images/home/star.png" alt="">
                            <p>{{ $reviews->review }}</p>
                        </div>
                        <div class="psauc_single_profile">
                            <div class="psaucs_profile_img">
                                {{-- <img src="{{ asset('frontend/update-design') }}/assets/images/home/profile1.png" alt=""> --}}
                            </div>
                            <div class="psaucs_profile_title">
                                <p>{{ 	$reviews->name }}</p>
                                <span>{{ $reviews->designation }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                    
                </div>
                <div class="parent_say_about_us_btn"><a href="#" class="btn_style3">View All</a></div>
            </div>
            <div class="section_shape"><img src="{{ asset('frontend/update-design') }}/assets/images/home/section-shape.png" alt=""></div>
            <div class="section_shape2"><img src="{{ asset('frontend/update-design') }}/assets/images/home/section-shape2.png" alt=""></div>
        </section>
        <!--================  End (What Parents Say About Us) Section  ================-->

        <!--================  Start (Stories & Feedback) Section  ================-->
        {{--
        <section class="stories_feedback_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="stories_feedback">
                            <div class="default_title">
                                <div class="default_title_left">
                                    <h2>Hear <span>Real Life <img src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos.png" alt=""></span><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left.png" alt=""><br>Stories & Feedback</h2>
                                </div>
                                <div class="default_tite_right">
                                    <p>Explore heartfelt video testimonials from our happy parents and thriving students who have experienced the benefits of our program firsthand.</p>
                                    <div class="dtr_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right.png" alt=""></div>
                                </div>
                            </div>
                            <div class="feedback_carousel owl-carousel owl-theme">
                                <div class="feedback_carousel_single">
                                    <div class="video_wrapper">
                                        <video class="feedback_carousel_video">
                                            <source src="{{ asset('frontend/update-design') }}/assets/images/home/video.mp4" type="video/mp4">
                                        </video>
                                        <div class="play_icon"><i class="fa-solid fa-play"></i></div>
                                    </div>
                                    <!-- <div class="feedback_carousel_contents">
                                        <p>Muhamad Nauval Azhar</p>
                                        <span>Parent</span>
                                    </div> -->
                                </div>
                                <div class="feedback_carousel_single">
                                    <div class="video_wrapper">
                                        <video class="feedback_carousel_video">
                                            <source src="{{ asset('frontend/update-design') }}/assets/images/home/video2.mp4" type="video/mp4">
                                        </video>
                                        <div class="play_icon"><i class="fa-solid fa-play"></i></div>
                                    </div>
                                </div>
                                <div class="feedback_carousel_single">
                                    <div class="video_wrapper">
                                        <video class="feedback_carousel_video">
                                            <source src="{{ asset('frontend/update-design') }}/assets/images/home/video1.mp4" type="video/mp4">
                                        </video>
                                        <div class="play_icon"><i class="fa-solid fa-play"></i></div>
                                    </div>
                                </div>
                                <div class="feedback_carousel_single">
                                    <div class="video_wrapper">
                                        <video class="feedback_carousel_video">
                                            <source src="{{ asset('frontend/update-design') }}/assets/images/home/video3.mp4" type="video/mp4">
                                        </video>
                                        <div class="play_icon"><i class="fa-solid fa-play"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
          --}}