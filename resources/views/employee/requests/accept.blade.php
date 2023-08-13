<x-layout>
    <x-alert name="success" class="alert-success"></x-alert>
    <x-alert name="error" class="alert-danger"></x-alert>
<form action="{{ route('requests.accept',$request->id) }}" method="POST">
    @csrf
    <div class="mb-6">
        <label name="reason" for="reason" class="inline-block text-lg mb-2"> Reason</label>
        <x-textarea type="text" class="border border-gray-200 rounded p-2 w-full"  name="reason" />
        <x-errors name="reason" />
    </div>
    <button class="btn btn-success" request="submit">
        <i class="fa-solid fa-check-circle" style="color: green;"></i> Accept
    </button>
</form>
</x-layout>