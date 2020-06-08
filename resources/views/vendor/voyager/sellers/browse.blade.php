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
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Name: {{ $seller->name_of_seller }}</h5>
                                <p class="card-text">
                                    Address: {{ $seller->address->full_address }}
                                </p>
                            </div>
                            <div class="card-footer text-muted">
                            <a href="{{ Route('voyager.sellers.edit',['id'=>$seller->id]) }}" class="btn">Edit</a>
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
