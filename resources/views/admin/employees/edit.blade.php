<x-layout>

    {{-- <x-card class=" p-10 max-w-lg mx-auto mt-24"> --}}
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit Employee Data
            </h2>
        </header>
        <form action="{{ route('employees.update',$employee->id) }}" method="POST">
            @csrf
            @method('PUT')
            @include('admin.employees._form',[
                'button' => 'Edit Employee'
                ])
        </form>
    {{-- </x-card> --}}
</x-layout>
