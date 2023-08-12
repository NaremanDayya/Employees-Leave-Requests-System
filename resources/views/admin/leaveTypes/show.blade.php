<x-layout>
    <div class="flex flex-col items-center justify-center text-center">
        <h3 class="text-2xl mb-2">{{ $leaveType->name }}</h3>
        <div class="text-xl font-bold mb-4">{{ $leaveType->description }}</div>
        <div class="row">
            <div class="col">
                <div class="d-flex align-items-center">
                    <a href="{{ route('leaveTypes.edit', $leaveType->id) }}">
                        <i class="fa-solid fa-pencil"></i> Edit
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="d-flex align-items-center">
                    <form action="{{ route('leaveTypes.destroy', $leaveType->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500" type="submit">
                            <i class="fa-solid fa-trash"></i> Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </x-layout>