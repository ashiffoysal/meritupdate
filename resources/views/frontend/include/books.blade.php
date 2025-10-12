        <section class="our_featured_products_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="our_featured_products">
                            <div class="default_title default_title2">
                                <div class="default_title_left">
                                    <h2>Our <span>Featured <img src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos2.png" alt=""></span><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left2.png" alt=""> <br>Products</h2>
                                </div>
                                <div class="default_tite_right">
                                    <p>See a selection of our high-quality GCSE, A Level, AS Level products and Year 10 & Year 11 Mathematics booklets. All materials are designed by experienced educators to align with UK curriculum standards.</p>
                                    <div class="dtr_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right2.png" alt=""></div>
                                </div>
                            </div>
                            <div class="our_featured_products_contents owl-carousel owl-theme">
                                @foreach ($allResources as $resources)
                                    
                              
                                <div class="our_featured_products_single">
                                    <img src="{{ asset('updatecore/public/'.$resources->thumbnail_image) }}" alt="">
                                    <p>{{ $resources->title }}</p>
                                    <h4>£ {{ $resources->price }} </h4>
                                    <a href="{{$resources->purchase_link}}">View Product</a>
                                    {{-- <div class="our_product_off"><p>15% OFF</p></div> --}}
                                </div>
                              @endforeach
                            </div>
                            <div class="our_featured_products_btn"><a target="__blank" href="https://www.amazon.co.uk/stores/Merit-Tutors/author/B0C4LT58DW?ref=sr_ntt_srch_lnk_2&qid=1753074854&sr=8-2&isDramIntegrated=true&shoppingPortalEnabled=true" class="btn_style btn_style2">View All</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section_shape3"><img src="{{ asset('frontend/update-design') }}/assets/images/home/section-shape3.png" alt=""></div>
            <div class="section_shape4"><img src="{{ asset('frontend/update-design') }}/assets/images/home/section-shape4.png" alt=""></div>
        </section>