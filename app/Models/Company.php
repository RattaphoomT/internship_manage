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
        'CompanyName', 'Address', 'Comlink', 'HRname', 'HRCS', 'is_active'
    ];

    public function internships()
    {
        return $this->hasMany(Internship::class, 'CompanyId');
    }
}
