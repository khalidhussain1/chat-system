<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->belongsTo('App\Models\User', 'client_id', 'id');
    }
    public function project()
    {
        return $this->belongsTo('App\Models\ProjectDetail', 'project_id', 'id');
    }
}
