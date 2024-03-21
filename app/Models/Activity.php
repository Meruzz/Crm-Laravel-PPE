<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model {
    protected $fillable = ['name', 'description', 'area_id'];

    public function actionArea() {
        return $this->belongsTo(ActionArea::class, 'area_id');
    }
}
