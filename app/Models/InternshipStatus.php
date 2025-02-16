<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternshipStatus extends Model
{
    use HasFactory;

    protected $table = 'internshipstatus';
    protected $primaryKey = 'StatusCode';
    public $timestamps = true;

    protected $fillable = ['StatusName'];

    public function internships()
    {
        return $this->hasMany(Internship::class, 'internshipstatus_StatusCode', 'StatusCode');
    }
}
