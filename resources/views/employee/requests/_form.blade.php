<div class="container">
<div class="mb-6">
    <input type="hidden" name="status" value="waiting">
    <label name="type" for="type" class="inline-block text-lg mb-2">Leave Type</label>
    <select class="form-select" name="type_id" id="type_id">
        <option value="">No Type</option>
        @foreach ($types as $type)
            <option value="{{ $type->id }}">{{ $type->name }}</option>
        @endforeach
    </select>
    <x-input-error name="type" />
</div>
<div class="mb-6">
    <label name="from" for="from" class="inline-block text-lg mb-2"> From</label>
    <input type="date" class="border border-gray-200 rounded p-2 w-full" value="{{ $empRequests->from }}"
        name="from" />
    <x-input-error name="from" />
</div>
<div class="mb-6">
    <label name="to" for="to" class="inline-block text-lg mb-2"> To</label>
    <input type="date" class="border border-gray-200 rounded p-2 w-full" value="{{ $empRequests->to }}"
        name="to" />
    <x-input-error name="to" />
</div>
<div class="mb-6">
    <label name="notes" for="notes" class="inline-block text-lg mb-2"> Notes</label>
    <x-textarea type="text" class="border border-gray-200 rounded p-2 w-full" value="{{ $empRequests->notes }}"
        name="notes" />
    <x-input-error name="notes" />
</div>
</div>

<button type="submit" class="btn btn-primary">{{ $button }}</button>
