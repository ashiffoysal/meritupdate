        <section class="merit_tutors_gallery_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="merit_tutors_gallery">
                            <div class="default_title default_title2 default_title3">
                                <div class="default_title_left">
                                    <h2>Merit <span>Tutors <img src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos2.png" alt=""></span><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-left2.png" alt=""> <br>Gallery</h2>
                                </div>
                                <div class="default_tite_right">
                                    <p>Take a look inside our vibrant classrooms and engaging sessions. From focused lessons to student achievements, our gallery showcases the energy, dedication, and success that define Merit Tutors.</p>
                                    <div class="dtr_img"><img src="{{ asset('frontend/update-design') }}/assets/images/home/default-title-right3.png" alt=""></div>
                                </div>
                            </div>
                            <div class="merit_tutors_gallery_contents">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                  @php
                                    $allCategory=App\Models\Category::where('is_deleted',0)->get();
                                  @endphp
                                  @foreach ($allCategory as $key => $category)
                                  <li class="nav-item" role="presentation">
                                    <button class="nav-link @if($category->id==1)  active @endif" id="pills-home-{{ $category->id }}-tab" data-bs-toggle="pill" data-bs-target="#pills-home-{{ $category->id }}" type="button" role="tab" aria-controls="pills-home-{{ $category->id }}" aria-selected="true">{{ $category->name }}</button>
                                  </li>
                                  @endforeach
                                </ul>

                                <!-- Start Merit Tutors Gallery Tab Contents All -->
                                <div class="tab-content" id="pills-tabContent">
                                @foreach ($allCategory as $kesy => $category)
                                  <div class="tab-pane fade @if($kesy==0) show active @endif" id="pills-home-{{ $category->id }}" role="tabpanel" aria-labelledby="pills-home-{{ $category->id }}-tab">
                                        <div class="mt_carousel_wrapper">
                                          <div class="mt_gallery_tab_contents">
                                            @php
                                              $allGallary=App\Models\Gallery::where('is_deleted',0)->where('status',1)->orderBy('id','DESC')->where('category_id',$category->id)->get();
                                            @endphp
                                            @foreach ($allGallary as $data)
                                              <div class="mt_gallery_tab_single"><img src="{{ asset('uploads/'.$data->image) }}" alt="{{ $data->title }}"></div>
                                            @endforeach
                                            
                                         

                                          </div>

                                          <div class="carousel-controls">
                                            <button class="prevBtn"><i class="fa-solid fa-arrow-left"></i></button>
                                            <button class="nextBtn"><i class="fa-solid fa-arrow-right"></i></button>
                                          </div>
                                        </div>
                                  </div>
                                  @endforeach
                                  {{-- <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                      Add item 2
                                  </div>
                                  <div class="tab-pane fade " id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Add item 3</div>
                                  <div class="tab-pane fade" id="pills-item4" role="tabpanel" aria-labelledby="pills-item4-tab">Add item 4</div>
                                  <div class="tab-pane fade" id="pills-item5" role="tabpanel" aria-labelledby="pills-item5-tab">Add item 5</div>
                                  <div class="tab-pane fade" id="pills-item6" role="tabpanel" aria-labelledby="pills-item6-tab">Add item 6</div> --}}
                                </div>
                                <!-- End Merit Tutors Gallery Tab Contents All -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>