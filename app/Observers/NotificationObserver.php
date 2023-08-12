<?php

namespace App\Observers;

use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class NotificationObserver
{
    public function creating(Notification $notification): void
    {
            $notification->user_id =Auth::id();
            $notification->seen_at =now();
    }
}
