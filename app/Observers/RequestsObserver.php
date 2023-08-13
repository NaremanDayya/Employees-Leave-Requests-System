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
        $request->reason = '';
    }

    public function created(Request $request)
    {
        $name = ucfirst(Auth::user()->name);
        Notification::create([
            'content' => "New Request From $name Submitted",
            'user_id' => '9',

        ]);
    }
    public function updated(Request $request)
    {
        if ($request->status == 'accepted') {
            $name = $request->type->name;
            Notification::create([
                'content' => "Your Request $name Accepted",
                'user_id' => $request->user_id,

            ]);
        }elseif($request->status == 'rejected')
        {
            Notification::create([
                'content' => "Your Request Rejected",
                'user_id' => $request->user_id,

            ]);
        }
    }
}
