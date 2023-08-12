
<x-layout>
    <x-alert name="success" class="alert-success"></x-alert>
    <x-alert name="error" class="alert-danger"></x-alert>
    <div class="row">

        <div class="md-col-8">
            @foreach ($types as $type)
                <div class="card">
                    <h5 class="card-header"><a href="{{ route('leaveTypes.show', $type->id) }}">{{ $type->name }}</a></h5>                
                    <div class="card-body">
                        <p class="card-text">{{ $type->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="md-col-3">
            <button type="button" class="btn btn-success"><a href="{{ route('leaveTypes.create') }}">Add
                    Leave Type</a></button>
        </div>
    </div>
</x-layout>

