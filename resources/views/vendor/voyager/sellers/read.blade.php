@extends('voyager::master')
@section('css')
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <style>
    .form-control-file{
      padding: 0.4rem !important;
      width: 100%;
    }
  </style>
@stop
@section('page_title', 'View Seller')

@section('page_header')
  <h1 class="page-title">
    View Seller &nbsp;

    <a href="{{ route('voyager.sellers.edit', $seller->id) }}" class="btn btn-xs">
      <span class="glyphicon glyphicon-pencil"></span>&nbsp;
      {{ __('voyager::generic.edit') }}
    </a>
    {{-- <a href="{{ route('voyager.settings.delete', $seller->id) }}" title="{{ __('voyager::generic.restore') }}" class="btn btn-default restore" data-id="{{ $seller->id }}" id="restore-{{ $seller->id }}">
        <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
    </a> --}}
  </h1>
  @include('voyager::multilingual.language-selector')
@stop

@section('content')
  <div class="page-content read container-fluid">
    <div class="row">
      <div class="col-md-12 text-center">
        <h4>{{ strtoupper($seller->name_of_seller) }}</h4>
        <hr>
        <div class="row">
          <div class="col-md-6">
            <table class="table">
              <tbody>
                  <tr>
                    <th class="text-center" colspan="4">
                      BANK ACCOUNT DETAILS
                    </th>
                  </tr>
                  <tr>
                    <th>Account Number</th>
                    <td>{{ $seller->sellerBankAccount->account_number }}</td>
                    <th>Branch Name</th>
                    <td>{{ $seller->sellerBankAccount->branch_name }}</td>
                  </tr>
                  <tr>
                    <th>Account Holder Name</th>
                    <td>{{ $seller->sellerBankAccount->account_holder_name }}</td>
                    <th>Branch Address</th>
                    <td>{{ $seller->sellerBankAccount->branch_address }}</td>
                  </tr>
                  <tr>
                      <th>Bank Name</th>
                      <td>{{ $seller->sellerBankAccount->bank_name }}</td>
                      <th>IFSC</th>
                      <td>{{ $seller->sellerBankAccount->ifsc }}</td>
                  </tr>
              </tbody>
            </table>
            <hr>
            <label>Shop Images</label>
            <br>
            <button class="btn" data-toggle="modal" data-target="#myModal">Add Image</button>
            <br>
            <label>Outside Shop Image</label>
            @foreach ($seller->shopImage->chunk(3) as $chunk)
            <div class="row">
              @foreach($chunk as $image)
              <div class="col-md-4">
                  <img src="/images/shop_images/{{ $image->image }}" class="img-fluid" alt="Cinque Terre" height="100">
              </div>
              @endforeach
            </div>
            @endforeach
            <label>Inside Shop Image</label>
            @foreach ($seller->insideShopImage->chunk(3) as $chunk)
            <div class="row">
              @foreach($chunk as $image)
              <div class="col-md-4">
                  <img src="/images/shop_images/{{ $image->image }}" class="img-fluid" alt="Cinque Terre" height="100">
              </div>
              @endforeach
            </div>
            @endforeach
          </div>
          <div class="col-md-6">
            <table class="table">
              <tbody>
                  <tr>
                      <th class="text-center" colspan="4">ADDRESS</th>
                  </tr>
                  <tr>
                      <th>Latitude | Longitude</th>
                      <td colspan="3" style="text-align: right;">{{ $seller->address->latitude }} | {{ $seller->address->longitude }}</td>
                  </tr>
                  <tr>
                      <th>MAMA WARD NUMBER</th>
                      <td style="text-align: right;">{{ $seller->address->mama_ward_number }}</td>
                      <th>PIN Code</th>
                      <td style="text-align: right;">{{ $seller->address->pin_code }}</td>
                  </tr>
                  <tr>
                      <th>Full Address</th>
                      <td colspan="3" style="text-align: right;">{{ $seller->address->full_address }}</td>
                  </tr>
              </tbody>
            </table>
            <hr>
            <label>Business Partners</label>
            <br>
            <button class="btn" data-toggle="modal" data-target="#add_partners">Add Partners</button>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Owner name</th>
                    <th>Whatsapp No</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($seller->businessPartner as $partner)
                    <tr>
                      <td>{{ $partner->name_of_the_owner }}</td>
                      <td>{{ $partner->whatsapp_number }}</td>
                      <td>{{ $partner->email_id }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- add images --}}

<!-- The Modal -->
<form action="{{ Route('add-shop-image',['id'=>$seller->id]) }}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Images</h4>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <table class="table" id="theTable">
            <tr>
              <th>Type</th>
              <th colspan="2">Image</th>
            </tr>
            <tr>
              <td>
                <select required name="type[]" class="form-control">
                  <option value="">--Select--</option>
                  <option value="outside_shop">Outside shop image</option>
                  <option value="inside_shop">Inside shop image</option>
                </select>
              </td>
              <td>
                <input required type="file" name="imageFile[]" class="form-control-file" accept="image/*">
              </td>
              <td>
                <button type="button" style="padding: .3rem;" onclick="deleteRow(this);">
                  <i class="fas fa-trash"></i>
                </button>
              </td>
            </tr>
          </table>
          <button type="button" class="btn" onclick="addRow()">
            <i class="fas fa-plus"></i>
          </button>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn" type="submit">Add</button>
          <button type="button" class="btn" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
</form>


{{-- add partners --}}

<!-- The Modal -->
<form action="{{ Route('add-partner', ['id'=>$seller->id]) }}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="modal fade" id="add_partners">
    <div class="modal-dialog" style="width: 90%">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Partners</h4>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <table class="table" id="partnerTable">
            <tr>
              <th>Owner Name</th>
              <th>Mobile No.</th>
              <th>Whatsapp No.</th>
              <th>Email</th>
              <th>Aadhar No.</th>
              <th>Aadhar Image</th>
              <th>Pan Card No.</th>
              <th>Pan Card Image</th>
              <th colspan="2">Passport Size Photo</th>
            </tr>
            <tr>
              <td><input required placeholder="Name" type="text" name="owner_name[]" class="form-control"></td>
              <td><input required placeholder="Mobile" type="text" name="mobile_no[]" class="form-control"></td>
              <td><input required placeholder="Whatsapp" type="text" name="whatsapp_no[]" class="form-control"></td>
              <td><input required placeholder="Email" type="text" name="email[]" class="form-control"></td>
              <td><input required placeholder="Aadhar" type="text" name="aadhar_no[]" class="form-control"></td>
              <td><input required type="file" accept="image/*" name="aadhar_image[]" class="form-control-file"></td>
              <td><input required placeholder="PAN Card" type="text" name="pan_card_no[]" class="form-control"></td>
              <td><input required type="file" accept="image/*" name="pan_card_image[]" class="form-control-file"></td>
              <td><input required type="file" accept="image/*" name="passport_size_photo[]" class="form-control-file" accept="image/*"></td>
              <td>
                <button type="button" style="padding: .3rem;" onclick="deletePartnerRow(this);">
                  <i class="fas fa-trash"></i>
                </button>
              </td>
            </tr>
          </table>
          <button type="button" class="btn" onclick="addPartnerRow()">
            <i class="fas fa-plus"></i>
          </button>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn">Add Partner</button>
          <button type="button" class="btn" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
</form>

<table>
  <tr class="hidden" id="templateRow">
    <td>
      <select required name="type[]" class="form-control">
        <option value="">--Select--</option>
        <option value="outside_shop">Outside shop image</option>
        <option value="inside_shop">Inside shop image</option>
      </select>
    </td>
    <td>
      <input required type="file" name="imageFile[]" class="form-control-file" accept="image/*">
    </td>
    <td>
      <button type="button" style="padding: .3rem;" onclick="deleteRow(this);">
        <i class="fas fa-trash"></i>
      </button>
    </td>
  </tr>
</table>
<table>
  <tr class="hidden" id="partnerTemplateRow">
    <td><input required placeholder="Name" type="text" name="owner_name[]" class="form-control"></td>
    <td><input required placeholder="Mobile" type="text" name="mobile_no[]" class="form-control"></td>
    <td><input required placeholder="Whatsapp" type="text" name="whatsapp_no[]" class="form-control"></td>
    <td><input required placeholder="Email" type="text" name="email[]" class="form-control"></td>
    <td><input required placeholder="Aadhar" type="text" name="aadhar_no[]" class="form-control"></td>
    <td><input required type="file" accept="image/*" name="aadhar_image[]" class="form-control-file"></td>
    <td><input required placeholder="PAN Card" type="text" name="pan_card_no[]" class="form-control"></td>
    <td><input required type="file" accept="image/*" name="pan_card_image[]" class="form-control-file"></td>
    <td><input required type="file" accept="image/*" name="passport_size_photo[]" class="form-control-file" accept="image/*"></td>
    <td>
      <button type="button" style="padding: .3rem;" onclick="deletePartnerRow(this);">
        <i class="fas fa-trash"></i>
      </button>
    </td>
  </tr>
</table>
@stop

@section('javascript')
    <script>
        var deleteFormAction;
        $('.delete').on('click', function (e) {
            var form = $('#delete_form')[0];

            if (!deleteFormAction) {
                // Save form action initial value
                deleteFormAction = form.action;
            }

            form.action = deleteFormAction.match(/\/[0-9]+$/)
                ? deleteFormAction.replace(/([0-9]+$)/, $(this).data('id'))
                : deleteFormAction + '/' + $(this).data('id');

            $('#delete_modal').modal('show');
        });

        var maxID = 0;
        function getTemplateRow() {
          var x = document.getElementById("templateRow").cloneNode(true);
          x.id = "";
          x.className = "";
          x.innerHTML = x.innerHTML.replace(/{id}/, ++maxID);
          return x;
        }
        function addRow() {
          var t = document.getElementById("theTable");
          var rows = t.getElementsByTagName("tr");
          var r = rows[rows.length - 1];
          r.parentNode.insertBefore(getTemplateRow(), r);
        }

        function deleteRow(el) {
          // while there are parents, keep going until reach TR 
          while (el.parentNode && el.tagName.toLowerCase() != 'tr') {
              el = el.parentNode;
          }

          // If el has a parentNode it must be a TR, so delete it
          // Don't delte if only 3 rows left in table
          if (el.parentNode && el.parentNode.rows.length > 2) {
              el.parentNode.removeChild(el);
          }
        }

        // business partner
        var partnerID = 0;
        function getPartnerTemplateRow() {
          var x = document.getElementById("partnerTemplateRow").cloneNode(true);
          x.id = "";
          x.className = "";
          x.innerHTML = x.innerHTML.replace(/{id}/, ++partnerID);
          return x;
        }
        function addPartnerRow() {
          var t = document.getElementById("partnerTable");
          var rows = t.getElementsByTagName("tr");
          var r = rows[rows.length - 1];
          r.parentNode.insertBefore(getPartnerTemplateRow(), r);
        }

        function deletePartnerRow(el) {
          // while there are parents, keep going until reach TR 
          while (el.parentNode && el.tagName.toLowerCase() != 'tr') {
              el = el.parentNode;
          }

          // If el has a parentNode it must be a TR, so delete it
          // Don't delte if only 3 rows left in table
          if (el.parentNode && el.parentNode.rows.length > 2) {
              el.parentNode.removeChild(el);
          }
        }
    </script>
@stop
