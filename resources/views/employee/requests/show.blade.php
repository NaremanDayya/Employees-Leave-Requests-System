<x-layout>
    <x-alert name="success" class="alert-success"></x-alert>
    <x-alert name="error" class="alert-danger"></x-alert>

    <div class="flex flex-col items-center justify-center text-center">
        <h3 class="text-2xl mb-2">{{ $request->type->name }}</h3>
        <h6 class="text-2xl mb-2">{{ $request->status }}</h6>
        <div class="text-xl font-bold mb-4">{{ $request->notes }}</div>
        <div class="row">
                <div class="col">
                    <form action="{{ route('accept', $request->id) }}">
                        <button class="btn btn-success" request="submit">
                            <i class="fa-solid fa-check-circle" style="color: green;"></i>Accept
                        </button>
                    </form>
                </div>
                <div class="col">
                    <form action="{{ route('reject', $request->id) }}">
                        <button class="btn btn-danger" request="submit">
                            <i class="fa-solid fa-times-circle" style="color: red;"></i> Reject
                        </button>
                    </form>
            </div>
        </div>
    </div>
</x-layout>
