<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudentLesson extends Model
{
    use CrudTrait;
    use HasFactory;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'student_lessons';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
     protected $fillable = ['student_id', 'lesson_id', 'first_boundary_control', 'second_boundary_control',
         'session', 'year_id', 'semester_id', 'teacher_id', 'total',
     ];
//$table->unsignedBigInteger('student_id')->nullable();
//            $table->unsignedBigInteger('lesson_id')->nullable();
//            $table->float('first_boundary_control')->nullable();
//            $table->float('second_boundary_control')->nullable();
//            $table->float('session')->nullable();
//            $table->unsignedBigInteger('year_id')->nullable();
//            $table->unsignedBigInteger('semester_id')->nullable();

    public function student(): BelongsTo {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function semester(): BelongsTo {
        return $this->belongsTo(Semester::class);
    }

    public function getCarBrandTitleAttribute()
    {
        return $this->carModel->carBrand->title ?? null;
    }

    public function lesson(): BelongsTo {
        return $this->belongsTo(Lesson::class);
    }

    public function year(): BelongsTo {
        return $this->belongsTo(Year::class, 'year_id');
    }
}
