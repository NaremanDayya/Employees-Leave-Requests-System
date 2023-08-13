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
        $administrators = User::where('type', 'administrator')->get();
        foreach ($administrators as $administrator) {
            Notification::create([
                'content' => "New Request From $name Submitted",
                'user_id' => $administrator->id,

            ]);
        }
    }
    public function updated(Request $request)
    {
        $name = $request->type->name;

        if ($request->status == 'accepted') {
            Notification::create([
                'content' => "Your Request $name Accepted",
                'user_id' => $request->user_id,

            ]);
        } elseif ($request->status == 'rejected') {
            Notification::create([
                'content' => "Your Request $name Rejected",
                'user_id' => $request->user_id,

            ]);
        }
    }
}
