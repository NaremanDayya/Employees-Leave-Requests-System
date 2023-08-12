<x-layout>
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Add A New Leave Type
            </h2>
        </header>
        <form action="{{ route('leaveTypes.store') }}" method="POST">
            @csrf
            @include('admin.leaveTypes._form',[
                'button' => 'Add Type'
            ])
        </form>
</x-layout>