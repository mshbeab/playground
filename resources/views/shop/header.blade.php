<div class="col-md-4">
    <div class="panel panel-default">
        <div class="panel-heading" style="background-image: url('{{ $shop->cover_image }}'); min-height: 200px;" ></div>
        <div class="panel-body">
            <div class='row'>
                <div class='col-md-4'>
                    <img class="img-thumbnail img-circle img-right" style="position: relative;top: 0px;display: inline;" src="{{ $shop->profile_image }}"/>
                </div>
                <div class="col-md-8">
                    <a href="{{ url('shops', $shop->slug) }}"><h4 >{{ $shop->name }}</h4></a>
                    <small >Open Since {{ $shop->created_at->format('M Y') }}</small>
                </div>
            </div>
        </div>
        <div class="panel-footer panel-info">
            <ul class="list-inline list-unstyled">
                <li><span><i class="material-icons">favorite</i> {{ rand(0, 500) }}</span></li>
                <li><span><i class="material-icons">event</i> {{ rand(0, 500) }}</span></li>
            </ul>
        </div>
    </div>
</div>