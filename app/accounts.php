<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accounts extends Model
{
    protected $primaryKey = 'account_id';
    protected $fillable = ['url','username','password','comment'];
}
