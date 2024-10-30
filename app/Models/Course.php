class Course extends Model
{
    protected $fillable = ['courses_name', 'department_id', 'course_duration'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function alumni()
    {
        return $this->belongsToMany(Alumni::class, 'alumni_course');
    }
}
