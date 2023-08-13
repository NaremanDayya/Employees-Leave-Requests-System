<x-layout>
    <div class="container mt-5">
        <strong class="me-auto">Notifications</strong>
        @foreach ($notifications as $notification )
        <div class="alert {{ str_contains($notification->content, 'Accepted') ? 'alert-success' :
         (str_contains($notification->content, 'Rejected') ? 'alert-danger' : 'alert-info') }}"
          role="alert">
            {{ $notification->content }}
        </div>
        <small>{{ $notification->created_at->diffForHumans(null, true, true) }}</small>

        @endforeach
          
        
</div>
</x-layout>