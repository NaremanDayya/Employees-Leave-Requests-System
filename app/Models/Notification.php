<?php

namespace App\Models;

use App\Observers\NotificationObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected static function boot()
    {
        parent::boot();
        Notification::observe(NotificationObserver::class);
    }

    protected $fillable =[
        'user_id','seen_at','content',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function employee()
    {
        return $this->user()
        ->where('type','employee');
    }
     public function administrator()
    {
        return $this->user()
        ->where('type','administrator');
    }
}
