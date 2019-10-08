<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecurrentService extends Model
{
    protected $fillable = ['user_id', 'name', 'price'];

    public function scopeMine($query)
    {
        return $query->where('user_id', auth()->user()->id);
    }
}
