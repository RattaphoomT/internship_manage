<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternshipStatus extends Model
{
    use HasFactory;

    protected $table = 'internshipstatus';
    protected $primaryKey = 'Internship_Status_id';
    public $timestamps = true;

    protected $fillable = ['StatusName'];

    public function internships()
    {
        return $this->hasMany(Internship::class, 'internshipstatus_Internship_Status_id');
    }

    public function internshipHistories()
    {
        return $this->hasMany(InternshipHistory::class, 'internshipstatus_Internship_Status_id');
    }
}
