<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Sendcontact extends Model
{
    protected $fillable = ['fname', 'lname', 'email', 'message'];
}
