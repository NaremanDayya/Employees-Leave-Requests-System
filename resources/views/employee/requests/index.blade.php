<x-layout>
    <x-alert name="success" class="alert-success"></x-alert>
    <x-alert name="error" class="alert-danger"></x-alert>
    @foreach ($requests as $request)
        <div class="card">
            <h5 class="card-header"> {{ $request->type->name}}</h5>
            <div class="card-body">
                <p class="card-text">{{ $request->notes }}</p>
                <p>your request status is :{{ $request->status }}</p>

            </div>
        </div>
    @endforeach
</x-layout>
