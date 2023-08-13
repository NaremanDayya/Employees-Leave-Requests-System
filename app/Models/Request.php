<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Observers\RequestsObserver;
class Request extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id','leave_type_id','status','notes','from', 'to'

    ];

    protected static function boot()
    {
        parent::boot();
        Request::observe(RequestsObserver::class);
    }
    public function employee()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function type()
    {
        return $this->belongsTo(LeaveType::class,'leave_type_id');
    }

}
