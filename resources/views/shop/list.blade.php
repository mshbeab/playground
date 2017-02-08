@extends('layouts.app')

@section('content')
    <div class="container">
        <div class='row'>
            @include('shop.filter')
        </div>

        <div class='row'>
            @each('shop.header', $shops, 'shop')
        </div>

        <ul class="pager">
            <li class="previous"><a href='{{ $shops->previousPageUrl() }}'>← Prev</a></li>
            <li class="next"><a class="withripple" href='{{ $shops->nextPageUrl() }}'>Next Page →</a></li>
        </ul>

    </div>
@endsection
