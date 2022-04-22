<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    use HasFactory;
    public function assignedby()
    {
        
        return $this->belongsTo('App\Models\User', 'assign_by', 'id');
    }
    public function projects()
    {
        return $this->belongsTo('App\Models\ProjectDetail', 'project_id', 'id');
    }
}
