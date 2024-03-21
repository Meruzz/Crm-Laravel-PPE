<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Validation extends Model {
    protected $fillable = ['activity_id', 'user_id', 'validated_at'];

    public function activity() {
        return $this->belongsTo(Activity::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
