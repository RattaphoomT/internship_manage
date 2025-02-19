<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $table = 'document';
    protected $primaryKey = 'Doc_id';
    public $timestamps = true;

    protected $fillable = [
        'Doc_CP_intern01', 'Doc_CP_intern02', 'Doc_CP_intern03', 
        'Doc_CP_intern04', 'Doc_5', 'Doc_6', 'Doc_7', 'Doc_Referral', 'Doc_Report'
    ];

    public function internships()
    {
        return $this->hasMany(Internship::class, 'document_Doc_id');
    }
}
