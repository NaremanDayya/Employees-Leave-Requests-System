<x-layout>
    {{-- <x-card class=" p-10 max-w-lg mx-auto mt-24"> --}}
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit Employee Data
            </h2>
        </header>
        <form action="{{ route('leaveTypes.update',$leaveType->id) }}" method="POST">
            @csrf
            @method('PUT')
            @include('admin.leaveTypes._form',[
                'button' => 'Edit Leave Type'
                ])
        </form>
    {{-- </x-card> --}}
</x-layout>
