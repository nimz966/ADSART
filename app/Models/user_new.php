<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_new extends Model
{
    use HasFactory; 
    protected $table = "users";
    protected $fillable =['user_id', 'user_name', 'address' ,'phone_no', 'email', 'user_type', 'password'];

}
