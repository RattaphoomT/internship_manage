<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;

    protected $table = 'internship';
    protected $primaryKey = 'InternshipCode';
    public $timestamps = true;

    protected $fillable = [
        'CompanyId', 'DateSubmit', 'StartDate', 'EndDate', 'Position', 
        'DeliveryOption', 'user_Stu_id', 'company_CompanyId', 'internshipstatus_StatusCode'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_Stu_id', 'Stu_id');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_CompanyId', 'CompanyId');
    }

    public function status()
    {
        return $this->belongsTo(InternshipStatus::class, 'internshipstatus_StatusCode', 'StatusCode');
    }

    public function documents()
    {
        return $this->hasMany(Document::class, 'internship_InternshipCode', 'InternshipCode');
    }

    public function history()
    {
        return $this->hasMany(InternshipHistory::class, 'internship_InternshipCode', 'InternshipCode');
    }
}
