<div class="card">
    <div class="h-100">

    <div class="card-body ">
        <h5 class="card-title"> {{ $type->name }}</h5>
        <p class="card-text"> {{ $type->description }}</p>
        <div class="d-flex justify-content-between align-items-center">
            {{ $slot }}
        </div>
    </div>
    </div>
</div>
