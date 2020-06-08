@extends('voyager::master')

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
                        <button class="btn">Add Image</button>
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
                                <tr>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

    </script>
@stop
