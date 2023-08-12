<x-layout>
<div class="toast-container">
    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        @foreach ($notifications as $notification)
            <div class="toast-header">
                <strong class="me-auto">Notification</strong>
                <small class="text-muted">
                    {{ $notification->created_at->diffForHumans(null, true, true) }}
                </small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                {{ $notification->content }}
            </div>
        @endforeach
    </div>
</div>
</x-layout>