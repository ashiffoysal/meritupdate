@extends('layouts.frontend')
@section('title', 'Free Educational Resources for KS1–A Level | Merit Tutors')
@section('meta_description','Access high-quality free resources for KS1 to A Level students. Download worksheets, revision materials, and learning guides crafted by expert tutors at Merit Tutors.')
@section('content')
<style>
    .apply-form {
    background-color: #ffffff;
    -webkit-box-shadow: 0 0px 0px 0 rgb(0 0 0 / 9%) !important; 
     box-shadow: 0 0px 0px 0 rgb(0 0 0 / 9%) !important; 
    padding: 50px;
}
.apply-form form .form-group .form-control {
    height: 50px !important;
    color: #1b0238 !important;
    -webkit-box-shadow: unset !important;
    box-shadow: unset !important;
    border: 1px solid #d7d2d2 !important;;
    background-color: transparent !important;;
    -webkit-transition: 0.5s !important;;
    transition: 0.5s !important;;
    border-radius: 7px !important;;
    /*padding: 0 0 0 15px !important;;*/
    font-weight: 400 !important;;
}
.h1, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
   
    font-family: "Poppins", sans-serif !important;
    font-weight: bold !important;
}

.form-label {
    font-size: 16px;
    font-weight: 600;
}
.page-banner-area {
    padding-top: 50px;
    padding-bottom: 50px;
}

.form-label {
    font-size: 16px;
    font-weight: 600;
    font-family: auto;
}
.required{
    color:#red !important;
}
</style>
<link src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/fontawesome.min.css">
<script src="https://use.fontawesome.com/5f267863cb.js"></script>
     <!-- Start Page Banner -->
     
         <!--================  Start Banner Section  ================-->
    <section class="banner_section_main other_section_banner_main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner_section">
                        <div class="banner_left">
                            <div class="banner_left_contents">
                                <span class="banner_span">Get Free Resource</span>
                                <h1 class="myTitle">Get Free Resource</h1>
                               <p>At Merit Tutors we offer parents the option to undertake lessons at one of our learning centres
                            which are equipped with an abundance of high-quality resources and materials. The intellectual
                            corner simulates classroom environments, enabling children to effectively transfer the knowledge
                            and skills gained.</p>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================  End Banner Section  ================-->
        <!-- End Page Banner -->

        
        
        
        <section class="apply-area" style="padding:0px 0px">
            <div class="container">
                <div class="apply-form">
                      <form method="post" action="{{ url('/get-free-resources') }}" >
                            @csrf
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="content">
                                    <h5>Parent Details</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Name<span style="color:red">*</span></label>
                                                <input  class="form-control" type="text" name="name" placeholder="Enter Name" required>
                                                @error('parent_name')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Email<span style="color:red">*</span></label>
                                                <input type="text" name="email" class="form-control" placeholder="Email">
                                                @error('email')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Mobile Number<span style="color:red">*</span></label>
                                                <input type="text" name="phone" class="form-control" placeholder="Enter Mobile Number">
                                                @error('mobile')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">First Language<span style="color:red">*</span></label>
                                                <input type="text" name="first_language" class="form-control" placeholder="Enter First Language*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Ethnicity<span style="color:red">*</span></label>
                                                <textarea class="form-control" name="ethnicity" cols="30" rows="10" placeholder="Enter Ethnicity*"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Number of School Going Kids<span style="color:red">*</span></label>
                                                <textarea class="form-control" name="number_of_kids" cols="30" rows="10"  placeholder="Enter Number of School Going Kids*"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <button type="submit" class="header_btn" style="border-radius:24px">
                                    Submit Now
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </section>

<script>
function deleterow(em) {

$(em).closest(".row").remove();

}
</script>
<script>
    var i=1;
    function morestudent(){
        $("#morestudent").append('<div class="row"><div class="col-md-6"><div class="form-group"><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">First Name<span style="color:red">*</span></label><input type="text" name="first_name[]" class="form-control" placeholder=" First Name"></div></div></div> <div class="col-md-5"><div class="form-group"><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Last Name<span style="color:red">*</span></label><input type="text" name="last_name[]" class="form-control" placeholder="Last Name"></div></div></div><div class="col-md-1"><div class="form-group"><div class="mt-5"><a onclick="deleterow(this)"  style="color:red"> <i class="fa fa-trash"></i></a></div></div></div><div class="col-md-6"><div class="form-group"><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Subject<span style="color:red">*</span></label><input name="subject[]" type="text" class="form-control" placeholder="Enter Subject example: Math , English , Science"></div></div></div><div class="col-md-5"><div class="form-group"><div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Year<span style="color:red">*</span></label><select name="year[]" class="form-control"><option value="11 PLUS">11 PLUS</option> <option value="GCSE">GCSE</option><option value="A-LEVEL">A-LEVEL</option><option value="YEAR 6 SATs">YEAR 6 SATs</option><option value="YEAR 1">YEAR 1</option> <option value="YEAR 2">YEAR 2</option><option value="YEAR 3">YEAR 3</option><option value="YEAR 4">YEAR 4</option> <option value="YEAR 5">YEAR 5</option><option value="YEAR 6">YEAR 6</option> <option value="YEAR 7">YEAR 7</option><option value="YEAR 8">YEAR 8</option><option value="YEAR 9">YEAR 9</option><option value="YEAR 10">YEAR 10</option> </select></div></div></div></div>')
    }
</script>

@endsection