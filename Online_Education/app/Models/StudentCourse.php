<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    use HasFactory;
    protected $fillable =['student_name','phone','email','local_city','scourse_category_id','course_duration','Lac_description'];
    

}
