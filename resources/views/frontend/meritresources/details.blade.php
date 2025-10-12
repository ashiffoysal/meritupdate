@extends('layouts.frontend')
@section('title', 'Resource Details')
@section('meta_description','Merit Tutors was established in 2004 and offers private tuition in east London. Click here to learn more about Merit Tutors.')
@section('content')
 <!-- Start Page Banner -->
 <style>
     iframe {
    display: block;       /* iframes are inline by default */
    background: #000;
    border: none;         /* Reset default border */
    height: 100vh;        /* Viewport-relative units */
    width: 100vw;
}
 </style>
 <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Resource Details</h2>
                            <ul>
                                <li>
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li>Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->

        {{--
       <section class="class-details-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="class-details-desc">
                            
                     

                            <div class="class-desc-image" style=" border : 1px solid red;height:500px; overflow:auto;">
                               <embed src="https://dl.dropboxusercontent.com/u/6257603/pdfs/pdf01.pdf" height="100%" width="100%" type="application/pdf">
                            </div>
            
                            <div class="tab class-details-tab">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <ul class="tabs active">
                                            <li class="current">
                                                <a href="#">
                                                    Description
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12">
                                        <div class="tab_content">
                                            <div class="tabs_item">
                                                <div class="class-desc-content">
                                                   {!! $data->description !!}
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="class-details-information">
                            <h3>Information</h3>

                            <ul>
                                <li>
                                    <span>Category:</span>
                                    {{ $data->Category->name }}
                                </li>
                                <li>
                                    <span>Subcategory:</span>
                                    @php
                                        $subcate=DB::table('subcategories')->where('id', $data->subcategory_id)->select(['name'])->first();
                                    @endphp
                                    @if($subcate)
                                    {{ $subcate->name  }}
                                    @endif
                                </li>
                                <li>
                                    <span>Level:</span>
                                    {{ $data->levels }}
                                </li>
                                <li>
                                    <span>Price:</span>
                                    £{{ $data->price }}
                                </li>
                                <li>
                                    <span>SKU:</span>
                                    {{ $data->sku }}
                                </li>
                            </ul>
                        </div>

                        <div class="class-newsletter">
                         
                           <div class="class-btn">
                                    <a target="_blank"  href="{{ $data->purchase_link }}" class="default-btn">Purchase</a>
                                </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="related-class">
                            <h3>Popular Resources</h3>
                            <div class="row">
                              
                                @foreach($popularesource as $resources)
                                <div class="col-lg-4 col-md-6">
                                    <div class="single-class">
                                        <div class="class-image">
                                            <a href="{{ url('/merittutors-resources/details/'.$resources->id.'/'.$resources->sku) }}">
                                                <img src="{{ asset('updatecore/public/'.$resources->thumbnail_image) }}" alt="image">
                                            </a>
                                        </div>
            
                                        <div class="class-content">
                                            <div class="price">£ {{ $resources->price }}</div>
                                            <h3>
                                                <a href="#">{{ $resources->title }}</a>
                                            </h3>
                                           
            
                                            <ul class="class-list">
                                                <li>
                                                    <span>Category:</span>
                                                   {{ $resources->Category->name }}
                                                </li>
                                              
                                            </ul>
            
                                            <div class="class-btn">
                                                <a  href="{{ url('/merittutors-resources/details/'.$resources->id.'/'.$resources->sku) }}" class="default-btn">Purchase</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         --}}
@endsection