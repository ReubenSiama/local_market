@extends('voyager::master')

@section('page_title','Sellers')

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
           Sellers
        </h1>
    <a href="{{ Route('voyager.sellers.create') }}" class="btn">Add Seller</a>
        @include('voyager::multilingual.language-selector')
    </div>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @foreach ($sellers->chunk(4) as $chunk)
                @foreach ($chunk as $seller)
                <div class="row">
                    <div class="col-md-3">
                        <div class="card" style="border-style: solid; border-width: 1px;">
                            <div class="card-header text-center" style="padding: 0.5rem;">{{ $seller->name_of_seller }}</div>
                            <div class="card-body">
                                <address>
                                    {{ $seller->address->full_address }} ({{ $seller->licenseType->name }}), <br>
                                    {{ $seller->nearest_landmark }} <br>
                                    PIN Code: {{ $seller->address->pin_code }}
                                </address>
                            </div>
                            <div class="card-footer">
                                <a href="{{ Route('voyager.sellers.edit',['id'=>$seller->id]) }}" class="btn btn-outline-dark">Edit</a>
                                <a href="{{ Route('voyager.sellers.show',['id'=>$seller->id]) }}" class="btn float-right">View</a>
                            </div>
                          </div>
                    </div>
                </div>
                @endforeach
            @endforeach
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="{{ voyager_asset('lib/css/responsive.dataTables.min.css') }}">
@stop

@section('javascript')
    <!-- DataTables -->
    <script>
        
    </script>
@stop
