<x-layout>
<div class="toast-container">
    {{-- <div class="toast" role="alert" aria-live="assertive" aria-atomic="true"> --}}
        <strong class="me-auto">Notification</strong>

        @foreach ($notifications as $notification )
        <div class="toast-header">
            <small class="text-muted">
                {{ $notification->created_at->diffForHumans(null, true, true) }}
            </small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {{ $notification->content }}
        </div>
        @endforeach
    {{-- </div> --}}
</div>
</x-layout>