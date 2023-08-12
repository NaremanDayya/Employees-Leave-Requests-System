<x-layout>
    <x-alert name="success" class="alert-success"></x-alert>
    <x-alert name="error" class="alert-danger"></x-alert>
    <div class="row">

        <div class="md-col-8">
            @foreach ($employee as $emp)
                <div class="card">
                    <h5 class="card-header"><a href="{{ route('employees.show', $emp->id) }}"> {{ $emp->name }}</a>
                    </h5>
                    <div class="card-body">
                        <p class="card-text">{{ $emp->email }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="md-col-3">
            <button type="button" class="btn btn-success"><a href="{{ route('employees.create') }}">Add
                    Employee</a></button>
        </div>
    </div>
</x-layout>
