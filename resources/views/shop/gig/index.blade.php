<div class="column is-one-third">
    <div class="card">
        <div class="card-image">
            <figure class="image is-4by3">
                <img src="{{$gig->mainImage()}}" alt="Image">
            </figure>
        </div>
        <div class="card-content">
            <div class="content">
                <h4>{{$gig->name}}</h4>
            </div>
        </div>
        <div class="card-footer">
            <div class="card-footer-item">{{number_format($gig->price, 2)}} $</div>
            <div class="card-footer-item"><i class="material-icons">schedule</i>&nbsp;{{$gig->duration}} Min</div>
        </div>
    </div>
</div>