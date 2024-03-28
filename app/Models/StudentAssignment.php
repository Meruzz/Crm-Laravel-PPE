<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAssignment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'level', 'parallel', 'academic_year_id'];

    // Relaciones
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function academicYear() {
        return $this->belongsTo(AcademicYear::class);
    }
}
