<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = "events";
    protected $primaryKey = 'event_id';
    protected $fillable = [
        'event_id',
        'event_date',
        'standby_date',
        'event_name',
        'location',
        'starting_time',
        'standby_time',
        'no_of_cams',
        'special_requirements',
        'balance_amount',
        'user_created',
        'time_created',
        'status',
        'package_id',
        'quotation_id',
        'ending_time'
    ];

    function users()
    {
        return $this->belongsToMany(User::class, 'user_events', 'event_id', 'user_id');
    }

    function positions($userId)
    {
        return $this->belongsToMany(positions::class, 'user_events', 'event_id', 'position_id')
            ->where('user_id', $userId);
    }

    function user_events()
    {
        return $this->hasMany(UserEvent::class, 'event_id');
    }
}
