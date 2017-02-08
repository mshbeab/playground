@extends('layouts.app')

@section('content')
    <div class="container">
        <div class='row'>
            @include('shop.filter')
        </div>

        <div class='row'>
            @each('shop.header', $shops, 'shop')
        </div>

        {{--<ul class="pager">--}}
            {{--<li class="previous disabled"><a href='{{ url('shops', ['page=1']) }}'>← Prev</a></li>--}}
            {{--<li class="next"><a class="withripple" href='{{ url('shops') }}'>Next Page →</a></li>--}}
        {{--</ul>--}}
        {{ $shops->links() }}
    </div>
@endsection
