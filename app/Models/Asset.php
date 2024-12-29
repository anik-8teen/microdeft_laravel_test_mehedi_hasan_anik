<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable =['name','status'];

    public function requisition()
    {
        return $this->belongsTo(Requisition::class);
    }
}
