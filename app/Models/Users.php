<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Authenticatable
{
    use HasFactory;

    protected $table = 'user';
    protected $primaryKey = 'Stu_id';
    protected $keyType = 'string'; // เพิ่มบรรทัดนี้
    public $timestamps = true;
    public $incrementing = false; // เนื่องจากใช้ VARCHAR เป็น Primary Key

    protected $fillable = [
        'Stu_id','CurriculumID', 'Name', 'Lastname', 'Date', 'Tel', 'Ethnicity', 
        'Nationality', 'Religion', 'Address', 'Grade', 'Email', 'Treatment', 
        'Skil', 'Reward', 'password', 'user_role_iduser_role'
    ];

    public function role()
    {
        return $this->belongsTo(UserRole::class, 'user_role_iduser_role');
    }

    public function internships()
    {
        return $this->hasMany(Internship::class, 'user_Stu_id');
    }
}
