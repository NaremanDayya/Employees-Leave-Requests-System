<x-layout>
    <div class="container mt-5">
        <strong class="me-auto">Notifications</strong>
        @foreach ($notifications as $notification)
        <div class="row">
            <div class="col">
                <div class="alert {{ str_contains($notification->content, 'Accepted')
                    ? 'alert-success'
                    : (str_contains($notification->content, 'Rejected')
                        ? 'alert-danger'
                        : 'alert-info') }}"
                    role="alert">
                    {{ $notification->content }}
                    <span class="float-end">{{ $notification->created_at->diffForHumans(null, true, true) }}</span>
                </div>
            </div>
        </div>
        
        
        
        
        
        
        @endforeach


    </div>
</x-layout>
