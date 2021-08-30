<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEvent extends Model
{
    use HasFactory;
    protected $table = "user_events";
    protected $primaryKey = 'event_id';
    protected $fillable = [
        'event_id',
        'user_id',
        'position_id'
    ];

    function users()
    {
        return $this->hasMany(User::class, 'user_id');
    }

    function events()
    {
        return $this->hasOne(Event::class, 'event_id');
    }
    function positions()
    {
        return $this->hasMany(Positions::class, 'position_id');
    }
}
