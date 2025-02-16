<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternshipHistory extends Model
{
    use HasFactory;

    protected $table = 'internshiphistory';
    protected $primaryKey = 'InternshipHistoryId';
    public $timestamps = true;

    protected $fillable = [
        'Datetime', 'Detail', 'user_Stu_id', 'internshipstatus_StatusCode', 'internship_InternshipCode'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_Stu_id', 'Stu_id');
    }

    public function internship()
    {
        return $this->belongsTo(Internship::class, 'internship_InternshipCode', 'InternshipCode');
    }

    public function status()
    {
        return $this->belongsTo(InternshipStatus::class, 'internshipstatus_StatusCode', 'StatusCode');
    }
}
