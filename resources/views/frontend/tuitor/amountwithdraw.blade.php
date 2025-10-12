@extends('layouts.frontend')
@section('title', 'Amount Withdraw')
@section('content')

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<style>
    .page-banner-area {
    padding-top: 60px;
    padding-bottom: 50px;
}
.main-navbar .navbar .navbar-nav .nav-item a i {
  
    top: 0px !important; 
 
}
span.btn {
    font-size: 9px !important;
}
</style>
<div class="page-banner-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Dashboard</h2>
                    <ul>
                        <li>
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li>Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    aside#layout-menu {
    margin: 15px 0px 0px 50px;
     height: 800px;
}

</style>

   @include('frontend.student.include.tutorcss')

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar" style="padding-top:20px">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" style="position: relative;">
          <div class="app-brand demo">
            <a href="{{ url('/') }}" class="app-brand-link">
              
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
           @include('frontend.student.include.sidebar')
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
             
               
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  
                @include('frontend.student.include.headernotify')
                
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                
                @include('frontend.student.include.dasboardheader')
                
              </ul>
            </div>
          </nav>
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
               <!--start-->
               <div class="card">
                    <h5 class="card-header">Account Balance: £ {{ $dabit_amount - $credit_amount }} </h5>
                    
                    <div class="card-body">
                         <div class="content">
                                                        <h6>Withdraw Request</h6>
                                                        <p style="color:red">Withdraw any amount of your choice which will be processed in the last week of the month </p>
                                                    </div>

                                                    <form action="{{ url('tutor/withdraw') }}" method="post">
                                                        @csrf

                                                         <div class="form-group mb-3">
                                                            <label for="exampleFormControlInput1">Amount <span style="color:red">*</span></label>
                                                            <input type="text" class="form-control" name="amount" required  value=" {{ $dabit_amount - $credit_amount }}">

                                                          </div>
                                                          <div class="form-group mb-3">
                                                            <label for="exampleFormControlInput1">Bank Name <span style="color:red">*</span></label>
                                                            <input type="text" class="form-control" name="bank_name" required id="exampleFormControlInput1" placeholder="">
                                                          </div>
                                                          <div class="form-group mb-3">
                                                            <label for="exampleFormControlInput1">Name Of Account Holder<span style="color:red">*</span></label>
                                                            <input type="text" class="form-control" name="account_holder_name" required id="exampleFormControlInput1" placeholder="">

                                                          </div>
                                                          <div class="form-group mb-3">
                                                            <label for="exampleFormControlInput1">Account Number <span style="color:red">*</span></label>
                                                            <input type="text" class="form-control" name="account_number" required id="exampleFormControlInput1" placeholder="">
                                                          </div>
                                                          
                                                          <div class="form-group mb-3">
                                                            <label for="exampleFormControlTextarea1">Sort Code<span style="color:red">*</span></label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" required name="account_address" rows="3"></textarea>
                                                          </div>
                                                          <div  class="form-group mb-3 mt-5">
                                                            <button type="submit" class="btn-sm btn-success"> Submit</button>
                                                          </div>
                                                        </form>
                        
                    </div>
                </div>
                
                <!---->
                 <div class="card mt-5">
                    <h5 class="card-header"></h5>
                    
                    <div class="card-body">
                         <div class="row">
                            <div class="col-md-12">
                                   <div class="content">
                                                        <h6>Withdraw History</h6>
                                                    </div>
                               <table class="table table-borderless">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Date</th>
                                                                <th scope="col">Amount</th>
                                                                <th scope="col">Bank Details</th>
                                                                <th scope="col">Transection Details</th>
                                                                <th scope="col">More</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($amountwithdrawrequest as $key => $data)
                                                            <tr>
                                                                <th scope="row">{{ ++$key }}</th>
                                                                <td>{{ $data->created_at->format('d-M-Y') }}</td>
                                                                <td>£ {{ $data->amount }} </td>
                                                                <td>{{ $data->bank_name }},Acc: {{ $data->account_number }}</td>
                                                                <td>{{ $data->transection_details  }} </td>
                                                                <td>@if($data->is_paid==1) Is Paid @elseif($data->is_paid==0) pending @elseif($data->is_paid==2) reject @endif</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                        <tfoot>
                                                            {{ $alldata->links('vendor.pagination.custom') }}
                                                        </tfoot>
                                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
               <!--end-->
                </div>
            <!-- / Content -->
      

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

@include('frontend.student.include.tutorjs')


<script>
    $(document).ready(function(){
        $("#level").change(function(){
            var level_id=$(this).val();
            if(level_id) {
                 $.ajax({
                     url: "{{  url('/get/allsubject/bylevel/') }}"+'/'+level_id,
                     type:"GET",
                     data:'json',
                     success:function(data) {
                      
                           $('#subject').empty();
                        $('#subject').append(' <option disabled >Select</option>');
                        $.each(data,function(index,districtObj){
                         $('#subject').append('<option value="' + districtObj.id + '">'+districtObj.name+'</option>');
                       });
    
                    }
                 });
             } else {
                 alert('sorry data not found');
             }
        });
    });
</script>

<script>
    function addsubject(){
        var subject_id=$("#subject").val();
        var level_id=$("#level").val();
       
        if(subject_id==null){
            alert("Please Select Subject!!");
        }else{
            if(subject_id) {
                 $.ajax({
                     url: "{{  url('/get/subject/subject/submit') }}",
                     type:"GET",
                     
                     data:{
                         'subject_id':subject_id,
                         'level_id':level_id,
                     },
                     success:function(data) {
                        if(data=='ok'){
                            alert('This Subject Already Created');
                           
                        }else if(data=='no'){
                            getallsubject();
                              alert('success');
                            
                        }
                         
    
                    }
                 });
             } else {
                 alert('sorry data not found');
             }
        }
    }
</script>

<script>
    function getallsubject(){
            $.ajax({
             url: "{{  url('/get/allsubject/fromcontroller') }}",
             type:"GET",
             data:'json',
             success:function(data) {
                
                 $("#maindata").html(data);

            }
         });
    }
    getallsubject();
</script>





@endsection