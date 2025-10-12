@extends('layouts.frontend')
@section('title', 'Resources')
@section('meta_description','Merit Tutors was established in 2004 and offers private tuition in east London. Click here to learn more about Merit Tutors.')
@section('content')
        <style>

.section-py-120 {
    padding: 120px 0;
}
.container {
    padding-left: 15px;
    padding-right: 15px;
}
.shop-top-wrap {
    margin-bottom: 30px;
}
.shop-top-left p {
    margin-bottom: 0;
    font-size: 18px;
}
.shop-item {
    border: 1px solid #e1dada;
    border-radius: 18px;
    padding: 25px 30px 35px;
    margin-bottom: 30px;
    background: #ffffff;
}
.shop-thumb {
    position: relative;
    text-align: center;
    margin-bottom: 35px;
}
.shop-thumb:hover .shop-action {
    display: flex;
    align-items: center;
    position: absolute;
    left: 50%;
    transform: translate(-50%, -50%);
    top: 50%;
    gap: 10px;
}
.shop-content {
    text-align: center;
}
.shop-content .price {
    font-weight: 500;
    font-size: 20px;
    margin-bottom: 8px;
    color: #1363df;
}
.shop-content .title {
    margin-bottom: 12px;
    font-weight: 500;
    font-size: 18px;
}
.shop-content .rating {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 15px;
    color: #F8BC24;
    gap: 3px;
}
.shop-widget {
    border: 1px solid #ececec;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.05);
    border-radius: 8px;
    padding: 25px 30px;
    background: #fff;
    margin-bottom: 30px;
}
.widget-title {
    font-size: 19px;
    font-weight: 500;
    margin: 0 0 20px;
    position: relative;
}
.shop-widget ul li {
    margin-bottom: 15px;
}
.list-wrap li {
    list-style: none;
}
.shop-widget .form-check {
    display: flex;
    align-items: center;
    line-height: 1;
    margin-bottom: 0;
    padding: 0;
    min-height: inherit;
}
.shop-widget .form-check-input {
    border-radius: 4px;
    border: 1px solid #B2BDCD;
    margin: 0 10px 0 0;
    width: 16px;
    height: 16px;
}
.shop-widget .form-check-label {
    flex-grow: 1;
    font-size: 16px;
    font-weight: 400;
    color: var(--tg-body-color);
    user-select: none;
}



.shop-top-right select {
    background-color: #e7effc;
    border: none;
    color: #39557e;
    font-weight: 400;
    font-size: 16px;
    text-transform: capitalize;
    border-radius: 4px;
    outline: none;
    padding: 12px 37px 9px 20px;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    width: 100%;
    line-height: 1.2;
    height: 40px;
}

.shop-top-left p {
    margin-bottom: 0;
    font-size: 18px;
    font-family: auto;
    line-height: 1.75;
    font-weight: 400;
    color: var(--tg-body-color);
    margin-bottom: 15px;
}
.page-banner-area {
    padding-top: 50px;
    padding-bottom: 50px;
}
        </style>
 <!-- Start Page Banner -->
        <div class="page-banner-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Resources</h2>
                            <ul>
                                <li>
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li>Resources</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->
        <section class="shop-area section-py-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 order-0 order-lg-2">
                        <div class="shop-top-wrap">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-sm-7">
                                    <div class="shop-top-left">
                                        <p>Showing 1-9 of 16 Results</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-5">
                                    <div class="shop-top-right">
                                        <select name="orderby" class="orderby">
                                            <option value="Default sorting">Default sorting</option>
                                            <option value="Sort by popularity">Sort by popularity</option>
                                            <option value="Sort by average rating">Sort by average rating</option>
                                            <option value="Sort by latest">Sort by latest</option>
                                            <option value="Sort by latest">Sort by latest</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-item-wrap">
                            <div class="row justify-content-center">
                                 @foreach($allResources as $resources)
                                 <div class="col-lg-4 col-sm-6">
                                    <div class="shop-item">
                                        <div class="shop-thumb">
                                            <a href="{{$resources->purchase_link}}">
                                                <img src="{{ asset('updatecore/public/'.$resources->thumbnail_image) }}" alt="img">
                                            </a>
                                           
                                        </div>
                                        <div class="shop-content">
                                            <h4 class="price">£ {{ $resources->price }}</h4>
                                            <h3 class="title"><a href="{{$resources->purchase_link}}">{{ $resources->title }}</a></h3>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                        
                            </div>
                        </div>
                  
                    </div>
                     <div class="col-lg-3 col-md-8">
                        <aside class="shop-sidebar">
                              @php
                                        $allCategory=App\Models\Category::where('is_deleted',0)->where('is_active',1)->get();
                                         $alllevel=DB::table('subject_levels')->get();
                                    @endphp
                            
                            <div class="shop-widget">
                                <h4 class="widget-title">Categories</h4>
                                
                                <div class="shop-cat-list">
                                  
                                    <ul class="list-wrap">
                                        @foreach($allCategory as  $category)
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_{{$category->id}}">
                                                <label class="form-check-label" for="cat_{{$category->id}}">{{ $category->name }}</label>
                                            </div>
                                        </li>
                                        @endforeach
                                       
                                    </ul>
                                </div>
                                
                                
                            </div>
                                  <div class="shop-widget">
                                <h4 class="widget-title">Levels</h4>
                                
                                <div class="shop-cat-list">
                                  
                                    <ul class="list-wrap">
                                        @foreach($alllevel as  $level)
                                        <li>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="cat_{{$level->id}}">
                                                <label class="form-check-label" for="cat_{{$level->id}}">{{ $level->level_name }}</label>
                                            </div>
                                        </li>
                                        @endforeach
                                       
                                    </ul>
                                </div>
                                
                                
                            </div>
                     
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        
        
        <!-- old design-->
        {{-- 
      <section class="class-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    @foreach($allResources as $resources)
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
                                @php
                                    $mydescription=Str::limit($resources->description,40);
                                @endphp
                                <p></p>

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

                   

                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            <a href="#" class="prev page-numbers">
                                <i class="bx bx-chevron-left"></i>
                            </a>
                            <a href="#" class="page-numbers">1</a>
                            <span class="page-numbers current" aria-current="page">2</span>
                            <a href="#" class="page-numbers">3</a>
                            <a href="#" class="page-numbers">4</a>
                            <a href="#" class="next page-numbers">
                                <i class="bx bx-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="class-shape">
                <div class="shape-1">
                    <!--<img src="assets/img/class/class-shape-1.png" alt="image">-->
                </div>
                <div class="shape-2">
                    <!--<img src="assets/img/class/class-shape-2.png" alt="image">-->
                </div>
            </div>
        </section>
        --}}
@endsection