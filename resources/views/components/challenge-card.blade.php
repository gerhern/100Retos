<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img class="img-thumbnail" src="{{ $url }}"
                alt="{{ $alt }}">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $title }}</h5>
                <p class="card-text">{{ $description }}</p>
                <a href="{{ route($alt) }}" class="btn btn-primary">Ir</a>
            </div>
        </div>
    </div>
</div>
