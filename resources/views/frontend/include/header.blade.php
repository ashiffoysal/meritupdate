        <header class="header_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header">
                            <div class="logo">
                                <a href="{{ url('/') }}"><img src="{{ asset('frontend/update-design') }}/assets/images/home/logo.png" alt=""></a>
                                <div class="menu_icon">
                                    <a href="#"><img src="{{ asset('frontend/update-design') }}/assets/images/home/bars.png" alt=""></a>
                                </div>
                            </div>
                            <div class="dropdown_menu_main">
                                <div class="dropdown_menu_mobile_design">
                                    <div class="dropdown_menu_header">
                                        <a href="{{ url('/') }}"><img src="{{ asset('frontend/update-design') }}/assets/images/home/logo.png" alt=""></a>
                                        <a href="#" class="menu_close_icon"><i class="fas fa-close"></i></a>
                                    </div>
                                    <div class="dropdown_menu_mobile">
                                        
                                    </div>
                                </div>
                                <ul class="navbar">
                                    <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                                    <li>
                                        <a href="#" class="dropdown_toggle active">About <i class="fas fa-angle-down"></i></a>
                                        <ul class="dropdown_menu">
                                            <li><a class="{{ Request::is('about-us') ? 'active' : '' }}" href="{{ url('/about-us') }}">About Us</a></li>
                                               <li><a class="{{ Request::is('about-us') ? 'active' : '' }}" href="{{ url('/faq') }}">FAQ</a></li>
                                            
                                               <li><a class="{{ Request::is('gallery') ? 'active' : '' }}" href="{{ url('/gallery') }}">Gallery</a></li>
                                            {{-- <li><a class="{{ Request::is('admission-procedure') ? 'active' : '' }}" href="{{ url('/admission-procedure') }}">Admission Procedure</a></li> --}}
                                            <li><a class="{{ Request::is('assessment') ? 'active' : '' }}" href="{{ url('/assessment') }}">Free Assessment</a></li>
                                            <li><a class="{{ Request::is('quick-inquiry') ? 'active' : '' }}" href="{{ url('/quick-inquiry') }}">Quick Inquiry</a></li>
                                             <li class="has_submenu">
                                                <a href="#">Resources <i class="fas fa-angle-right"></i></a>
                                                <ul class="submenu">
                                                        <li><a href="{{ url('year1-workbooks') }}">Year 1 Books</a></li>
                                                        <li><a href="{{ url('year2-workbooks') }}">Year 2 Books</a></li>
                                                        <li><a href="{{ url('year3-workbooks') }}">Year 3 Books</a></li>
                                                        <li><a href="{{ url('year4-workbooks') }}">Year 4 Books</a></li>
                                                        <li><a href="{{ url('year5-workbooks') }}">Year 5 Books</a></li>
                                                         <li><a href="{{ url('year6-workbooks') }}">Year 6 Books</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="{{ Request::is('privacy-policy') ? 'active' : '' }}" href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
                                            
                                            
                                            
                                            <li><a class="{{ Request::is('terms-condition') ? 'active' : '' }}" href="{{ url('/terms-condition') }}">Terms & Condition</a></li>
                                            
                                              <li><a class="{{ Request::is('11-plus-school-list') ? 'active' : '' }}" href="{{ url('11-plus-school-list') }}">11 Plus School</a></li>
                                            
                                            
                                            <li><a class="{{ Request::is('finance-support') ? 'active' : '' }}" href="{{ url('/finance-support') }}">Finance Supports</a></li>
                                            <li><a class="{{ Request::is('child-care') ? 'active' : '' }}" href="{{ url('child-care') }}">Child Care</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('summer-school') }}" class="{{ Request::is('summer-school') ? 'active' : '' }}">Summer School</a></li>
                                    <li><a href="{{ url('/admission-procedure') }}" class="{{ Request::is('/admission-procedure') ? 'active' : '' }}">Admission</a></li>
                                    <li>
                                        <a href="#" class="dropdown_toggle">Tuition <i class="fas fa-angle-down"></i></a>
                                        <ul class="dropdown_menu">
                                            <li class="has_submenu">
                                                <a href="#">Primary Tuition <i class="fas fa-angle-right"></i></a>
                                                <ul class="submenu">
                                                        <li><a href="{{ url('tuition/11-plus-london') }}">11 Plus Tuition</a></li>
                                                        <li><a href="{{ url('tuition/ks1-maths-tuition') }}">Ks1 Maths Tuition</a></li>
                                                        <li><a href="{{ url('tuition/ks1-english-tuition') }}">Ks1 English Tuition</a></li>
                                                        <li><a href="{{ url('tuition/ks2-maths-tuition') }}">Ks2 Maths Tuition</a></li>
                                                        <li><a href="{{ url('tuition/ks2-english-tuition') }}">Ks2 English Tuition</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ url('tuition/ks3-tuition') }}">Ks3 Tuition</a></li>
                                            <li><a href="{{ url('tuition/gcse-tuition') }}">GCSE's Tuition</a></li>
                                            <li><a href="{{ url('tuition/a-level-tuition') }}">A Level Tuition</a></li>
                                            <li class="has_submenu">
                                                <a href="#">Revision Courses <i class="fas fa-angle-right"></i></a>
                                                <ul class="submenu">
                                                        <li><a href="{{ url('gcse-maths-revision-courses') }}">GCSE Maths</a></li>
                                                        <li><a href="{{ url('gcse-english-language-revision-courses') }}">GCSE English Language</a></li>
                                                        <li><a href="{{ url('gcse-english-literature-revision-courses') }}">GCSE English Literature</a></li>
                                                        <li><a href="{{ url('gcse-biology-revision-courses') }}">GCSE Biology</a></li>
                                                        <li><a href="{{ url('gcse-chemistry-revision-courses') }}">GCSE Chemistry</a></li>
                                                        <li><a href="{{ url('gcse-physics-revision-courses') }}">GCSE Physics</a></li>

                                                        <li><a href="{{ url('alevel-chemistry-revision-courses') }}">A Level Chemistry</a></li>
                                                        <li><a href="{{ url('alevel-maths-revision-courses') }}">A Level Maths</a></li>
                                                        <li><a href="{{ url('alevel-biology-revision-courses') }}">A Level Biology</a></li>
                                                        <li><a href="{{ url('alevel-physics-revision-courses') }}">A Level Physics</a></li>
                                                        <li><a href="{{ url('alevel-psychology-revision-courses') }}">A Level Psychology</a></li>
                                                </ul>
                                            </li>


                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown_toggle">Exam Centre London <i class="fas fa-angle-down"></i></a>
                                        <ul class="dropdown_menu">
                                            <li><a target="__blank" href="https://examcentrelondon.co.uk/gcse-exams">GCSE Exams</a></li>
                                            <li><a target="__blank" href="https://examcentrelondon.co.uk/igcse-exams">IGCSE Exams</a></li>
                                            <li><a target="__blank" href="https://examcentrelondon.co.uk/a-level-exams">A Level Exams</a></li>
                                            <li><a target="__blank" href="https://examcentrelondon.co.uk/as-level-exams">AS Level Exams</a></li>
                                            <li><a target="__blank" href="https://examcentrelondon.co.uk/aat-exams">AAT Exams</a></li>
                                            <li><a target="__blank" href="https://examcentrelondon.co.uk/acca-exams">ACCA Exams</a></li>
                                            <li><a target="__blank" href="https://examcentrelondon.co.uk/functional-skills-exams">Functional Skills Exams</a></li>
                                             <li><a target="__blank" href="https://examcentrelondon.co.uk/ucas-registered-centre">UCAS Application</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown_toggle">How It Works <i class="fas fa-angle-down"></i></a>
                                        <ul class="dropdown_menu">
                                            <li><a href="{{ url('/on-site-tutoring') }}">Branch Tutoring</a></li>
                                            <li><a href="{{ url('/online-tutoring') }}">Online Tutoring</a></li>
                                            <li><a href="{{ url('/home-tutoring') }}">Home Tutoring</a></li>
                                        </ul>
                                    </li>
                                      <li><a href="{{ url('/blogs') }}" class="{{ Request::is('/blogs') ? 'active' : '' }}">Blogs</a></li>
                                    
                                </ul>
                            </div>
                            <div class="header_right"><a href="{{ url('/contact') }}" class="header_btn">Contact Us <span><i class="fa-solid fa-phone"></i></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>