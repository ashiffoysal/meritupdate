@extends('layouts.frontend')
@section('title', 'Education Blog for Parents & Students – Tips & Insights | Merit Tutors')
@section('meta_description',
    'Stay informed with expert tips, exam strategies, and educational advice from Merit Tutors. Our blog helps parents and students navigate KS1 to A-Level success in East London.')
@section('content')
<style>
    .what_make_us_main{
        padding: 150px 0px 50px 0px;
    }
    .blogs_main{
        margin: 100px 0px
    }
</style>
 <section class="what_make_us_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="what_make_us">
                            <div class="default_title_2nd">
                                <h1>Our<span> Latest <img src="{{ asset('frontend/update-design') }}/assets/images/home/text-pos2.png" alt=""></span>Blogs</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blogs_main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blogs">
                            <div class="blogs_contents">
                                 @foreach($allblog as $blog)
                                    <div class="blogs_content_single">
                                        <img src="{{asset('uploads/'.$blog->image)}}" alt="{{ $blog->title }}">
                                        <ul>
                                            <li><a href="{{url('details/'.$blog->slug.'/'.$blog->id)}}">{{ $blog->Category->name }}</a></li>
                                           
                                        </ul>
                                        <h4>{{ $blog->title }}</h4>
                                        <p><img src="{{ asset('frontend/update-design') }}/assets/images/blogs/calender.png" alt=""> Updated  {{ $blog->created_at->format('M-d-Y')}}</p>
                                        <div class="blogs_btns">
                                            <a href="{{url('details/'.$blog->slug.'/'.$blog->id)}}" class="btn_styleblogs">Read More <span><img src="{{ asset('frontend/update-design') }}/assets/images/home/arrow-right.png" alt="{{ $blog->title }}"></span></a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="blog_page_count exam_fees_modal_page_count">

                                 {{ $allblog->links('vendor.pagination.custom') }}
		                        
				        	</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================  End (Blogs) Section  ================-->
@endsection