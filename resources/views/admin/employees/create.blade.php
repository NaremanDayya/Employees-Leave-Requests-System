<x-layout>
    {{-- <x-card class=" p-10 max-w-lg mx-auto mt-24"> --}}
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Add An Employee
            </h2>
        </header>
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            @include('admin.employees._form',[
                'button' => ' Add Employee'
            ])
            <input type="hidden" name="type" class="border border-gray-200 rounded p-2 w-full" value="employee" />
        </form>
    {{-- </x-card> --}}
</x-layout>