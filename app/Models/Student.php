<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use CrudTrait;
    use HasFactory;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'students';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
     protected $fillable = [
         'first_name', 'parent_name', 'last_name', 'date_of_birth', 'email', 'phone', 'enrollment_year_id', 'department_id',
         'faculty_id',
     ];

    // protected $hidden = [];

    public function teacher(): BelongsTo {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function semester(): BelongsTo {
        return $this->belongsTo(Semester::class);
    }

    public function faculty(): BelongsTo {
        return $this->belongsTo(Faculty::class);
    }

    public function department(): BelongsTo {
        return $this->belongsTo(Department::class);
    }

    public function enrollment_year(): BelongsTo {
        return $this->belongsTo(Year::class, 'enrollment_year_id');
    }


}
