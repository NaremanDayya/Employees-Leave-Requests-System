<div class="mb-6">
    <label for="name" class="inline-block text-lg mb-2">Employee Name</label>
    <input type="text" class="border border-gray-200 rounded p-2 w-full" value="{{ $employee->name }}" name="name" />
   <x-input-error name="name" />
</div>
<div class="mb-6">
    <label for="email" class="inline-block text-lg mb-2">Employee Email</label>
    <input type="text" class="border border-gray-200 rounded p-2 w-full" value="{{ $employee->email }}" name="email" />
   <x-input-error name="email" />
</div>

<div class="mb-6">
    <label for="password" class="inline-block text-lg mb-2">Employee Password</label>
    <input type="password" class="border border-gray-200 rounded p-2 w-full" value="" name="password" />
   <x-input-error name="password" />
</div>
<button type="submit" class="btn btn-primary">{{ $button }}</button>
