@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @yield('shop.header')
            @yield('shop.content')
        </div>
    </div>
</div>
@endsection
