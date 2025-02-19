<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternshipHistory extends Model
{
    use HasFactory;

    protected $table = 'internshiphistory';
    protected $primaryKey = 'Internship_History_id';
    public $timestamps = true;

    protected $fillable = [
        'Internship_History_id','Detail', 'user_user_id', 'internship_Internship_id', 'internshipstatus_Internship_Status_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_user_id');
    }

    public function internship()
    {
        return $this->belongsTo(Internship::class, 'internship_Internship_id');
    }

    public function internshipStatus()
    {
        return $this->belongsTo(InternshipStatus::class, 'internshipstatus_Internship_Status_id');
    }
}
