<div class="col-lg-3 col-md-6 col-sm-12 margin">
    <div class="card">
        <div class="card-header">
            <div class="image-wrapper">
                <img src="{{$img}}" alt="Imagen" class="header-image">
                <a href="{{$link}}" target="_blank" class="explore-button" style="color: white">Explorar</a>
            </div>
        </div>
        <div class="card-body">
            <h4 class="card-title">{{$title}}</h4>
            <p class="card-description">{{$description}}</p>
            <hr>
            <span class="demo-type {{$type === 'Design' ? 'design-type' : 'default-type'}}">{{$type}}</span>
        </div>
    </div>
</div>
