<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternshipHistory extends Model
{
    use HasFactory;

    protected $table = 'internshiphistory';
    protected $primaryKey = 'InternshipHistoryId';
    public $timestamps = false;

    protected $fillable = [
        'Datetime', 'Detail', 'internshipstatus_StatusCode', 
        'internship_InternshipCode', 'user_Stu_id'
    ];

    public function status()
    {
        return $this->belongsTo(InternshipStatus::class, 'internshipstatus_StatusCode');
    }

    public function internship()
    {
        return $this->belongsTo(Internship::class, 'internship_InternshipCode');
    }

    public function user()
    {
        return $this->belongsTo(Users::class, 'user_Stu_id');
    }
}
