<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActionArea extends Model {
    protected $fillable = ['name', 'description', 'user_id'];
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}