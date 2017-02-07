@extends('shop.layout')

@section('shop.header')
    <div class="panel panel-default">
        <div class="panel-heading" style="background-image: url('{{ $shop->cover_image }}'); min-height: 300px;" ></div>
        <div class="panel-body">
            <div class='row'>
                <div class='col-md-4'>
                    <img class="img-thumbnail img-circle img-right" style="position: relative;top: -90px;display: inline;" src="{{ $shop->profile_image }}"/>
                </div>
                <div class="col-md-8">
                    <h3>{{ $shop->name }}</h3>
                    <small >Open Since {{ $shop->created_at->diffForHumans() }}</small>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-justify"> {{ $shop->header_message }} </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('shop.content')
    <div class="panel panel-default ">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active"><a data-toggle="tab" href="#home">Gigs</a></li>
                    <li ><a  data-toggle="tab" href="#shipping">Shipping & Payment</a></li>
                    <li ><a data-toggle="tab" href="#reviews">Reviews</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel-body tab-content">
                    <div id="home" class="tab-pane fade in active text-justify"> @yield('shop.products') </div>
                    <div id="shipping" class="tab-pane fade in text-justify"> @yield('shop.shipping')</div>
                    <div id="reviews" class="tab-pane fade in text-justify"> @yield('shop.reviews') </div>
                </div>
            </div>
        </div>
    </div>
@endsection