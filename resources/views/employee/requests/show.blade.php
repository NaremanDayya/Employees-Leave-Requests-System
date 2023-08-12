<x-layout>
    <x-alert name="success" class="alert-success"></x-alert>
    <x-alert name="error" class="alert-danger"></x-alert>

    <div class="flex flex-col items-center justify-center text-center">
        <h3 class="text-2xl mb-2">{{ $request->type->name }}</h3>
        <h6 class="text-2xl mb-2">{{ $request->status }}</h6>
        <div class="text-xl font-bold mb-4">{{ $request->notes }}</div>
        <div class="row">
            <div class="col">
                <div class="d-flex align-items-center">
                    <form action="{{ route('requests.accept', $request->id) }}" method="POST">
                        @csrf
                        <button class="text-green-500" request="submit">
                            <i class="fa-solid fa-check-circle" style="color: green;"></i> Accept
                        </button>
                    </form>
                </div>
                <div class="col">
                    <div class="d-flex align-items-center">
                        <form action="{{ route('requests.reject', $request->id) }}" method="POST">
                            @csrf
                            <button class="text-red-500" request="submit">
                                <i class="fa-solid fa-times-circle" style="color: red;"></i> Reject
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
