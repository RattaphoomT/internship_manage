<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $table = 'document';
    protected $primaryKey = 'DocId';
    public $timestamps = true;

    protected $fillable = [
        'FPath', 'FPath2', 'internship_InternshipCode'
    ];

    public function internship()
    {
        return $this->belongsTo(Internship::class, 'internship_InternshipCode');
    }
}
