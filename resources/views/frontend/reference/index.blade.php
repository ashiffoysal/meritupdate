
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   	<title>Reference Submission ! Merit Tutors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <style>
    body{
    margin-top:20px;
    color: #484b51;
}
.text-secondary-d1 {
    color: #728299!important;
}
.page-header {
    margin: 0 0 1rem;
    padding-bottom: 1rem;
    padding-top: .5rem;
    border-bottom: 1px dotted #e2e2e2;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -ms-flex-align: center;
    align-items: center;
}
.page-title {
    padding: 0;
    margin: 0;
    font-size: 1.75rem;
    font-weight: 300;
}
.brc-default-l1 {
    border-color: #dce9f0!important;
}

.ml-n1, .mx-n1 {
    margin-left: -.25rem!important;
}
.mr-n1, .mx-n1 {
    margin-right: -.25rem!important;
}
.mb-4, .my-4 {
    margin-bottom: 1.5rem!important;
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1);
}

.text-grey-m2 {
    color: #888a8d!important;
}

.text-success-m2 {
    color: #86bd68!important;
}

.font-bolder, .text-600 {
    font-weight: 600!important;
}

.text-110 {
    font-size: 110%!important;
}
.text-blue {
    color: #478fcc!important;
}
.pb-25, .py-25 {
    padding-bottom: .75rem!important;
}

.pt-25, .py-25 {
    padding-top: .75rem!important;
}
.bgc-default-tp1 {
    background-color: rgba(121,169,197,.92)!important;
}
.bgc-default-l4, .bgc-h-default-l4:hover {
    background-color: #f3f8fa!important;
}
.page-header .page-tools {
    -ms-flex-item-align: end;
    align-self: flex-end;
}

.btn-light {
    color: #757984;
    background-color: #f5f6f9;
    border-color: #dddfe4;
}
.w-2 {
    width: 1rem;
}

.text-120 {
    font-size: 120%!important;
}
.text-primary-m1 {
    color: #4087d4!important;
}

.text-danger-m1 {
    color: #dd4949!important;
}
.text-blue-m2 {
    color: #68a3d5!important;
}
.text-150 {
    font-size: 150%!important;
}
.text-60 {
    font-size: 60%!important;
}
.text-grey-m1 {
    color: #7b7d81!important;
}
.align-bottom {
    vertical-align: bottom!important;
}

.col-md-12.backdesign {
    border: 1px solid #90b2d0;
    padding: 25px 40px;
    margin: 10px 0px;
}


.btn-warning {
    color: #fff !important;
    background-color: #767676 !important;
    border-color: #07ff13 !important;
    padding: 8px 13px;
    font-size: 16px;
    font-weight: 600;
    border-radius: 1px;
}

button.btn.btn-success {
    background: transparent;
    color: #000;
}
button.btn.btn-danger {
    background: transparent;
    color: #000;
}
</style>
  </head>
  <body>
      
<div class="page-content container">
    <div class="page-header text-blue-d2">
        <h1 class="page-title text-secondary-d1">
            
            <small class="page-info">
                Date: {{ Carbon\Carbon::now()->format('d-M-Y') }}
            </small>
        </h1>
    </div>

    <div class="container px-0">
        <div class="row mt-4">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center text-150">
                       
                            <img src="https://www.merittutors.co.uk/uploads/logo/logo_1648033550.png">
                        </div>
                    </div>
                </div>
                <!-- .row -->
               
                @if($check)
                    
                        @if(Session::has('message'))
                        <p class="alert alert-info">{{ Session::get('message') }}</p>
                        @else
                        <div class="row">
                             <div class="col-md-12 backdesign">
                                <h4>Already submitted</h4>
                                <br>
                                <a href="{{ url('/') }}"  class="btn btn-danger">Visit Our Website</a>
                                <br>
        
                            </div>
                        </div>
                        @endif
                
                @else
                <hr class="row brc-default-l1 mx-n1 mb-4" />
                <form action="{{ url('/reference-check/submission/confirm/') }}" method="post">
                    @csrf
                <div class="row">
                    <div class="col-md-12 backdesign">
                        <p style="color: #000000;font-size: 19px;font-family: none;">You can give a reference here utilising our online referencing system. Please check the information
                        supplied below and select one of the options given.
                        </p>
                    </div>
                    <div class="col-md-12 backdesign">
                        <span class="btn-sm btn-warning"style="margin:10px 0px">Candidate Details</span>
                        <div style="margin-top:15px">
                            <span class="text-sm  align-middle" style="color:black">Candidate name:</span>
                            
                            <input type="hidden" name="user_id" value="{{ $data->id }}">
                            <input type="hidden" name="reference_email" value="{{ $data->reference_email }}">
                            <input type="hidden" name="reference_name" value="{{ $data->reference_name }}">
                            
                            <span class="text-600 text-110 text-blue align-middle" style="color:black">({{ $data->name }} )</span>
                        </div>
                        <div class="text-grey-m2">
                            <div class="my-1">
                               <span style="color:black">Date of birth: {{ $data->date_of_birth }}</span>
                            </div>
                            <div class="my-1">
                              <span style="color:black">National Insurance Number: </span>
                            </div>
                         
                        </div>
                    </div>
                    <div class="col-md-12 backdesign">
                        <span class="btn-sm btn-warning" style="margin:10px 0px">Your Details</span>
                        <div style="margin-top:15px">
                            <span class="text-sm  align-middle" style="color:black"> Name:</span>
                            <span class="text-600 text-110 text-blue align-middle" style="color:black">{{ $data->reference_name }} </span>
                        </div>
                        <div class="text-grey-m2">
                            <div class="my-1">
                                
                               <span style="color:black">Organisation: {{ $data->reference_organisation }}</span>
                            </div>
                            <div class="my-1">
                              <span style="color:black">Department: {{ $data->reference_department }}</span>
                            </div>
                            <div class="my-1">
                              <span style="color:black">Position: {{ $data->reference_position }}</span>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-12 backdesign">
                        <span class="btn-sm btn-warning" style="margin:10px 0px">Positions</span>
                        <br>
                        <br>
                       <p style="color: #000000;font-size: 19px;font-family: none;">You have been asked to verify the following information supplied by {{ $data->name }}.
                            If this information is correct please click ‘Confirm Reference’. If you wish to amend the claim please
                            do so prior to confirming in order to submit the altered information. If you are unable to provide a
                            reference, please decline the request detailing the reasons why at the bottom of this page.</p>
                        
                        <br>
                        <br>
                        
                        
                    </div>
                    <div class="col-md-12 backdesign">
                       <p>Company Name:</p>
                       <input type="text" class="form-control" name="company_name" placeholder="Enter Company Name"> <br>
                       <p>Positions:</p>
                        <input type="text" class="form-control" name="positions" placeholder="Enter Positions"> <br>
                        <br>
                        <br>
                    <span style="font-weight: 700;">Start Date:</span>
                    <br>
                    <select name="start_date"  class="form-control">
                        <option>Select Day</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                        
                    </select>
                    <br>
                     <select name="start_month" class="form-control">
                        <option>Select Month</option>
                        <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                       
                    </select>
                     <br>
                     <select  name="start_year" class="form-control">
                        <option>Select Year</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                    </select>
                       <br>
                       <br>
                       <span style="font-weight: 700;">End Date:</span>
                      <br>
                    <select  name="end_date" class="form-control">
                        <option>Select Day</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    <br>
                     <select name="end_month" class="form-control">
                        <option>Select Month</option>
                       <option value="January">January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="December">December</option>
                    </select>
                     <br>
                     <select name="end_year" class="form-control">
                        <option>Select Year</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        
                    </select>
                       
                       
                        
                        
                    </div>
                    <div class="col-md-12 backdesign">
                        <span class="btn-sm btn-warning" style="margin:10px 0px">Ratings</span>
                        <br>
                        <br>
                        <spna>How would you rate this person for the following?</spna>
                        
                        
                        <table class="table">
                          <thead class="thead-light">
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col"></th>
                              <th scope="col">Poor</th>
                              <th scope="col">Average</th>
                              <th scope="col">Good</th>
                              <th scope="col">Excellent</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Punctuality and Attendance</td>
                              
                              <td><input type="radio" name="Punctuality_and_Attendance" class="form-check-input" value="Poor"></td>
                              
                              <td><input type="radio" name="Punctuality_and_Attendance" class="form-check-input" value="Average"></td>
                              <td><input type="radio" name="Punctuality_and_Attendance" class="form-check-input" value="Good"></td>
                              <td><input type="radio" name="Punctuality_and_Attendance" class="form-check-input" value="Excellent"></td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Reliability</td>
                                <td><input type="radio" class="form-check-input" name="Reliability" value="Poor"></td>
                              
                              <td><input type="radio" class="form-check-input" name="Reliability" value="Average"></td>
                              <td><input type="radio" class="form-check-input" name="Reliability" value="Good"></td>
                              <td><input type="radio" class="form-check-input" name="Reliability" value="Excellent"></td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Relationship with Colleagues</td>
                                <td><input type="radio" class="form-check-input" name="Relationship_with_Colleagues" value="Poor"></td>
                              
                              <td><input type="radio" class="form-check-input" name="Relationship_with_Colleagues" value="Average"></td>
                              <td><input type="radio" class="form-check-input" name="Relationship_with_Colleagues" value="Good"></td>
                              <td><input type="radio" class="form-check-input" name="Relationship_with_Colleagues" value="Excellent"></td>
                            </tr>
                             <tr>
                              <th scope="row">4</th>
                              <td>Overall Contribution</td>
                              <td><input type="radio" class="form-check-input" name="Overall_Contribution" value="Poor"></td>
                              
                              <td><input type="radio" class="form-check-input" name="Overall_Contribution" value="Average"></td>
                              <td><input type="radio" name="Overall_Contribution" class="form-check-input" value="Good"></td>
                              <td><input type="radio" name="Overall_Contribution" class="form-check-input" value="Excellent"></td>
                            </tr>
                            
                          </tbody>
                        </table>
                        
                        
                    </div>
                    
                    <div class="col-md-12 backdesign">
                        <span class="btn-sm btn-warning" style="margin:10px 0px">Mandatory information</span>
                        <br>
                        <br>
                        <level>Safeguarding and Child Protection</level>
                        <p>Was the applicant subject to any disciplinary action or allegations during their period of employment If
                            YES, please provide details:*</p>
                        <textarea class="form-control" name="Safeguarding_and_Child_Protection" required></textarea>
                        <br>
                        <level>Do you have any concerns about the Applicant working with children? If YES, please provide details:*</level><br><br>
                        <textarea class="form-control" name="concerns_about_children" required></textarea>
                        
                        
                        <br>
                        <level>Would you re-employ this person?</level>
                      <div class="form-check">
                      <input class="form-check-input" type="radio" name="reemploy" id="exampleRadios1" value="Yes" checked>
                      <label class="form-check-label" for="exampleRadios1">
                        Yes
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="reemploy" id="exampleRadios2" value="No">
                      <label class="form-check-label" for="exampleRadios2">
                        No
                      </label>
                    </div>
                        
                        
                    </div>
                    <div class="col-md-12 backdesign">
                        <h4>Confirm This Reference</h4>
                        <p>I confirm that I am the named referee, (name), and that the above information is correct to the best of my knowledge.</p>
                        <button type="submit" class="btn btn-success">Confirm Reference</button>
                        <br>

                    </div>
                     <br>
                     
                       </div>
                </form>
                    <form action="{{ url('/reference-check/submission/decline/') }}" method="post">
                        @csrf
                        <div class="row">
                             <div class="col-md-12 backdesign">
                                <h4>Decline To Provide This Reference</h4>
                                <p>Reason for declining:</p>
                                <input type="hidden" name="user_id" value="{{ $data->id }}">
                                 <input type="hidden" name="reference_email" value="{{ $data->reference_email }}">
                                <input type="hidden" name="reference_name" value="{{ $data->reference_name }}">
                                 <textarea class="form-control" name="decline_text" required placeholder="If decline,Please descrive reasons"></textarea>
                                <br>
                                <button type="submit"  class="btn btn-danger">Decline Reference</button>
                                <br>
        
                            </div>
                        </div>
                      </form>
                    <!-- /.col -->
                    
                    @endif
              

                <div class="mt-4">

                    <div class="row border-b-2 brc-default-l2"></div>
           

                    <div class="row mt-3">
                        <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">
                            Powered by <a href="{{ url('/') }}">Merit Tutors</a> 
                        </div>

                       
                        </div>
                    </div>

                    <hr />
                </div>
            </div>
        </div>
    </div>
</div>
      
      
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


</body>
</html>



