<?php

namespace App\Observers;

use App\Models\Notification;
use App\Models\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RequestsObserver
{
    public function creating(Request $request): void
    {
        $request->user_id = Auth::id();
    }

    public function created(Request $request)
    {
        $name = ucfirst(Auth::user()->name);
        Notification::create([
            'content' => "New Request From $name Submitted",
        ]);
    }
    public function updated(Request $request)
    {
        if ($request->status == 'accepted') {
            Notification::create([
                'content' => "Your Request Accepted",
            ]);
        }elseif($request->status == 'rejected')
        {
            Notification::create([
                'content' => "Your Request Rejected",
            ]);
        }
    }
}
