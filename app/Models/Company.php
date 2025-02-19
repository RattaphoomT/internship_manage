<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'company';
    protected $primaryKey = 'CompanyId';
    public $timestamps = true;

    protected $fillable = [
        'Company_Name', 'Company_Adress', 'Company_detail', 'Comlink', 
        'HRname', 'HR_contact'
    ];

    public function internships()
    {
        return $this->hasMany(Internship::class, 'company_CompanyId');
    }
}
