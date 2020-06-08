@php
  $edit = $type == 'Edit' ? 1 : 0;
@endphp

@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
      .form-control-file{
        padding: 0.4rem !important;
        width: 100%;
      }
    </style>
@stop

@section('page_title', __('voyager::generic.'.($edit == 1 ? 'edit' : 'add')))

@section('page_header')
    <h1 class="page-title">
        {{ __('voyager::generic.'.($edit ? 'edit' : 'add')) }}
    </h1>
    @include('voyager::multilingual.language-selector')
@stop

@section('content')
  <form action="{{ $edit == 1 ? Route('voyager.sellers.update', ['id'=>$seller->id]) : Route('voyager.sellers.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="{{ $edit == 1 ? 'PUT':'POST' }}">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name">Name Of The Seller To Display For Customer</label>
              <input value="{{ $edit == 1 ? $seller->name_of_seller : '' }}" required type="text" name="name_of_seller" id="name" class="form-control" placeholder="Name Of The Seller To Display For Customer">
            </div>
            <div class="form-group">
              <label for="name_in_licence">Name Appear In License</label>
              <input value="{{ $edit == 1 ? $seller->name_as_on_license : '' }}" required type="text" name="name_as_on_license" id="name_in_licence" class="form-control" placeholder="Name Appear In License">
            </div>
            <div class="form-group">
              <label for="licence_type">Licence Type</label>
              <select name="license_type_id" id="licence_type" class="form-control">
                <option value="">--Select--</option>
                <option {{ $edit == 1 ? $seller->license_type_id == 1 ? 'selected' : '' : '' }} value="1">Private Limited Company</option>
                <option {{ $edit == 1 ? $seller->license_type_id == 2 ? 'selected' : '' : '' }} value="2">Public Limited Company</option>
                <option {{ $edit == 1 ? $seller->license_type_id == 3 ? 'selected' : '' : '' }} value="3">Partnership Firm</option>
              </select>
            </div>
            <div class="form-group">
              <label for="business_type">Business Type</label>
              <select name="business_type_id" id="business_type" class="form-control">
                <option value="">--Select--</option>
                <option {{ $edit == 1 ? $seller->business_type_id == 1 ? 'selected' : '' : '' }} value="1">Super Market</option>
                <option {{ $edit == 1 ? $seller->business_type_id == 2 ? 'selected' : '' : '' }} value="2">Individual Seller</option>
                <option {{ $edit == 1 ? $seller->business_type_id == 3 ? 'selected' : '' : '' }} value="3">Farmer</option>
              </select>
            </div>
            <div class="form-group">
              <label for="establishment_date">Establishment Date</label>
              <input value="{{ $edit == 1 ? $seller->establishment_date : '' }}" required type="date" name="establishment_date" id="establishment_date" class="form-control" placeholder="Establishment Date">
            </div>
            <div class="form-group">
              <label for="nearest_landmark">Nearest Landmark</label>
              <input value="{{ $edit == 1 ? $seller->nearest_landmark : '' }}" required type="text" name="nearest_landmark" id="nearest_landmark" class="form-control" placeholder="Nearest Landmark">
            </div>
            <div class="form-group">
              <label for="shop_working_time">Shop Working Time</label>
              <input value="{{ $edit == 1 ? $seller->working_time : '' }}" required type="time" name="working_time" id="shop_working_time" class="form-control" placeholder="Shop Working Time">
            </div>
            <div class="form-group">
              <label for="shop_working_dates">Shop Working Dates</label>
              <input value="{{ $edit == 1 ? $seller->working_dates : '' }}" required type="date" name="working_dates" id="shop_working_dates" class="form-control" placeholder="Shop Working Dates">
            </div>
            <fieldset>
              <legend>Address And Location</legend>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="latitude">Latitude</label>
                    <input value="{{ $edit == 1 ? $seller->address->latitude : '' }}" required type="text" name="latitude" id="latitude" class="form-control" placeholder="Latitude">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="longitude">Longitude</label>
                    <input value="{{ $edit == 1 ? $seller->address->longitude : '' }}" required type="text" name="longitude" id="longitude" class="form-control" placeholder="Longitude">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="mama_ward_number">Mama Ward Number</label>
                    <input value="{{ $edit == 1 ? $seller->address->mama_ward_number : '' }}" required type="text" name="mama_ward_number" id="mama_ward_number" class="form-control" placeholder="Mama Ward Number">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="pin_code">PIN Code</label>
                    <input value="{{ $edit == 1 ? $seller->address->pin_code : '' }}" required type="text" name="pin_code" id="pin_code" class="form-control" placeholder="PIN Code">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="full_address">Full Address</label>
                <textarea name="full_address" id="full_address" rows="3" class="form-control" placeholder="Full Address">{{ $edit == 1 ? $seller->address->full_address : '' }}</textarea>
              </div>
            </fieldset>
            <div class="form-group">
              <label for="detailed_report">Detailed Report</label>
              <textarea name="detail_report" id="detailed_report" rows="4" class="form-control" placeholder="Detailed Report">{{ $edit == 1 ? $seller->detail_report : '' }}</textarea>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="license_number">License Number</label>
              <input value="{{ $edit == 1 ? $seller->license_number : '' }}" required type="text" name="license_number" id="license_number" class="form-control" placeholder="License Number">
            </div>
            <div class="form-group">
              <label for="license_copy">License Copy</label>
              <input {{ $edit == 1 ? '' : 'required' }} type="file" name="license_copy" id="license_copy" class="form-control-file" placeholder="License Copy">
            </div>
            <div class="form-group">
              <label for="gst_number">GST Number</label>
              <input value="{{ $edit == 1 ? $seller->gst_number : '' }}" required type="text" name="gst_number" id="gst_number" class="form-control" placeholder="GST Number">
            </div>
            <div class="form-group">
              <label for="gst_copy">GST Copy</label>
              <input {{ $edit == 1 ? '' : 'required' }} type="file" name="gst_copy" id="gst_copy" class="form-control-file" placeholder="GST Copy">
            </div>
            <div class="form-group">
              <label for="pan_number">PAN Number</label>
              <input value="{{ $edit == 1 ? $seller->pan_number : '' }}" required type="text" name="pan_number" id="pan_number" class="form-control" placeholder="PAN Number">
            </div>
            <div class="form-group">
              <label for="pan_copy">PAN Copy</label>
              <input {{ $edit == 1 ? '' : 'required' }} type="file" name="pan_copy" id="pan_copy" class="form-control-file" placeholder="PAN Copy">
            </div>
            <div class="form-group">
              <label for="establishment_license_no">Shop and Establishment License No.</label>
              <input value="{{ $edit == 1 ? $seller->shop_and_establishment_license_no : '' }}" required type="text" name="shop_and_establishment_license_no" id="establishment_license_no" class="form-control" placeholder="Shop and Establishment License No.">
            </div>
            <div class="form-group">
              <label for="establishment_license_copy">Shop and Establishment License Copy</label>
              <input {{ $edit == 1 ? '' : 'required' }} type="file" name="shop_and_establishment_license_copy" id="establishment_license_copy" class="form-control-file" placeholder="Shop and Establishment License Copy">
            </div>
            <fieldset>
              <legend>Seller Bank Account Details</legend>
              <div class="form-group">
                <label for="account_number">Bank Account Number</label>
                <input value="{{ $edit == 1 ? $seller->sellerBankAccount->account_number : '' }}" required type="text" name="account_number" id="account_number" class="form-control" placeholder="Bank Account Number">
              </div>
              <div class="form-group">
                <label for="account_name">Account Holder Name</label>
                <input value="{{ $edit == 1 ? $seller->sellerBankAccount->account_holder_name : '' }}" required type="text" name="account_holder_name" id="account_name" class="form-control" placeholder="Account Holder Name">
              </div>
              <div class="form-group">
                <label for="bank_name">Bank Name</label>
                <input value="{{ $edit == 1 ? $seller->sellerBankAccount->bank_name : '' }}" required type="text" name="bank_name" id="bank_name" class="form-control" placeholder="Bank Name">
              </div>
              <div class="form-group">
                <label for="branch_name">Branch Name</label>
                <input value="{{ $edit == 1 ? $seller->sellerBankAccount->branch_name : '' }}" required type="text" name="branch_name" id="branch_name" class="form-control" placeholder="Branch Name">
              </div>
              <div class="form-group">
                <label for="branch_address">Branch Address</label>
                <input value="{{ $edit == 1 ? $seller->sellerBankAccount->branch_address : '' }}" required type="text" name="branch_address" id="branch_address" class="form-control" placeholder="Branch Address">
              </div>
              <div class="form-group">
                <label for="ifsc">IFSC</label>
                <input value="{{ $edit == 1 ? $seller->sellerBankAccount->ifsc : '' }}" required type="text" name="ifsc" id="ifsc" class="form-control" placeholder="IFSC">
              </div>
            </fieldset>
          </div>
        </div>
      </div>
      <div class="card-footer text-center">
        <button class="btn" style="border-radius: 0;">Submit</button>
      </div>
    </div>
  </form>
@stop

@section('javascript')
<script>
  $('#shop_working_dates').datepicker({
      uiLibrary: 'bootstrap4'
  });
</script>
@stop
