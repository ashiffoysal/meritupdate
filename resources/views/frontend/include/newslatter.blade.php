        <section class="join_our_newsletter_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="join_our_newsletter">
                            <div class="join_our_newsletter_title">
                                <h2>Join our Newslett<span>er to ge<img
                                            src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos3.png"
                                            alt=""></span>t more updates!</h2>
                                <p>Stay ahead in your child’s education with regular updates and expert tips. Be the
                                    first to know about new courses, events, and exclusive offers!</p>
                            </div>
                            <div class="join_our_newsletter_form">
                                <form action="{{ url('newslettersubmit/news') }}" method="post">
                                                 
                                    <input type="email" name="EMAIL" placeholder="Enter your email address"
                                        required>
                                        @csrf
                                    @error('EMAIL')
                                        <div style="color: red">{{ $message }}</div>
                                    @enderror
                                    <div class="jon_form_submit"><button type="submit">Subscribe</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
