
@extends('layouts.frontend')
@section('title', 'Find Tutor')
@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="{{asset('frontend')}}/style.css" rel="stylesheet" type="text/css" />
<link href="{{asset('frontend')}}/responsive.css" rel="stylesheet" type="text/css" />
<div class="preimage-cls" style="visibility: hidden;">
    <img class="pre-image" src="{{ asset('frontend/Double Ring-1s-200px.svg') }}" alt="">
</div>
<style>
img.img-fluid.img_laz {
    height: 250px;
    width: 250px;
    border-radius: 10%;
}
.preimage-cls{
    position: fixed;
    left: 45%;
    top: 40%;
    z-index: 999999;
    height: 100%;
    overflow: hidden;
}
span.new-price {
    padding: 10px 10px;
    background: #e3e3e3;
    margin: 6px 0px;
    border-radius: 19px;
    font-size: 13px !important;
}
.btn-group-sm>.btn, .btn-sm {
    padding: 0.25rem 0.5rem;
    font-size: .875rem;
    border-radius: 0.2rem;
    margin: 3px 3px;
}
.list-product .list-items .caption h3 a {

    font-weight: 800;
    font-size: 18px;
}

/*font-family: "FoundersGrotesk",sans-serif;*/
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    color: #1b0238;
    /*font-family: "Catamaran", sans-serif;*/
    font-family: 'Dosis', sans-serif !important;
    font-weight: 800 !important;
}
p {
    
    font-family: 'Dosis', sans-serif !important;;
    font-weight: 200 !important;
}


input[type="checkbox"]{
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    padding: 0;
    width: 1.5em;
    height: 1.5em;
    -webkit-appearance: none;
    background-color: #fff;
    border: solid 1px #ebded5;
    border-radius: 4px;
    position: relative;
    vertical-align: middle;
    cursor: pointer;
    -moz-appearance: none;
    transition: all .15s ease-in-out 0;
    transition-property: box-shadow,background,border,color,background-color;
    outline: 0;
}

input[type="checkbox"]:checked:hover, input[type="checkbox"]:hover.input[type="checkbox"] {
    border-color: #00918a;
    background-color: #00918a;
}

input[type="checkbox"]:checked, input[type="checkbox"].ui-state-active, .ui-chkbox .ui-chkbox-box:checked, .ui-chkbox .ui-chkbox-box.ui-state-active {
    border-color: #03ccba;
    background-color: #03ccba;
}
input[type="checkbox"]:checked, input[type="checkbox"] {
    background-image: url(https://cdn.mytutor.co.uk/icons/tick-neutral1.svg?1659598112000);
    background-size: cover;
}
ul#tags_value {
    margin: 10px 10px;
    padding: 10px;
}
li.select2-selection__choice.custom_tag.title\= {
    background: #00918a !important;
    color: #fff;
    padding: 10px 9px 10px 13px;
    border-radius: 19px;
}

select#level{
    border: 1px solid #000000;
}
select#subject{
    border: 1px solid #000000;
}
select#sortBy{
    border: 1px solid #000000;
}
</style>
<section class="section-tb-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="all-filter">

                        <div class="filter-tag">
                            <h4 class="filter-title">Tutor Type</h4>
                            <a href="#tags-filter" data-bs-toggle="collapse" class="filter-link"><span>Tutor Type </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-tag collapse" id="tags-filter">
                                <li class="choice-size">
                                    <input type="checkbox" class="tutor_type common_selector tutor_wish" name="tutor_type" id="t-1"
                                    value="1" data-name="Online-Tutor" data-slug="type-online">
                                    <label for="t-1">Online Tutor</label>
                                   
                                </li>
                                <br>
                                <li class="choice-size">
                                <input type="checkbox" class="tutor_type common_selector tutor_wish" name="tutor_type" id="t-2"
                                    value="2" data-name="Home-Tutor" data-slug="type-online">
                                    <label for="t-2">Home Tutor</label>
                                </li>
                            </ul>
                        </div>
                        
                          <div class="pro-size">
                            <h4 class="filter-title">Gender</h4>
                            <a href="#size-filter" data-bs-toggle="collapse" class="filter-link"><span>Gender </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-size collapse" id="size-filter">
                                <li class="choice-size">
                                    <input type="checkbox" class="gender common_selector gender_wish" name="gender" id="g-1"
                                    value="Male" data-name="Male" data-slug="gender-Male">
                                    <label for="g-1">Male</label>
                                </li>
                                <li class="choice-size">
                                    <input type="checkbox" class="gender common_selector gender_wish" name="gender" id="g-2"
                                    value="Female" data-name="Female" data-slug="gender-Female">
                                    <label for="g-2">Female</label>
                                </li>
                            </ul>
                        </div>
                        <br>
                        <div class="categories-page-filter">
                            <h4 class="filter-title">Subjects</h4>
                            <a href="#category-filter" data-bs-toggle="collapse" class="filter-link"><span>Subjects </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-option collapse" id="category-filter">

                            @foreach($allsubject as $subject)
                                <li class="grid-list-option">
                                    <input type="checkbox" class="subject common_selector subject_wish" name="subject" id="b-{{ $subject->id }}"
                                    value="{{ $subject->id}}" data-name="{{ $subject->name}}" data-slug="brand-{{ $subject->name }}">
                                    <label style="margin:0px 0px 0px 10px" for="b-{{ $subject->id }}"> {{ $subject->name}}</label>
                                </li>
                             @endforeach

                                
                            </ul>
                        </div>
                        <div class="price-filter">
                            <h4 class="filter-title">Filter by price</h4>
                            <a href="#price-filter" data-bs-toggle="collapse" class="filter-link"><span>Filter by price </span><i class="fa fa-angle-down"></i></a>
                            <ul class="all-price collapse" id="price-filter">
                                <li class="f-price">
                                    <input  type="checkbox" class="price common_selector price_wish" name="price" value="1" id="p-1" data-name="£10 - £20" data-slug="price-1">
                                    <label for="p-1"> £10 - £20</label>
                                </li>
                                <li class="f-price">
                                    <input  type="checkbox" class="price common_selector price_wish" name="price" value="2" id="p-2" data-name="£21 - £30" data-slug="price-2">
                                    <label  for="p-2">£21 - £30</label>
                                </li>
                                <li class="f-price">
                                    <input type="checkbox" class="price common_selector price_wish" name="price" value="3"  id="p-3" data-name="£31 - £40" data-slug="price-3">
                                    <label  for="p-3">£31 - £40</label>
                                </li>
                                <li class="f-price">
                                    <input type="checkbox" class="price common_selector price_wish" name="price" value="4"  id="p-4" data-name="£41 - £50" data-slug="price-4">
                                    <label  for="p-4">£41 - £50</label>
                                </li>
                                <li class="f-price">
                                    <input type="checkbox" class="price common_selector price_wish" name="price" value="5"  id="p-5" data-name="£51 - Other" data-slug="price-5">
                                    <label  for="p-5">£51 - Other</label>
                                </li>
                             
                            </ul>
                        </div>
                      
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <div class="grid-list-area">
                        <div class="row">
                            <div class="col-md-3 mt-4">
                              
                                  <div class="form-group">
                                    <select class="form-control" name="level" id="level">
                                    <option disabled selected>Select Level</option>
                                    @php
                                    $alllevel=DB::table('subject_levels')->get();
                                    @endphp
                                    @foreach($alllevel as $level)
                                    <option value="{{ $level->id }}">{{ $level->level_name }}</option>
                                    @endforeach
                                
                                                              </select>
                                                            </div>
                            
                            </div>
                                <div class="col-md-3 mt-4">
                                    <div class="form-group">
                                                              <select class="form-control" name="subject" id="subject">
                                                   <option disabled selected>Select Subject</option>               
                                                              </select>
                                                            </div>
                                
                            
                              </div>
                            
                              <div class="col-md-6">
                                <div class="grid-list-select">
                                    <ul class="grid-list">
                                        <li class="colloction-icn"><a href="" class="active"><i class="ti-layout-list-thumb"></i></a></li>
                                        <li class="colloction-icn"><a href=""><i class="ti-layout-grid2"></i></a></li>
                                        <li class="colloction-icn three-grid"><a href=""><i class="ti-layout-grid3"></i></a></li>
                                        <li class="colloction-icn four-grid"><a href=""><i class="ti-layout-grid4"></i></a></li>
                                    </ul>
                                    <ul class="grid-list-selector">
                                        <li>
                                            <label>Sort by</label>
                                          
                                            <select class="common_selector" name="sortBy" id="sortBy">

                                                <option selected data-slug="sortBy-Price-Low-to-High" data-name="Name (A to Z)" value="3">Name (A to Z)</option>
                                                <option  data-slug="sortBy-Price-Low-to-High" data-name="Price (Low to High)" value="1">Hourly Rate (Low
                                                    to High)
                                                </option>
                                                <option data-slug="sortBy-Price-High-to-Low" data-name="Price (High to Low)" value="2">Hourly Rate (High to Low)
                                                </option>
                                               
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                 <ul class="grid-list" id="tags_value">
                                   
                                </ul>
                            </div>
                        </div>
                        
                        
                    

                        <div class="list-product" id="defultData">
                            @foreach($allteacher as $key => $data)
                                            @php
                                                    $tutor_edu_latest=App\Models\TutorEducation::where('name_of_degree','Degree')->where('is_verify',1)->where('user_id',$data->id,)->orderBy('id','DESC')->first();
                                                @endphp
                                <div class="list-items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="{{ url('tutor-find/details/'.$data->id) }}">
                                                <img class="img-fluid img_laz" data-original="{{ asset('/'.$data->photo) }}" alt="pro-img1">
                                              
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-text">Tutor</span>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="{{ url('tutor-find/details/'.$data->id) }}">{{ $data->name}}</a></h3>
                                         <h6 style="font-weight: 600 !important">
                                             {{ $data->current_subject }} @if($data->current_gedree_type !=NULL) ({{$data->current_gedree_type }} ) @endif
                                        @if($data->current_university !=NULL)
                                        <br>{{$data->current_university }}
                                        @endif
                                         
                                         </h6><br>
                                        <span class="list-description" style="color:#000;">{{ $data->headline_for_tutor }}</span>
                                    
                                        <div class="pro-price">
                                            <span class="new-price">£ {{ $data->expected_hourly_rate }} / hr</span>
                                        </div>
                                        Offers:
                                         @if($data->subject !=null)
                                            @php
                                                $subjectstutor=App\Models\SelectedTutorSubject::where('tutor_id', $data->id)->get();
                                            @endphp
                                           @foreach($subjectstutor as $sub)
                                           @php
                                            $subjectname=App\Models\TutoringSubject::where('id',$sub->subject_id)->select(['name'])->first();
                                           @endphp
                                           @if($subjectname)
                                           <a href="#" class="btn-sm btn-success" style="background:#00918a !important;border-color:#00918a !important">{{$subjectname->name}}</a>
                                           @endif
                                            @endforeach
                                            
                                         @endif
                                         
                                @if($data->other_subject_name !=null)
                                 @foreach(json_decode($data->other_subject_name) as $submore)
                                        <a href="#" class="btn-sm btn-success" style="background:#00918a !important;border-color:#00918a !important">{{ $submore }}</a>
                                @endforeach
                                        
                                @endif
                                
                                
                                
                                        <div class="pro-icn">
                                        <a href="{{ url('tutor-find/details/'.$data->id) }}" style="box-shadow: none;border-color: #ebded5;background-color: #ebded5;color: #242424;padding:6px 10px;border-radius: 5%;" >view-profile</a>  
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="list-product"  id="filterData"></div>
                    </div>
                </div>
            </div>

            <div class="list-all-page text-center" id="pagina">
                <span class="page-title"> </span>
                <div class="page-number text-center">
                    {{ $allteacher->links('vendor.pagination.custom') }}
                </div>
            </div>
        </div>
    </section>
<style>
    .page-number.text-center {
    display: inline-flex !important;
}
</style>


@endsection