<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = "events";
    protected $primaryKey = 'event_id';
    protected $fillable = ['event_id','event_date','standby_date','event_name','location','starting_time','standby_time','no_of_cams','special_requirements','balance_amount','user_created','time_created','status','package_id','quotation_id'];
}
