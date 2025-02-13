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
        'StatusCode', 'DeliveryOption', 'user_Stu_id'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'CompanyId');
    }

    public function user()
    {
        return $this->belongsTo(Users::class, 'user_Stu_id');
    }

    public function documents()
    {
        return $this->hasMany(Document::class, 'internship_InternshipCode');
    }

    public function status()
    {
        return $this->belongsTo(InternshipStatus::class, 'StatusCode');
    }
}
