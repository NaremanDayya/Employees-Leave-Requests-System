<x-layout>
<div class="flex flex-col items-center justify-center text-center">
    <h3 class="text-2xl mb-2">{{ $employee->name }}</h3>
    <div class="text-xl font-bold mb-4">{{ $employee->email }}</div>
    <div class="row">
        <div class="col">
            <div class="d-flex align-items-center">
                <a href="{{ route('employees.edit', $employee->id) }}">
                    <i class="fa-solid fa-pencil"></i> Edit
                </a>
            </div>
        </div>
        <div class="col">
            <div class="d-flex align-items-center">
                <form action="{{ route('employees.destroy', $employee->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500" employee="submit">
                        <i class="fa-solid fa-trash"></i> Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
</x-layout>