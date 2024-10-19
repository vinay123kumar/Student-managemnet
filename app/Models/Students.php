<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name', 
        'class_teacher_id', 
        'class', 
        'admission_date', 
        'yearly_fees'
    ];
    

    /**
     * Get the teacher associated with the student.
     */
    public function teacher()
    {
        return $this->belongsTo(Teachers::class, 'class_teacher_id');
    }
}
