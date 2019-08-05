<div class="container">
    <div class="row">
        @foreach($files as $file)
            <div class="col-md-4">
                <div class="card">
                    <h2 class="card-title">{{ $file }}</h2>
                    <img class="card-img-top" src="{{ '/uploads/images/'.$file }}">
                    <div class="card-body">
                        <strong class="card-title">444</strong>
                        <p class="card-text">555</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
