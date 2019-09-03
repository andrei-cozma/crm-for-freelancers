<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function scopeMine($query)
    {
        return $query->where('user_id', auth()->user()->id);
    }
}
