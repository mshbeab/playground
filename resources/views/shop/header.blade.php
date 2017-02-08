<div class="col-md-4">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-image: url('{{ $shop->cover_image }}'); min-height: 300px;" ></div>
        <div class="panel-body">
            <div class='row'>
                <div class='col-md-4'>
                    <img class="img-thumbnail img-circle img-right" style="position: relative;top: -90px;display: inline;" src="{{ $shop->profile_image }}"/>
                </div>
                <div class="col-md-8">
                    <a href="{{ url(sprintf('shops/%s', $shop->slug)) }}"><h2 >{{ $shop->name }}</h2></a>
                    <small >Open Since {{ $shop->created_at->format('M Y') }}</small>
                </div>
            </div>
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="text-justify"> {{ $shop->description }} </div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
</div>