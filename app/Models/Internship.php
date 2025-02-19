<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    use HasFactory;

    protected $table = 'internship';
    protected $primaryKey = 'Internship_id';
    public $timestamps = true;

    protected $fillable = [
        'StartDate', 'EndDate', 'Position', 'DeliveryOption', 'Delivery_Date',
        'company_CompanyId', 'internshipstatus_Internship_Status_id', 'user_user_id', 'document_Doc_id'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_CompanyId');
    }

    public function internshipStatus()
    {
        return $this->belongsTo(InternshipStatus::class, 'internshipstatus_Internship_Status_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_user_id');
    }

    public function document()
    {
        return $this->belongsTo(Document::class, 'document_Doc_id');
    }

    public function internshipHistories()
    {
        return $this->hasMany(InternshipHistory::class, 'internship_Internship_id');
    }
}
