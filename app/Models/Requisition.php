<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requisition extends Model
{

    protected $fillable =['name','email','phone','asset_id'];
    public function assets()
    {
        return $this->hasMany(Asset::class);
    }
}
