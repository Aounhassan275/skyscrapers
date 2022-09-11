<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'class_id',
        'subject_id',
        'period_id',
        'break_time',
        'teacher_meeting',
        'meeting_and_break_time',
        'off',
        'display_order',
        'teacher_id'
    ];
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function period()
    {
        return $this->belongsTo(Period::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function class()
    {
        return $this->belongsTo(TeacherClass::class,'class_id');
    }
    public function hasHide()
    {
        
        if($this->break_time || $this->teacher_meeting || $this->meeting_and_break_time || $this->off)
        {
            return true;
        }
        return false;
    }
}
