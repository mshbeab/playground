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
                    <h2 >{{ $shop->name }}</h2>
                    <small >Open Since {{ $shop->created_at->format('M Y') }}</small>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-justify"> {{ $shop->description }} </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('shop.content')
    <tabs>
        <tab name="Gigs" :selected="true">
            @include('shop.gig.list')
        </tab>
        <tab name="Terms & Conditions">
            @include('shop.terms')
        </tab>
        <tab name="Reviews">
            @include('shop.reviews')
        </tab>
    </tabs>
@endsection