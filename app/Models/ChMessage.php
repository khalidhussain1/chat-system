<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChMessage extends Model
{
    public function sender()
    {
        return $this->belongsTo('App\Models\User', 'to_id', 'id');
    }
    public function reciver()
    {
        return $this->belongsTo('App\Models\User', 'from_id', 'id');
    }
}
