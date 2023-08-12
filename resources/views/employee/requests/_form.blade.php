<div class="mb-6">
    <input type="hidden" name="status" value="waiting">
    <label name="type" for="type" class="inline-block text-lg mb-2">Leave Type</label>
    <select class="form-select" name="type_id" id="type_id">
        <option value="">No Type</option>
        @foreach ($types as $type)
            <option value="{{ $type->id }}">{{ $type->name }}</option>
        @endforeach
    </select>
    <x-errors name="type" />
</div>
<div class="mb-6">
    <label name="notes" for="notes" class="inline-block text-lg mb-2"> Notes</label>
    <x-textarea type="text" class="border border-gray-200 rounded p-2 w-full" value="{{ $empRequests->notes }}"
        name="notes" />
    <x-errors name="notes" />
</div>

<button type="submit" class="btn btn-primary">{{ $button }}</button>
