<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'subject',
    ];
    
    

    /**
     * Get the students associated with the teacher.
     */
    public function students()
    {
        return $this->hasMany(Students::class, 'class_teacher_id');
    }
}
