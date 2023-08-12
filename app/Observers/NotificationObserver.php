<?php

namespace App\Observers;

use App\Models\Notification;
use App\Models\Request;
use Illuminate\Support\Facades\Auth;

class NotificationObserver
{
    public function creating(Notification $notification): void
    {
            $notification->seen_at =null;
    }
}
