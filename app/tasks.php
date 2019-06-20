<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class tasks extends Model
{
    protected $primaryKey = 'task_id';
    protected $fillable = ['data', 'owner_id'];
    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
