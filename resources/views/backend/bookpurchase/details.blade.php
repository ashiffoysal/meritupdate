@extends('layouts.backend')
@section('content')
    <style>

        .container:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card {
            background: #ffffff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: scale(1.02);
        }
        h2 {
            font-size: 24px;
            border-bottom: 3px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 15px;
            color: #333;
        }
        .details-group p {
            font-size: 16px;
            margin: 10px 0;
            color: #444;
        }
        .details-group p strong {
            color: #000;
        }
        .highlight {
            background-color: #007bff;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
        }
    </style>
<div class="container">
        <!-- Customer Details Section -->
        <div class="card">
            <h2>Customer Details</h2>
            <div class="details-group">
                <p><strong>Name:</strong> {{ $data->name }} {{ $data->middle_name }} {{ $data->last_name }}</p>
                <p><strong>Email:</strong> {{ $data->email }}</p>
                <p><strong>Phone:</strong> {{ $data->phone }}</p>
                <p><strong>Address:</strong> {{ $data->address }}</p>
                <p><strong>Post Code:</strong> {{ $data->post_code }}</p>
            </div>
            
            
        </div>
        <div class="card">
            <h2>Booking Details</h2>
            <div class="details-group">
                <p><strong>Year:</strong> {{ $data->resource_name }}</p>
                <p><strong>Type:</strong> @if($data->resource_type=='individual'){{ $data->resource_details }} @else Combo( {{ $data->resource_name }}) @endif</p>
                
            </div>
        </div>
        <!-- Payment Information Section -->
        <div class="card">
            <h2>Payment Information</h2>
            <div class="details-group">
                <p><strong>Total Amount:</strong> £ {{ $data->total_amount }}</p>
                <p><strong>Payment Status:</strong>@if($data->is_paid==1) <span class="highlight">Paid</span>@elseif($data->is_paid==0) <span class="btn btn-danger"> Unpaid </span>@endif</p>
              
                <p><strong>Transaction ID:</strong> {{ $data->transection_id }}</p>
                <p><strong>Delivery Status:</strong> 
                @if($data->status==0)<span class="btn btn-danger">Pending</span>@endif
                
                 @if($data->status==1)<span class="btn-warning">Ready To Post</span>@endif
                  @if($data->status==2)<span class="btn-success">Posted</span>@endif
                
                </p>
            </div>
        </div>
        <div class="card">
            <h2>Delivery Status</h2>
            <div class="details-group">
                <form action="{{ url('admin/book-purchase-list/details/update') }}" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Status</label>
            @csrf
            <input type="hidden" name="id" value="{{ $data->id }}">
            <select  name="status" style="-0.25rem 1rem !important">
                <option value="0"  @if($data->status==0) selected @endif>Pending</option>
                <option value="1" @if($data->status==1) selected @endif>Ready To Deliver</option>
                <option value="2" @if($data->status==2) selected @endif>Delivered</option>
            </select>
            
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Notes</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Notes" name="notes" value="{{ $data->notes }}">
          </div>
        
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
                    </div>
                </div>
            </div>
@endsection