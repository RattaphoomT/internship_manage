<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Users extends Authenticatable
{
    use HasFactory;

    protected $table = 'user';
    protected $primaryKey = 'Stu_id';
    public $timestamps = true;

    protected $fillable = [
        'usernumber','CurriculumID', 'Name', 'Lastname', 'birthday', 'Tel', 'Ethnicity',
        'Nationality', 'Religion', 'Address', 'Grade', 'Email', 'Treatment',
        'Skil', 'Reward', 'password', 'user_role_id'
    ];

    public function userRole()
    {
        return $this->belongsTo(UserRole::class, 'user_role_id', 'iduser_role');
    }

    public function internships()
    {
        return $this->hasMany(Internship::class, 'user_Stu_id', 'Stu_id');
    }
}

