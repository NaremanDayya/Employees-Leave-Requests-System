<div class="mb-6">
    <label name="name" for="name" class="inline-block text-lg mb-2">Leave Type Name</label>
    <x-input type="text" class="border border-gray-200 rounded p-2 w-full" value="{{ $leaveType->name }}" name="name" />
   <x-input-error name="name" />
</div>
<div class="mb-6">
    <label name ="description" for="description" class="inline-block text-lg mb-2">Leave Type Description</label>
    <x-textarea type="text" class="border border-gray-200 rounded p-2 w-full" value="{{ $leaveType->description }}" name="description" />
   <x-input-error name="description" />
</div>

<button type="submit" class="btn btn-primary">{{ $button }}</button>
