<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumniCourse extends Model
{
    use HasFactory;

    protected $table = 'alumni_course';

    protected $fillable = [
        'alumni_id',
        'course_id',
    ];

    // Liên kết với cựu sinh viên (Alumni)
    public function alumni()
    {
        return $this->belongsTo(Alumni::class);
    }

    // Liên kết với khóa học (Course)
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
