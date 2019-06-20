<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accounts extends Model
{
    protected $primaryKey = 'account_id';
    protected $fillable = [ 'title','link','login_id','login_password','comment','owner_id'];

    public function owner()
    {
    return $this->belongsTo(User::class);
    }   
}

