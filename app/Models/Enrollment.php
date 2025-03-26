<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;
    protected $table = 'enrollments';
    public $primaryKey = 'id'; // mặc định id không cần khai báo
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    // Quan hệ với Course
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
