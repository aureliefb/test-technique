<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // to insert timestamps into database
    public $timestamps = true;
    // specify which attributes can be modified in the form contact
    protected $fillable = ['last_name', 'first_name', 'email', 'phone', 'subject'];
}
