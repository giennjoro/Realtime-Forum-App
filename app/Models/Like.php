<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Reply;

class Like extends Model
{
    protected $guarded = [];
    public function reply(){
        return $this->belongsTo(Reply::class);
    }

}
